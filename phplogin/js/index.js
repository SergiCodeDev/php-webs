window.addEventListener("load", (event) => {
  //modal ventana emergente
  const loginP = new bootstrap.Modal("#loginP", {});
  // boton que abre modal
  var botonLP = document.getElementById("botonLP");

  botonLP.onclick = (event) => {
    loginP.show();
  };

  const btenvnamcon = document.getElementById("btenvnamcon");
  btenvnamcon.onclick = (evento) => {
    var dotosforlc = new FormData(document.getElementById("formlogin"));
    fetch("../php/datos.php", {
      method: "POST" ,
      body: dotosforlc
    }).then(respuesta => respuesta.json())
    .then( datosrecibidos => {
      console.log(datosrecibidos);
      loginP.hide();
    }).catch(loginerror => console.log(loginerror));
  }
});

/*

var enviophp = document.getElementById("btenvnamcon");
enviophp.onclick = (event) => {

}

*/