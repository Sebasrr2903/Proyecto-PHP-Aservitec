$('#solicitud').on('submit', function(event){
    event.preventDefault();
    var formData = new FormData(document.getElementById("solicitud"));
    $.ajax({
        url: '../Controller/MantenimientoController.php/?op=insertar',
        type:"post",
        dataType:"html",
        data:formData,
        cache: false,
        contentType: false,
        processData: false    
    }).done(function(res){
        console.log(res);
        if(res==1){
            Swal.fire({
                title:'Error!',
                text:'Correo no resgistrado',
                icon:'error',
                confirmButtonText:'Entendido',
            });
        }else if(res==2){
            Swal.fire({
                icon: 'success',
                title: 'Solicitud enviada',
                timer: 3500,
                showConfirmButton: false
            });
            setTimeout("location.href='../Index.html'", 3000);  
        }else if(res==3){
            Swal.fire({
                title:'Error!',
                text:'Extensión no valida, Las extensiones permitidas son jpg, png y webp',
                icon:'error',
                confirmButtonText:'Entendido',
            });  
        }
    });
});

function listaSolocitud(){
    $.get(
        '../Controller/MantenimientoController.php?op=lista',{}
    )
    .done(function(res){
        $("#listaSolocitud").html(res); });
}

function aprobar(id){
    $.get(
        '../Controller/MantenimientoController.php?op=aprobar',{numero:id},{}
    )
    .done(function(res){
        Swal.fire({
            icon: 'success',
            title: 'Solicitud aprobada',
            timer: 3500,
            showConfirmButton: false
        });
        $("#listaSolocitud").html(res);
    });
}