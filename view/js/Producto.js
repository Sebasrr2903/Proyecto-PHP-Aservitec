$('#productos').on('submit', function(event){
    event.preventDefault();
    var formData = new FormData(document.getElementById("productos"));
    $.ajax({
        url: '../Controller/ProductosController.php/?op=insertar',
        type:"post",
        dataType:"html",
        data:formData,
        cache: false,
        contentType: false,
        processData: false    
    })
    .done(function(res){
        if(res!='null'){
            Swal.fire({
                icon: 'success',
                title: 'Producto Insertado',
                timer: 3500,
                showConfirmButton: false
            });
            setTimeout("location.href='../view/IndexAdmin.php'", 3000);  
        }else{
            Swal.fire({
                title:'Error!',
                text:'Extensión no valida, Las extensiones permitidas son jpg, png y webp',
                icon:'error',
                confirmButtonText:'Entendido',
            });  
        }
    });
});

function lista(){
    $.get(
        '../Controller/ProductosController.php?op=lista',{}
    )
    .done(function(res){
        $("#lista").html(res); });
}

function eliminar(numero){
    $.get(
        '../Controller/ProductosController.php?op=eliminar',{id:numero},{}
    )
    .done(function(res){
        $("#lista").html(res); });
}

function actualizar(numero){
    $.get(
        '../Controller/ProductosController.php?op=actualizar',{id:numero},{}
    )
    .done(function(res){
        $("#editar").html(res); });
}
function info(numero){
    $.get(
        '../Controller/ProductosController.php?op=info',{id:numero},{}
    )
    .done(function(res){
        $("#cuerpo").html(res); });
}

$('#producto').on('submit', function(event){
    event.preventDefault();
    var formData = new FormData(document.getElementById("producto"));
    $.ajax({
        url: '../Controller/ProductosController.php/?op=editar',
        type:"post",
        dataType:"html",
        data:formData,
        cache: false,
        contentType: false,
        processData: false    
    })
    .done(function(res){
        console.log(res);
        if(res!='null'){
            Swal.fire({
                icon: 'success',
                title: 'Producto actualizado',
                timer: 3500,
                showConfirmButton: false
            });
            setTimeout("location.href='../view/ListaProducto.php'", 3000);  
        }else{
            Swal.fire({
                title:'Error!',
                text:'Extensión no valida, Las extensiones permitidas son jpg, png y webp',
                icon:'error',
                confirmButtonText:'Entendido',
            });  
        }
    });
});