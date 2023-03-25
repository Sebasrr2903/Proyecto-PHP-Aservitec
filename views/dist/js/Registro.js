function llenarID(){
    $.ajax({
        url: "../controllers/RegistroController.php/?op=llenarID",
        dataType:"html",
        cache: false,
        contentType: false,
        proccessData: false 
    })
    .done(function(res){
        $("#TipoId").html(res); }); 
}

function llenarProvincias(){
    $.ajax({
        url: "../controllers/RegistroController.php/?op=llenarProvincias",
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
            '../controllers/RegistroController.php/?op=CambioProvincia',{name:valor},{}
        )
        .done(function(res){
            $("#Canton").html(res); });
    }
}
function cambiarCanton(x){
    if(x!=0){
        let provincia=document.getElementById("Provincia").value;
        $.get(
            '../controllers/RegistroController.php/?op=CambioCanton',{name:x,id:provincia},{}
        )
        .done(function(res){
            $("#Distrito").html(res); });
    }
}
