function llenarID(){
    $.ajax({
        url: "../Controller/RegistroController.php/?op=llenarID",
        dataType:"html",
        cache: false,
        contentType: false,
        proccessData: false 
    })
    .done(function(res){
        $("#TipoId").html(res); }); 
}

function llenarRol(){
    $.ajax({
        url: "../Controller/RegistroController.php/?op=llenarRol",
        dataType:"html",
        cache: false,
        contentType: false,
        proccessData: false 
    })
    .done(function(res){
        $("#Rol").html(res); }); 
}

function llenarProvincias(){
    $.ajax({
        url: "../Controller/RegistroController.php/?op=llenarProvincias",
        dataType:"html",
        cache: false,
        contentType: false,
        proccessData: false 
    })
    .done(function(res){
        $("#Provincia").html(res); }); 
}

function cambiarProvincia(valor){
    if(valor!=0){
        $.get(
            '../Controller/RegistroController.php/?op=CambioProvincia',{numero:valor},{}
        )
        .done(function(res){
            $("#Canton").html(res); });
    }
}

function cambiarCanton(x){
    if(x!=0){
        $.get(
            '../Controller/RegistroController.php/?op=CambioCanton',{numero:x},{}
        )
        .done(function(res){
            $("#Distrito").html(res); });
    }
}

const validaciones=(tipoid,provincia,canton,distrito,contra,contra2,rol)=>{
    var valido="valido";
    if(tipoid==0||provincia==0||canton==0||distrito==0){
        valido="campos";
    }
    if(contra.length<8){
        valido="largo";
    }
    if(contra!=contra2){
        valido="contra";
    }
    if(rol!="usu"){
        if(rol==0){
            valido="campos";
        }
    }
    return valido;
}

$('#datos').on('submit', function(event){
    event.preventDefault();
    tipoid=$('#TipoId').val();
    provincia=$('#Provincia').val();
    canton=$('#Canton').val();
    distrito=$('#Distrito').val();
    contra=$('#pass').val();
    contra2=$('#pass2').val();
    correo=$('#correo').val();
    rol="usu";
    valido=validaciones(tipoid,provincia,canton,distrito,contra,contra2,rol);
    var formData = new FormData(document.getElementById("datos"));
    if(valido=="valido"){
        $.post(
            '../Controller/UsuarioController.php/?op=validar',{email:correo},
            async function(data,textStatus,xhr){
                if(data !='null'){
                    switch(data){
                        case '1':
                            Swal.fire({
                                title:'Error!',
                                text:'Usuario ya existe',
                                icon:'error',
                                confirmButtonText:'Entendido',
                            });
                            break;
                    }
                }else{
                    $.ajax({
                        url: '../Controller/UsuarioController.php/?op=insertar',
                        type:"post",
                        dataType:"html",
                        data:formData,
                        cache: false,
                        contentType: false,
                        processData: false    
                    });
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Creado',
                        timer: 3500,
                        showConfirmButton: false
                    });
                    setTimeout("location.href='../view/InicioSesion.php'", 3000);
                }
            }
        );
    }else{
        if(valido=="campos"){
            Swal.fire({
                title:'Error!',
                text:'Todos los campos deben estar llenos',
                icon:'error',
                confirmButtonText:'Entendido',
            });
        }else if(valido=="contra"){
            Swal.fire({
                title:'Error!',
                text:'Las contraseñas no coinciden',
                icon:'error',
                confirmButtonText:'Entendido',
            });
        }else if(valido=="largo"){
            Swal.fire({
                title:'Error!',
                text:'La contraseña debe ser de mas de 8 digitos',
                icon:'error',
                confirmButtonText:'Entendido',
            });
        }
    }
});

$('#datosAdmin').on('submit', function(event){
    event.preventDefault();
    tipoid=$('#TipoId').val();
    provincia=$('#Provincia').val();
    canton=$('#Canton').val();
    distrito=$('#Distrito').val();
    contra=$('#pass').val();
    contra2=$('#pass2').val();
    correo=$('#correo').val();
    rol=$('#Rol').val();
    valido=validaciones(tipoid,provincia,canton,distrito,contra,contra2,rol);
    var formData = new FormData(document.getElementById("datosAdmin"));
    if(valido=="valido"){
        $.post(
            '../Controller/UsuarioController.php/?op=validar',{email:correo},
            async function(data,textStatus,xhr){
                if(data !='null'){
                    switch(data){
                        case '1':
                            Swal.fire({
                                title:'Error!',
                                text:'Usuario ya existe',
                                icon:'error',
                                confirmButtonText:'Entendido',
                            });
                            break;
                    }
                }else{
                    $.ajax({
                        url: '../Controller/UsuarioController.php/?op=insertar',
                        type:"post",
                        dataType:"html",
                        data:formData,
                        cache: false,
                        contentType: false,
                        processData: false    
                    });
                    Swal.fire({
                        icon: 'success',
                        title: 'Usuario Creado',
                        timer: 3500,
                        showConfirmButton: false
                    });
                    setTimeout("location.href='../view/IndexAdmin.php'", 3000);
                }
            }
        );
    }else{
        if(valido=="campos"){
            Swal.fire({
                title:'Error!',
                text:'Todos los campos deben estar llenos',
                icon:'error',
                confirmButtonText:'Entendido',
            });
        }else if(valido=="contra"){
            Swal.fire({
                title:'Error!',
                text:'Las contraseñas no coinciden',
                icon:'error',
                confirmButtonText:'Entendido',
            });
        }else if(valido=="largo"){
            Swal.fire({
                title:'Error!',
                text:'La contraseña debe ser de mas de 8 digitos',
                icon:'error',
                confirmButtonText:'Entendido',
            });
        }
    }
});



