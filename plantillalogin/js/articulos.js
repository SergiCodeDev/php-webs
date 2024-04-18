import { comprobarlogin } from "./modulos.js";
import { verArticulos  } from "./articulos-modulos.js";
window.addEventListener("load", (evento) => {
    comprobarlogin("iconoalmacenamiento", "botonusuario", "botonlogout");
    verArticulos("lienzoArticulos");
});