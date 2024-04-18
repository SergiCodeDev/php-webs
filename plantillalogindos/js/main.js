import { miLogin } from "./modulologin.js";
import { articulosTipo  } from "./inicio.js";
window.addEventListener("load", (evento) => {
    miLogin({
        boton:'botonusuario'

    })
    articulosTipo("articulos_destacados", "tarjeta_articulo",1);
    articulosTipo("articulos_nuevos", "tarjeta_articulo",2);
});