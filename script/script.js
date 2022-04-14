const $$ = document.querySelectorAll.bind(document),
$ = document.querySelector.bind(document),
docElem = document.documentElement


//TODO: nazwa uzytkownika i inne nie moze miec spacji, special chary etc
$('#ConfirmPasswd').addEventListener('keyup', (e) => {
  if ($('#passwd').value != $('#ConfirmPasswd').value) {
    $('#password-matching').classList.remove('invisible')
    $('#register_sub').classList.add('disabled')
  } else {
    $('#password-matching').classList.add('invisible')
    $('#register_sub').classList.remove('disabled')
  }
})