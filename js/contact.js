const formRows = document.querySelectorAll('.input-row');

formRows.forEach(row => {
    const input = row.querySelector('input');
    const textarea = row.querySelector('textarea');

    if(input) {
        input.addEventListener('focus', () => {
            row.classList.add('active');
        });
        
        input.addEventListener('focusout', (e) => {
            if (e.target.value) {
                row.classList.add('active');
            } else {
                row.classList.remove('active');
            }
        });

        input.addEventListener('input', (e) => {
            if (e.target.value) {
                row.classList.add('active');
            } else {
                row.classList.remove('active');
            }
        });
    }

    if (textarea) {
        textarea.addEventListener('focus', () => {
            row.classList.add('active');
        });

        textarea.addEventListener('focusout', (e) => {
            if (e.target.value) {
                row.classList.add('active');
            } else {
                row.classList.remove('active');
            }
        });

        
        textarea.addEventListener('input', (e) => {
            if (e.target.value) {
                row.classList.add('active');
            } else {
                row.classList.remove('active');
            }
        });
    }
});

document.querySelector('.go-top').addEventListener('click', () => {
    window.scrollTo(0,0)
})