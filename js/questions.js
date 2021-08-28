const QUESTIONS = document.querySelectorAll('.question');

if (QUESTIONS.length) {

  QUESTIONS.forEach( q => {
    q.addEventListener('click', () => {
      QUESTIONS.forEach(q => q.classList.remove('active'));
      q.classList.add('active');
    });
  });
};  