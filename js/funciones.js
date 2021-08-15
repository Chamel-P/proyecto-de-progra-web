const FormSeguro = document.getElementById('seguro');
const InputSeguro = document.querySelectorAll('#seguro input');



FormSeguro.addEventListener('submit', (e) => {
    if (InputSeguro[0].value != "" && InputSeguro[1].value != "" && InputSeguro[4].value != "" && InputSeguro[5].value != "" && InputSeguro[6].value != "") {
    alert("Datos enviados")
    return true;

}else{
    alert("Complete todos los campos")
    return false;
}



});