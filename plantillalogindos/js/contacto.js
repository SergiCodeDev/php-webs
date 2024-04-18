import { comprobarlogin } from "./modulos.js";
import { enviarFormulario } from "./formcontact.js";

window.addEventListener("load", (evento) => {
    comprobarlogin("iconoalmacenamiento", "botonusuario", "botonlogout");
    enviarFormulario("formulariocontacto");
});
