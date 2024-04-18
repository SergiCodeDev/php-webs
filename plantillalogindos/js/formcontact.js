export function enviarFormulario(nombreformulario) {
    const formulario = document.getElementById(nombreformulario);
    formulario.addEventListener("submit", (evento) => {
        evento.preventDefault();
        const datos = new FormData(formulario);
        fetch("./php/enviocorreo.php", {
            method: "POST",
            body: datos
        }).then(respuesta => respuesta.json())
        .then(datosrecibidos => {
            console.log(datosrecibidos);
        })
    });
}