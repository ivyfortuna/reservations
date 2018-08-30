$(document).ready(function() {
    $("#add_user").click(function() {
        enviar_form('#add_modal_form','#add_user_modal');
    });
    $("#enviar").click(function () {
        history.pushState({}, null, window.location.origin+"/reservations/order");
    })
    $("#enviar_report").click(function () {
        history.pushState({}, null, window.location.origin+"/reservations/report");
    })
    $("#crear_pdf").click(function () {
        history.pushState({}, null, window.location.origin+"/reservations/pdf");
    })
});



function refrescar_tabla(){
   
   var url=window.location.origin+"/reservations/user";

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#table').load(url+"#table");


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.location.origin+"/reservations/user/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){
            $( modal ).modal('hide');
            refrescar_tabla();

        }else{
                $( modal ).modal('hide');   
                alert("The user wasn´t created"+","+res);

        }
        // res es la respuesta

        $( modal ).modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown +", "+url);
    });

}

$(document).ready(function() {
    $("#add_order").click(function() {
        enviar_form_order('#add_modal_form','#add_order_modal');
    });
});

function refrescar_tabla_order(){

    var url=window.location.origin+"/reservations/order";

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#table').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_order(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.location.origin+"/reservations/order/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {
        if(res=='ok'){
            $( modal ).modal('hide');
            refrescar_tabla_order();

        }else{
            $( modal ).modal('hide');
            alert("The order wasn´t created"+","+res);

        }
        // res es la respuesta

        $( modal ).modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown +", "+url);
    });

}

// Destinations


$(document).ready(function() {
    $("#add_destination").click(function() {
        enviar_form_destination('#add_modal_form','#add_destination_modal');
    });
});

function refrescar_tabla_destination(){

    var url=window.location.origin+"/reservations/destination";

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#table').load(url+"#table");


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_destination(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.location.origin+"/reservations/destination/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){
            $( modal ).modal('hide');
            refrescar_tabla_destination();

        }else{
            $( modal ).modal('hide');
            alert("The destination wasn´t created"+","+res);

        }
        // res es la respuesta

        $( modal ).modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown +", "+url);
    });

}


