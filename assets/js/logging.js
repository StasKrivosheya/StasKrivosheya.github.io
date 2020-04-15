// Switchers
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
let logName = document.getElementById("log-name");
logName.addEventListener("input", function (event) {
    if (!logName.validity.typeMismatch) {
        logName.setCustomValidity("Жаль, но вход пока недоступен... Попробуйте-ка зарегистрироваться, там будет поинтересней!");
    }
});

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
        psw.setCustomValidity("Ради Вашей же безопасности, придумайте 6+ символов, содержащих хотя-бы одну цифру и хотя-бы одну букву!");
    } else {
        psw.setCustomValidity("");
    }
});

// Form handlers after confirmation (w/o server and database)
let regSubmitBtn = document.getElementById('reg-submit');
regSubmitBtn.addEventListener('click', regSubmitHandler);

function regSubmitHandler() {
    let regName = document.getElementById('reg-name');
    let regMail = document.getElementById('reg-mail');
    let regPassword = document.getElementById('reg-psw');

    if (regName.validity.valid && regMail.validity.valid && regPassword.validity.valid) {
        let explanation = ', огромное спасибо за попытку зарегистрироваться!\n' +
            'Попытку? Да, ведь сервер еще не настроен и изменения не внесутся в базу данных :(\n\n' +
            'Но это не конец! Вы готовы?\n' +
            'Если хотите внести корректировки, нажмите отмена.';
        if (confirm(regName.value + explanation)) {

            for (let i = 0; i < document.getElementsByClassName('input-group').length; ++i) {
                document.getElementsByClassName('input-group')[i].style.display = 'none';
            }
            for (let i = 0; i < document.getElementsByClassName('switcher-box').length; ++i) {
                document.getElementsByClassName('switcher-box')[i].style.display = 'none';
            }

            let newDiv = document.createElement('div');
            newDiv.setAttribute('id', 'div-from-js');

            newDiv.innerHTML = "<p>Ваше имя:<br>" + regName.value +
                "<br><br>Ваша эл.почта:<br>" + regMail.value +
                "<br><br>Длина Вашего пароля: " + regPassword.value.length +
                " символов<br><br>" +
                "Вы можете пометять фон:<br>" +
                "<button type=\"button\" id=\"another\" class=\"form-btn\" onclick='changeBackground(\"another\")'>ИЗМЕНИТЬ!</button>" +
                "<button type=\"button\" id=\"default\" class=\"form-btn\" onclick='changeBackground(\"default\")' style='display: none'>ВЕРНУТЬ!</button>" +
                "<br><br><i>Подсказка</i>: чтобы перейти на главную, нажмите на логотип вверху." +
                "</p>";
            document.body.getElementsByClassName('form-box')[0].insertBefore(newDiv, null);
        }
    }
}

function changeBackground(btnId) {
    if (btnId == 'another') {
        document.getElementsByClassName('wrapper')[0].style.backgroundImage = "linear-gradient(to bottom, rgba(252, 251, 245, 0.4), rgba(111, 117, 19, 0.4)), url(assets/images/login-background0.jpg)";
        document.getElementById('another').style.display = 'none';
        document.getElementById('default').style.display = 'block';
    } else if (btnId == 'default') {
        document.getElementsByClassName('wrapper')[0].style.backgroundImage = "linear-gradient(to bottom, rgba(252, 251, 245, 0.4), rgba(111, 117, 19, 0.4)), url(assets/images/login-background.jpg)";
        document.getElementById('default').style.display = 'none';
        document.getElementById('another').style.display = 'block';
    }
}