export function verArticulos(lienzonombre) {
    const lienzo = document.getElementById(lienzonombre);
    fetch("./php/articulostodos.php", {
        method: "POST"
    }).then(respuesta => respuesta.json())
    .then(datosrecibidos => {
        for (let articulos of datosrecibidos) {
            // crear contenido
            let columna = document.createElement("div");
            columna.classList.add("col");
            columna.classList.add(articulos.categorias);
            let tarjeta = document.createElement("div");
            tarjeta.classList.add("card", "h-100", "mb-2","arreglo-card");
            let imagen = document.createElement("img");
            imagen.src="./img/"+articulos.imagen;
            imagen.classList.add("card-img-top", "t-imagen-t");
            let cuerpocar = document.createElement("div");
            cuerpocar.classList.add("card-body");
            let titulocar = document.createElement("h5");
            titulocar.classList.add("card-title");
            // articulo.descripcion
            titulocar.textContent = articulos.articulo;

            let parracar = document.createElement("p");
            parracar.classList.add("card-text");
            // articulo.descripcion
            parracar.textContent = articulos.descripcion.substr(0,81);

            let parracardos = document.createElement("p");
            parracardos.classList.add("card-text");

            let tarjetaboton = document.createElement("a");
            tarjetaboton.classList.add("btn", "btn-warning")
            // articulo
            tarjetaboton.setAttribute("href","./articulos.php?codigoarticulo="+articulos.id);
            tarjetaboton.textContent = "Leer Más...";

            //construir plantilla
            cuerpocar.appendChild(titulocar);
            cuerpocar.appendChild(parracar)
            parracardos.appendChild(tarjetaboton);
            cuerpocar.appendChild(parracardos);
            tarjeta.appendChild(imagen);
            tarjeta.appendChild(cuerpocar);
            columna.appendChild(tarjeta);
            lienzo.appendChild(columna)

        }
    })
}