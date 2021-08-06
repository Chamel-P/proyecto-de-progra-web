FormSeguro.addEventListener('submit', (e) => {
    e.preventDefault();

    if (InputSeguro[0].value != "" && InputSeguro[1].value != "" && InputSeguro[2].value != ""
        && InputSeguro[3].value != "" && InputSeguro[4].value != "" && InputSeguro[5].value != "" && InputSeguro[6].value != "") {
        alert("Datos enviados")
        return true;
    }

});
