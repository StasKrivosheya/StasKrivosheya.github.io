// Switchers between Login & Register
let swt = document.getElementById("switcher");
let lgn = document.getElementById("login");
let rgs = document.getElementById("register");

function switchLogin() {
    swt.style.left = "0px";
    lgn.style.left = "35px";
    rgs.style.left = "400px";
}

function switchRegister() {
    swt.style.left = "100px";
    // -35px - 350px * 0.8 - 2 * 10px (10 - padding)
    lgn.style.left = "-325px";
    rgs.style.left = "35px";
}

// Custom validation messages
let email = document.getElementById("reg-mail");
email.addEventListener("input", function (event) {
    if (email.validity.typeMismatch) {
        email.setCustomValidity("Жду недождусь когда же Вы введете настоящую почту...");
    } else {
        email.setCustomValidity("");
    }
});

let psw = document.getElementById("reg-psw");
psw.addEventListener("input", function (event) {
    if (psw.validity.patternMismatch) {
        psw.setCustomValidity("Пароль не соответствует требованиям безопасности! Убедитесь, что он содержит 6+ символов, " +
            "среди которых есть хотя-бы одна цифра, а так же буквы как в верхнем, так и нижнем регистрах.");
    } else {
        psw.setCustomValidity("");
    }
});