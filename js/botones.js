p1 = document.getElementById('uno');
p2 = document.getElementById('dos');
p3 = document.getElementById('tres');
p4 = document.getElementById('cuatro');

document.getElementById('boton1').addEventListener('click', validar1);
document.getElementById('boton2').addEventListener('click', validar2);
document.getElementById('boton3').addEventListener('click', validar3);
document.getElementById('boton4').addEventListener('click', validar4);

function validar1() {

    if(!p1.classList.contains('show')) {
        boton1.classList.add('activo');
        boton2.classList.remove('activo');
        boton3.classList.remove('activo');
        boton4.classList.remove('activo');

    } else {
        boton1.classList.remove('activo');
    }

}

function validar2() {

    if(!p2.classList.contains('show')) {
        boton2.classList.add('activo');
        boton1.classList.remove('activo');
        boton3.classList.remove('activo');
        boton4.classList.remove('activo');

    } else {
        boton2.classList.remove('activo');
    }

}

function validar3() {

    if(!p3.classList.contains('show')) {
        boton3.classList.add('activo');
        boton1.classList.remove('activo');
        boton2.classList.remove('activo');
        boton4.classList.remove('activo');

    } else {
        boton3.classList.remove('activo');
    }

}

function validar4() {

    if(!p4.classList.contains('show')) {
        boton4.classList.add('activo');
        boton1.classList.remove('activo');
        boton2.classList.remove('activo');
        boton3.classList.remove('activo');

    } else {
        boton4.classList.remove('activo');
    }

}


