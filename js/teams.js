const TEAMS = document.querySelectorAll('.teamMember');
const TEAM_MEMBER_CONTENTS = document.querySelectorAll('.teamMember-content');

TEAMS.forEach( item => {
  item.addEventListener('click', () => {
    TEAMS.forEach(i => i.classList.remove('active'));
    TEAM_MEMBER_CONTENTS.forEach(i => i.classList.remove('active'));
    const content = document.querySelector(`.teamMember-content[data-id="${item.dataset.id}"]`);
    content.classList.add('active');
    item.classList.add('active');

    item.querySelector('.folding').addEventListener('click', (e) => {
      e.stopImmediatePropagation();
      e.stopPropagation();
      e.preventDefault();
      item.classList.remove('active');
      content.classList.remove('active');
    })

    window.scrollTo(0, content.offsetTop - 310);
  });
});

TEAM_MEMBER_CONTENTS.forEach( (item) => {
  item.querySelector('.close').addEventListener('click', () => {
    item.classList.remove('active');
    document.querySelector(`.teamMember[data-id="${item.dataset.id}"]`).classList.remove('active');
  });
});
