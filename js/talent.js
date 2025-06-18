const talents = [
      { name: 'Talent Name', education: 'Education of talent', bio: 'Talent biography.' },
      { name: 'Talent Name', education: 'Education of talent', bio: 'Talent biography.' },
      { name: 'Talent Name', education: 'Education of talent', bio: 'Talent biography.' },
      { name: 'Talent Name', education: 'Education of talent', bio: 'Talent biography.' },
      { name: 'Talent Name', education: 'Education of talent', bio: 'Talent biography.' },
      { name: 'Talent Name', education: 'Education of talent', bio: 'Talent biography.' },
    ];

    function createCard(talent) {
      return `
        <div class="card">
          <img src="https://img.icons8.com/ios/50/image--v1.png" alt="placeholder"/>
          <h3>${talent.name}</h3>
          <p>${talent.education}</p>
          <p>${talent.bio}</p>
          <a href="#">See Info</a>
        </div>
      `;
    }

    function renderCards(data) {
      const grid = document.getElementById('talentGrid');
      grid.innerHTML = data.map(createCard).join('');
    }

    document.getElementById('searchInput').addEventListener('input', function() {
      const query = this.value.toLowerCase();
      const filtered = talents.filter(t => t.name.toLowerCase().includes(query));
      renderCards(filtered);
    });

    renderCards(talents);