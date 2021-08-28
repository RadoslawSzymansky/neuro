const CASES = document.querySelectorAll('.case');
const CASES_CONTENTS = document.querySelectorAll('.case-content');

CASES.forEach( item => {
  item.addEventListener('click', () => {
    CASES.forEach(i => i.classList.remove('active'));
    CASES_CONTENTS.forEach(i => i.classList.remove('active'));
    const content = document.querySelector(`.case-content[data-id="${item.dataset.id}"]`);
    content.classList.add('active');
    item.classList.add('active');

    window.scrollTo(0, content.offsetTop - 60);
  });
});

CASES_CONTENTS.forEach( (item) => {
  item.querySelector('.close').addEventListener('click', () => {
    item.classList.remove('active');
    document.querySelector(`.case[data-id="${item.dataset.id}"]`).classList.remove('active');
  });
});