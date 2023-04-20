function cerrar(){
    $.get
    '../Controller/UsuarioController.php/?op=cerrar';
    location.href='../Index.html';
}

function cerrarDelay(){
    $.get
    '../Controller/UsuarioController.php/?op=cerrar';
    setTimeout("location.href='../Index.html'", 3000);
}

$('#Inicio').on('submit', function(event){
    event.preventDefault();
    var formData = new FormData(document.getElementById("Inicio"));
    $.ajax({
        url: '../Controller/UsuarioController.php/?op=iniciar',
        type:"post",
        dataType:"html",
        data:formData,
        cache: false,
        contentType: false,
        processData: false    
    }).done(function(res){
        if(res!=1){
            $("#error").html(res);
        }else{
            location.href='../view/IndexAdmin.php';
        }
        
    });
});

$('#cedula').on('submit', function(event){
    event.preventDefault();
    var formData = new FormData(document.getElementById("cedula"));
    document.getElementById('ID').value = '';
    $.ajax({
        url: '../Controller/UsuarioController.php/?op=consultar',
        type:"post",
        dataType:"html",
        data:formData,
        cache: false,
        contentType: false,
        processData: false    
    }).done(function(res){
        if(res!='null'){
            location.href='../view/EditarUsuario.php';
        }else{
            Swal.fire({
                title:'Error!',
                text:'Usuario no existe',
                icon:'error',
                confirmButtonText:'Entendido',
            });  
        }
    });
});

function actualizarUsuario(identificacion){
    $.get(
        '../Controller/UsuarioController.php?op=actualizar',{id:identificacion},{}
    )
    .done(function(res){
        $("#editarUsuario").html(res); });
}

const val=(rol,provincia,canton,distrito)=>{
    var valido="valido";
    if(rol==0||provincia==0||canton==0||distrito==0){
        valido="campos";
    }
    return valido;
}

$('#usuario').on('submit', function(event){
    event.preventDefault();
    rol=$('#Rol').val();
    provincia=$('#Provincia').val();
    canton=$('#Canton').val();
    distrito=$('#Distrito').val();
    valido=val(rol,provincia,canton,distrito);
    var formData = new FormData(document.getElementById("usuario"));
    if(valido=="valido"){
        $.ajax({
            url: '../Controller/UsuarioController.php/?op=editar',
            type:"post",
            dataType:"html",
            data:formData,
            cache: false,
            contentType: false,
            processData: false    
        })
        .done(function(res){
            if(res==1){
                Swal.fire({
                    icon: 'success',
                    title: 'Usuario Editado',
                    timer: 3500,
                    showConfirmButton: false
                });
                cerrarDelay();
            }else{
                Swal.fire({
                    icon: 'success',
                    title: 'Usuario Editado',
                    timer: 3500,
                    showConfirmButton: false
                });
                setTimeout("location.href='../view/IndexAdmin.php'", 3000);
            }
        });
    }else{
        Swal.fire({
            title:'Error!',
            text:'Todos los campos deben estar llenos',
            icon:'error',
            confirmButtonText:'Entendido',
        });
    }
});

$('#eliminar').on('submit', function(event){
    event.preventDefault();
    var formData = new FormData(document.getElementById("eliminar"));
    document.getElementById('ID').value = '';
    $.ajax({
        url: '../Controller/UsuarioController.php/?op=eliminar',
        type:"post",
        dataType:"html",
        data:formData,
        cache: false,
        contentType: false,
        processData: false    
    }).done(function(res){
        if(res==1){
            Swal.fire({
                icon: 'success',
                title: 'Usuario Eliminado',
                timer: 3500,
                showConfirmButton: false
            });
            cerrarDelay();
        }else if(res==2){
            Swal.fire({
                icon: 'success',
                title: 'Usuario Eliminado',
                timer: 3500,
                showConfirmButton: false
            });
            setTimeout("location.href='../view/IndexAdmin.php'", 3000);
        }else{
            Swal.fire({
                title:'Error!',
                text:'Usuario no existe',
                icon:'error',
                confirmButtonText:'Entendido',
            });  
        }
    });
});

