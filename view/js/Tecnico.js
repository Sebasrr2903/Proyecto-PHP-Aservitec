function listaTecnico(){
    $.get(
        '../Controller/TecnicoController.php?op=lista',{}
    )
    .done(function(res){
        $("#listaTecnico").html(res); });
}

function listaTecnicoC(){
    $.get(
        '../Controller/TecnicoController.php?op=listaC',{}
    )
    .done(function(res){
        $("#listaTecnicoC").html(res); });
}

function infoTec(idMant,idTec,fecha){
    $.get(
        '../Controller/TecnicoController.php?op=info',{numero:idMant,id:idTec,date:fecha},{}
    )
    .done(function(res){
        $("#infoCalendario").html(res); });
}

function calendario(idMant,idTec,lista){
    var modalEvento;
    modalEvento=new bootstrap.Modal(document.getElementById('modalEvento'),{keyboard:false});
    document.addEventListener('DOMContentLoaded',function(){
        var calendarEl=document.getElementById('calendar');
        var calendar=new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale:"es",
            headerToolbar:{
                left:'prev,next today',
                center:'title',
                right:'dayGridMonth,timeGridWeek,timeGridDay'
            },
            dateClick:function(fecha){
                modalEvento.show();
                infoTec(idMant,idTec,fecha.dateStr);
            },
            events:lista
        });
        calendar.render();
    });
}

function calendarioTecnico(idTec){
    $.get(
        '../Controller/TecnicoController.php?op=calendario',{id:idTec},{}
    )
}

function calendarioTec(lista){
    document.addEventListener('DOMContentLoaded',function(){
        var calendarEl=document.getElementById('calendar');
        var calendar=new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale:"es",
            headerToolbar:{
                left:'prev,next today',
                center:'title',
                right:'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events:lista
        });
        calendar.render();
    });
}