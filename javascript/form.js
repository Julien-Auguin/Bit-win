var check = document.getElementById('');

var form = {
    pseudo: document.getElementById(''),
    file: document.getElementById(''),
    mail: document.getElementById(''),
}

check.addEventListener('click', function () {
    if (form.pseudo.value == "") {

    } else if (form.file.value == "") {

    } else if (form.mail.value == "") {

    } else {
        check.disabled = true;
}
});