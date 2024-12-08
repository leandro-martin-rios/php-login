document.getElementById('loginForm').onsubmit = function() {
    if (document.getElementById('username').value === "" || document.getElementById('password').value === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }
};