document.addEventListener("DOMContentLoaded", function () {
    const editIcons = document.querySelectorAll(".edit-icon");
    const saveIcons = document.querySelectorAll(".save-icon");

    editIcons.forEach(icon => {
        icon.addEventListener("click", function () {
            const row = this.closest("tr");
            const cells = row.querySelectorAll("td");

            for (let i = 1; i <= 3; i++) {
                const input = document.createElement("input");
                input.value = cells[i].textContent;
                cells[i].textContent = "";
                cells[i].appendChild(input);
            }

            this.style.display = "none";
            row.querySelector(".save-icon").style.display = "inline-block";
        });
    });

    saveIcons.forEach(icon => {
        icon.addEventListener("click", function () {
            const row = this.closest("tr");
            const cells = row.querySelectorAll("td");

            const id = cells[0].textContent;
            const title = cells[1].querySelector("input").value;
            const desc = cells[2].querySelector("input").value;
            const date = cells[3].querySelector("input").value;

            fetch('../php/updateAnnounce.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    action: 'update',
                    announcementID: id,
                    ann_title: title,
                    ann_description: desc,
                    event_date: date
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    cells[1].textContent = title;
                    cells[2].textContent = desc;
                    cells[3].textContent = date;

                    this.style.display = "none";
                    row.querySelector(".edit-icon").style.display = "inline-block";
                } else {
                    alert("Update failed: " + data.error);
                }
            });
        });
    });
});
