document.getElementById('loginForm').addEventListener('submit', function (e) {
    const email = this.email.value;
    const password = this.password.value;

    if (!email.includes('@')) {
        alert("Correo electrónico no válido.");
        e.preventDefault();
    }

    if (password.trim().length < 6) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        e.preventDefault();
    }
});