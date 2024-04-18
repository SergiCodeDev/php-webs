import { miLogin } from "./modulologin.js";
import { enviarFormulario  } from "./reservas-modulos.js";
window.addEventListener("load", (evento) => {
    miLogin({
        boton:'botonusuario'

    })
    enviarFormulario('formularioreservas');
});