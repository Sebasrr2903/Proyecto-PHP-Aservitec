// Importar la librería EmailJS
import emailjs from 'emailjs-com';

// Obtener el formulario y agregar un evento de envío
const form = document.getElementById('form');
form.addEventListener('submit', function(event) {
  event.preventDefault(); // Evitar el comportamiento predeterminado de envío del formulario

  // Obtener los valores del formulario
  const name = form.elements['name'].value;
  const email = form.elements['email'].value;
  const message = form.elements['message'].value;

  // Configurar los parámetros para enviar el correo electrónico
  const serviceID = 'service_ltz0mt2';
  const templateID = 'template_2hegyrs';
  const userID = 'VjYqNTTaUPPIIjf_M';

  // Enviar el correo electrónico utilizando EmailJS
  emailjs.send(serviceID, templateID, {
    from_name: name,
    from_email: email,
    message: message
  }, userID)
  .then(function(response) {
    console.log('Correo electrónico enviado con éxito!', response.status, response.text);
alert("Gracias su respuesta fue enviada con éxito , en breve recibira un correo con su respuesta");
  }, function(error) {
    console.log('Error al enviar el correo electrónico', error);
alert("El correo no ha sido enviado debido a problemas en el ingreso de datos");
  });

  // Limpiar los campos del formulario después del envío
  form.reset();
});

