window.addEventListener("load", (evento) => {
    // inicializar Isotope en el contenedor
    
    var iso = new Isotope('#lienzoArticulos', {
      itemSelector: '.col',
      layoutMode: 'fitRows'
    });
  
    // filtrar columnas en función de la categoría seleccionada
    function filtrarPorCategoria(categorias) {
      if (categorias === 'todos') {
        // mostrar todas las categorías
        iso.arrange({ filter: '*' });
      } else {
        // mostrar solo la categoría seleccionada
        iso.arrange({ filter: '.' + categorias });
      }
    }
  
    // obtener todos los enlaces "a"
    let enlaces = document.querySelectorAll('#categoriasArticulos a');
  
    // iterar sobre cada enlace
    for (let enlace of enlaces) {
      // agregar controlador de eventos click
      enlace.addEventListener('click', function(event) {
        // evitar comportamiento predeterminado del enlace
        event.preventDefault();
  
        // obtener la clase del enlace
        let categorias = enlace.classList[0];
  
        // llamar a la función filtrarPorCategoria con la categoría correspondiente
        filtrarPorCategoria(categorias);
      });
    }
  });