import { miLogin } from "./modulologin.js";
import { verArticulos,visualizarCategorias  } from "./articulos-modulos.js";
window.addEventListener("load", (evento) => {
    miLogin({
        boton:'botonusuario'
    })
    
    visualizarCategorias('menuCategorias');
    verArticulos('lienzoArticulos','menuCategorias');
});