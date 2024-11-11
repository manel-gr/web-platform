const username = document.getElementById('name');
const mail = document.getElementById('email');
const password = document.getElementById('passwrd');

function form_verify() {
    if (username.value === "") {
        alert(' name is required ')
        return false;
    }
    else if ((!username.value.match(/^[a-z]+$/))) {
        alert("name is required");
        return false;
    }
    else if (mail.value === "") {
        alert(' field is required');
        mail.focus();
        return false;
    }

    else if ((!email.value.match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/))) {
        alert("invalid email");
        return false;
    }

    else if (password.value == "") {
        alert("enter your password");
        password.focus();
        return false;
    }
    else if (!password.length > 8) {
        alert("invalid password");
        return false;
    }
}
