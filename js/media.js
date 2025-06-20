document.addEventListener("DOMContentLoaded", function () {
    // === Feed rendering from localStorage ===
    const feedContainer = document.getElementById("feed-container");
    const posts = JSON.parse(localStorage.getItem("posts")) || [];

    posts.reverse().forEach(post => {
        const postElement = document.createElement("div");
        postElement.className = "post";

        if (post.type === "image") {
            postElement.innerHTML = `
                <img src="${post.media}" alt="uploaded image">
                <p>${post.caption}</p>
            `;
        } else if (post.type === "video") {
            postElement.innerHTML = `
                <video src="${post.media}" controls></video>
                <p>${post.caption}</p>
            `;
        }

        feedContainer.appendChild(postElement);
    });

    // === Modal Handling ===
    const mediaModal = document.getElementById("mediaModal");
    const openMediaBtn = document.getElementById("openMediaBtn");
    const closeMediaBtn = document.getElementById("closeMediaBtn");

    if (openMediaBtn && mediaModal && closeMediaBtn) {
        // Open modal
        openMediaBtn.addEventListener("click", function () {
            mediaModal.style.display = "flex";
        });

        // Close modal by 'X' button
        closeMediaBtn.addEventListener("click", function () {
            mediaModal.style.display = "none";
        });

        // Close modal when clicking outside the content
        window.addEventListener("click", function (event) {
            if (event.target === mediaModal) {
                mediaModal.style.display = "none";
            }
        });
    }
});
