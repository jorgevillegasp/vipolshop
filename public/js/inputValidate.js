function mayuscula(e) {
    e.value = e.value.toUpperCase();
}
function numero_3_decimanles(e) {
    e.value = e.value.numeric({ decimalPlaces: 3 });
}


function soloNumerosAndPuntos(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[0-9 . ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function soloNumeros(e) {
    //key almacena la entrada del teclado
    key = e.keyCode || e.which;

    teclado = String.fromCharCode(key);
    //teclados permitidos
    admitido = "0123456789";

    /*
    verificar en codigo assci
    8  - tecla espacio
    37 - izquierda
    38 - tecla derecha
    46 - tecla suprimir
    */
    especiales = "8-37-38-46";
    teclado_especial = false;
    //buscamos las teclas especiales
    for (var i in especiales) {
        //verificamos si es un teclado especial lo mostramos
        if (key == especiales[i]) {
            teclado_especial = true;
        }
    }

    //vereficamos si un caracter esta dentro de la cadena
    if (admitido.indexOf(teclado) == -1 && !teclado_especial) {
        return false;//no va a coger lo ingresado
    }
}
