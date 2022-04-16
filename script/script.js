const $$ = document.querySelectorAll.bind(document),
$ = document.querySelector.bind(document),
docElem = document.documentElement


//TODO: nazwa uzytkownika i inne nie moze miec spacji, special chary etc
$('form-reg #ConfirmPasswd').addEventListener('keyup', (e) => {
  if ($('form-reg #passwd').value != $('form-reg #ConfirmPasswd').value) {
    $('form-reg #password-matching').classList.remove('invisible')
    $('form-reg #register_sub').classList.add('disabled')
  } else {
    $('form-reg #password-matching').classList.add('invisible')
    $('form-reg #register_sub').classList.remove('disabled')
  }
})