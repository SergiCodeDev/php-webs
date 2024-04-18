import { comprobarlogin } from "./modulos.js";
import { articulosTipo  } from "./inicio.js";
window.addEventListener("load", (evento) => {
    comprobarlogin("iconoalmacenamiento", "botonusuario", "botonlogout");
    articulosTipo("articulos_destacados", "tarjeta_articulo",1);
    articulosTipo("articulos_nuevos", "tarjeta_articulo",2);
});