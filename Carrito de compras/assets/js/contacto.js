//Envio Formulario Contacto
    emailjs.init('VjYqNTTaUPPIIjf_M')
    const btn = document.getElementById('button-contacto');

    document.getElementById('form')
    .addEventListener('submit', function(event) {
    event.preventDefault();

    

    const serviceID = 'default_service';
    const templateID = 'template_2hegyrs';

    emailjs.sendForm(serviceID, templateID, this)
        .then(() => {

            Swal.fire({
                icon: 'success',
                title: 'Se envió el mensaje',
                timer: 2500,
                showConfirmButton: true
              })

        window.location = "contacto.html";

        }, (err) => {
        btn.value = 'Send Email';
        alert(JSON.stringify(err));
        });
    });


