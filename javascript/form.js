
const username = document.getElementById('name');
const familyname = document.getElementById('familyname');
const mail = document.getElementById('email');
const password = document.getElementById('passwrd');
const confirmpassword = document.getElementById('cpasswrd');
const num = document.getElementById('nbr');
const ddt = document.getElementById('date de naissance');
const loc = document.getElementById('location');

function form_verify() {
    if (username.value === "") {
        username.focus();
        alert(' name is required ');

        return false;
    }
    else if ((!username.value.match(/^[a-z]+$/))) {
        username.focus();
        alert("name is alphapitic ");
        username.focus();
        return false;
    }
    else if (familyname.value === "") {
        familyname.focus();
        alert(' last name is required  ');

        return false;
    }

    else if ((!familyname.value.match(/^[a-z]+$/))) {

        alert("last name is alphapitic");
        familyname.focus();
        return false;
    }
    else if (mail.value === "") {
        mail.focus();
        alert(' field is required');

        return false;
    }

    else if ((!mail.value.match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/))) {
        mail.focus();
        alert("invalid email  ");

        return false;
    }

    else if (password.value == "") {
        password.focus();
        alert("enter your password ");

        return false;
    }
    else if (!password.length > 8) {
        password.focus();
        alert("invalid password  ");

        return false;
    }
    else if (confirmpassword.value == "") {
        password.focus();
        alert("enter your password");

        return false;
    }

    else if (num.value == "") {
        num.focus();
        alert("Enter your phone number ");


        return false;
    }
    else if (num.length >8) {
        num.focus();
        alert("invalid Number");

        return false;
    }
    else if (ddt.value == "") {
        ddt.focus();
        alert("Enter your date of birth");

        return false;
    }
    else if (loc.value == "") {
        loc.focus();
        alert("Enter your address ");

        return false;
    }
}
