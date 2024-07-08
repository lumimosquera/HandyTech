const btnAddDeseo = document.querySelectorAll('.btnAddDeseo');
const btnDeseo = document.querySelector('#btnCantidadDeseo');
let listaDeseo = [];
document.addEventListener('DOMContentLoaded', function() {
   cantidadDeseo();
  btnAddDeseo.forEach(function(button) {
    button.addEventListener('click', function() {
      let idProducto = button.getAttribute('prod');
      agregarDeseo(idProducto);
    });
  });
});

function agregarDeseo(idProducto) {
   listaDeseo.push({
      "idProducto" : idProducto,
      "cantidad" : 1
   })
   localStorage.setItem('listaDeseo', JSON.stringify(listaDeseo));
   Swal.fire({
      title: "Producto Añadido",
      text: "Has añadido un producto al carrito",
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