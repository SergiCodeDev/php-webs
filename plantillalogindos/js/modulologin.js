const plantillaVentanaModal = document.createElement("div");
plantillaVentanaModal.innerHTML =
  `
<div class="modal fade" id="ventanalogin" tabindex="-1" aria-labelledby="ventanaloginlabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header fondologin">
          <h1 class="modal-title fs-5 text-uppercase ms-2" id="ventanaloginlabel">
            iniciar sesión
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-light-subtle d-flex justify-content-center">
          <form class="row g-3 needs-validation d-flex justify-content-center pb-4 pt-3" id="formularioacceso" novalidate="">
            <div class="col-10">
              <label for="correo" class="form-label d-flex justify-content-center fw-semibold">Usuario</label>

              <input type="email" id="correo" name="correo" pattern=".+@" class="form-control centropch" placeholder="Correo Electronico" required="">
            </div>

            <div class="col-10">
              <label for="contrasenya" class="form-label d-flex justify-content-center fw-semibold">Constraseña</label>
              <input type="password" class="form-control centropch" id="contrasenya" name="contrasenya"  required="">
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-secondary">Aceptar</button>
        </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
`;

const ventanaModal = plantillaVentanaModal.querySelector(".modal");
document.body.append(ventanaModal);
const ventanaLogin = new bootstrap.Modal(ventanaModal);
var opciones = "";

export function miLogin(opcionesrecibidas) {
  if (typeof (Storage) !== 'undefined') {
    opciones = opcionesrecibidas;
    let autenticado = sessionStorage.getItem('autenticado');
    if (autenticado == "true") {
      usuarioAutenticado();
    } else {
      usuarioNoAutenticado();
    }
  } else {
    // metodo alternativo
  }
}

function usuarioAutenticado() {
  // document.getElementById(opciones.boton).classList.remove("fa-regular","fa-circle-user");
  // document.getElementById(opciones.boton).classList.add("fa-solid","fa-user-xmark");
  document.getElementById(opciones.boton).innerHTML = "Usuario";
  document.getElementById(opciones.boton).addEventListener('click', clicBotonLogout);
}

const clicBotonLogout = () => {
  fetch('./php/desconexion.php').then(() => {
    sessionStorage.removeItem('autenticado');
    sessionStorage.removeItem('usuario');
    window.location.assign('./index.php');
  })
};

function usuarioNoAutenticado() {
  document.getElementById(opciones.boton).addEventListener('click', clicBotonLogin);
}

const clicBotonLogin = () => {
  ventanaLogin.show();
  asociarEventosFormulario();
};

function asociarEventosFormulario() {
  document.getElementById('formularioacceso').addEventListener('submit', envioFormulario);
}

const envioFormulario = (evento) => {
  evento.preventDefault();
  let datos = new FormData(evento.target);
  fetch('./php/comprobarlogin.php', {
    method: 'POST',
    body: datos
  }).then(respuesta => respuesta.json())
    .then(datosrecibidos => {
      if (typeof datosrecibidos.error !== 'undefined') {
        if (datosrecibidos.error == false) {
          sessionStorage.setItem('autenticado', true);
          sessionStorage.setItem('usuario', datosrecibidos.correo);
          document.getElementById(opciones.boton).removeEventListener('click', clicBotonLogin);
          usuarioAutenticado();
        }
      } else {

      }
      ventanaLogin.hide();
    })
}