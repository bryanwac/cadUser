//------VALIDAÇÃO DA SENHA------

var password = document.getElementById("password");
var confirm_password = document.getElementById("confirmpassword");
function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("as senhas não coincidem!");
    } else {
        confirm_password.setCustomValidity('');
    }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;