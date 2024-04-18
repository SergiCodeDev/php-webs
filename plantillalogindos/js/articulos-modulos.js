export function verArticulos(lienzonombre, menunombre) {
    const lienzo = document.getElementById(lienzonombre);
    const menu = document.getElementById(menunombre);
    fetch("./php/articulostodos.php", {
        method: "POST"
    }).then(respuesta => respuesta.json())
    .then(datosrecibidos => {
        for (let articulos of datosrecibidos) {
            // crear contenido
            let columna = document.createElement("div");
            columna.classList.add("col",articulos.categorias, "grid-item");
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
            tarjetaboton.setAttribute("href","./articulo.php?codigoarticulo="+articulos.id);
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
        var iso = new Isotope(lienzo,{
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
            filter: '*'
        });

        menu.addEventListener('click', (evento) => {
            evento.preventDefault();
            if(evento.target.nodeName=='A') {
                let filtro = evento.target.getAttribute("data-filter");
                iso.arrange({ filter: filtro});
            }
        });
    })
}

export function visualizarCategorias(nombreelemento) {
    let lista = document.createElement("div");
    lista.classList.add("list-group", "ms-md-3", "mt-4");

    fetch("./php/leercategorias.php")
    .then( respuesta => respuesta.json())
    .then( categoriasrecibidas => {
        if ( categoriasrecibidas.length >0 ) {
            for(let categorias of categoriasrecibidas ) {
                let enlacecategoria = document.createElement("a");
                enlacecategoria.href = "#";
                enlacecategoria.classList.add("list-group-item", "list-group-item-action", "text-capitalize");
                enlacecategoria.setAttribute("data-filter",`.${categorias.categorias}`);
                enlacecategoria.textContent = categorias.categorias;
                lista.appendChild(enlacecategoria);
            }
            let enlacecategoria =document.createElement("a");
            enlacecategoria.href = "#";
            enlacecategoria.classList.add("list-group-item", "list-group-item-action", "active", "dfgasdfad");
            enlacecategoria.setAttribute("data-filter",'*');
            enlacecategoria.textContent = "Todos los lugares para visitar"
            lista.prepend(enlacecategoria);
            let seccion = document.getElementById(nombreelemento);
            seccion.appendChild(lista);
        }
    })
}