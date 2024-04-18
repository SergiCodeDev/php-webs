function accesousuario(elemento) {
    const botonlogin = document.getElementById(elemento);
    botonlogin.addEventListener('click', verventanaLogin);
}

const verventanaLogin = (evento) => {
    const ventana = new
bootstrap.Modal(document.getElementById(evento.target.getAttribute("data-ventana"), {}));
    ventana.show();
    const formularioacceso = document.getElementById('formularioacceso');
    formularioacceso.addEventListener('submit', (eventodos) => {
        eventodos.preventDefault();
        fetch('./php/comprobarusuario.php', {
            method: 'POST',
            body: new FormData(document.getElementById(eventodos.target.id))
        }).then(respuesta => respuesta.json())
        .then(datosrespuesta => {
            if (datosrespuesta[0].Error || datosrespuesta=="Error" ) {
                console.log("Usuario No eXISTENTE REGISTRO?");
            } else {
                sessionStorage.setItem('Usuario', "OK");
                sessionStorage.setItem('Correo', datosrespuesta[0].correo);
                ventana.hide();
                document.getElementById("botonusuario").removeEventListener("click",verventanaLogin)
                comprobarlogin('iconoalmacenamiento', 'botonusuario', 'botonlogout');
                console.log(datosrespuesta);
            }
        })
    });
}

export function comprobarlogin(elemento, elementodos, elementotres) {
    if(typeof(Storage)!= 'undefined') {
        document.getElementById(elemento).classList.remove('d-none');
    }
    let datos = sessionStorage.getItem('Usuario');
    if (datos == "OK") {
        
        //document.getElementById(elementodos).classList.remove('fa-regular');
        //document.getElementById(elementodos).classList.add('fa-solid');
        document.getElementById(elementodos).textContent = "Usuario";
        document.getElementById(elementotres).classList.remove('d-none');
        document.getElementById(elementotres).addEventListener('click', (e) => {
            sessionStorage.clear();
            fetch("./php/desconexion.php");
            window.location.href = "./index.php";
        });
    } else {
        accesousuario(elementodos);
    }
    
}