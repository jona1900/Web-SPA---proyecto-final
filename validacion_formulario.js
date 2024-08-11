document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form');
    
    loginForm.addEventListener('submit', function(event) {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        
        if (email === '' || password === '') {
            alert('Campo incompleto.');
            event.preventDefault();
        }
    });
});
