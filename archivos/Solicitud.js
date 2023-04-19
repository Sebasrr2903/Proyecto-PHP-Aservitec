
document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevenir el comportamiento por defecto del formulario

  // Obtener los datos del formulario
  var nombre = document.getElementById('nombre').value;
  var apellidos = document.getElementById('apellidos').value;
  var correo = document.getElementById('correo').value;
  var telefono = document.getElementById('telefono').value;
  var descripcion = document.getElementById('descripcion').value;

  // Realizar la solicitud AJAX
  fetch('../Controller/SolicitudController/?op=insertar', {
    method: 'POST',
    body: new FormData(event.target)
  })
  .then(function(response) {
    if (response.ok) {
      return response.text();
    } else {
      throw new Error('Error en la respuesta de la solicitud AJAX');
    }
  })
  .then(function(data) {
    // Manejar la respuesta del servidor aquí
    console.log(data);
  })
  .catch(function(error) {
    // Manejar los errores aquí
    console.error(error);
  });
});

