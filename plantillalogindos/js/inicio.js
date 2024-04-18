export function articulosTipo(elementodondesecoloca,plantilladelhtml,tipoonumarticulo){
    if("content" in document.createElement("template")){
        let datos = new FormData();
        datos.append("tipo", tipoonumarticulo);
        fetch("./php/leerarticulos.php", {
            method: "POST",
            body: datos
        })
        .then( respuesta => respuesta.json())
        .then( datosleidos => {
            if (datosleidos != "") {
                let plantillaarticulo = document.getElementById(plantilladelhtml);
                let lienzotrabajo = document.getElementById(elementodondesecoloca);
                for(let articulo of datosleidos){
                    let imagen = plantillaarticulo.content.querySelector("img");
                    imagen.src = "./img/" + articulo.imagen;
                    let tipoonumarticulo = plantillaarticulo.content.querySelector("h5");
                    tipoonumarticulo.textContent = articulo.articulo;
                    let descripcionarticulo = plantillaarticulo.content.querySelector("p");
                    descripcionarticulo.textContent = articulo.descripcion;
                    let clon = document.importNode(plantillaarticulo.content,true);
                    lienzotrabajo.appendChild(clon);
                }
            }
        })
    }
}