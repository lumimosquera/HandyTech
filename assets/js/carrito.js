const btnAddDeseo = document.querySelectorAll('.btnAddDeseo');
const btnDeseo = document.querySelector('#btnCantidadDeseo');
let listaDeseo ;

document.addEventListener('DOMContentLoaded', function() {
  if (localStorage.getItem('listaDeseo') == null) {
    listaDeseo = JSON,parse(localStorage.getItem('listaDeseo'));
  }
  cantidadDeseo();
  btnAddDeseo.forEach(function(button) {
    button.addEventListener('click', function() {
      let idProducto = button.getAttribute('prod');
      agregarDeseo(idProducto);
    });
  });
});

function agregarDeseo(idProducto) {
  if (localStorage.getItem('listaDeseo') == null) {
    listaDeseo = [];
  } else {
    listaDeseo = JSON.parse(localStorage.getItem('listaDeseo'));
    for (let i = 0; i < listaDeseo.length; i++) {
      if (listaDeseo[i].idProducto == idProducto) {
         Swal.fire({
            icon: "error",
            title: "Error...",
            text: "El producto ya está en tu lista de deseos.",
            
          });
        return;
      }
    }
  }

  listaDeseo.push({
    "idProducto": idProducto,
    "cantidad": 1
  });

  localStorage.setItem('listaDeseo', JSON.stringify(listaDeseo));

  Swal.fire({
    title: "Producto Añadido",
    text: "Has añadido un producto a la lista de deseos.",
    icon: "success"
  });

  cantidadDeseo();
}

function cantidadDeseo() {
  let listas = JSON.parse(localStorage.getItem('listaDeseo'));
  if (listas != null) {
    btnDeseo.textContent = listas.length;
  } else {
    btnDeseo.textContent = 0;
  }
}
