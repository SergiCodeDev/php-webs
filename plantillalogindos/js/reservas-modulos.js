export function enviarFormulario(nombreformulario) {
    //obtener formulario
    const formulario = document.getElementById(nombreformulario);
    //capturar evento de envio
    formulario.addEventListener('submit', (evento) => {
        //evitar propagacion del evento
        evento.preventDefault();
        //llama func recap
        grecaptcha.ready(function () {
            grecaptcha.execute('tu-calve-publica-de-recaptcha', 
            {
                action: 'realizar_reserva'
            }).then(function (token) {
                const datos = new FormData(formulario);
                datos.append("token", token);
                datos.append("action", "realizar_reserva");
                fetch('../php/envioreserva.php', {
                    method: 'POST',
                    body: datos
                }).then(respuesta => respuesta.json())
                    .then(datosrecibidos => {
                        if (datosrecibidos == "OK") {
                            //ACIONES EN CASO CORRECTO
                        } else {
                            // ACIONES EN CASO ERROR
                        }
                    })
            })
        });
    });
}