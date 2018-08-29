$(document).ready(function() {
    $("#add_user").click(function() {
        enviar_form('#add_modal_form','#add_user_modal');
    });
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


        $('#table').load(url+"#table");


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



//pagination

$('#users').pagination({
    dataSource: [1, 2, 3, 4, 5, 6, 7, 195],
callback: function(data, pagination) {
    // template method of yourself
    var html = template(data);
    dataContainer.html(html);
}
})

$('#destinations').pagination({
    dataSource: [1, 2, 3, 4, 5, 6, 7, 195],
callback: function(data, pagination) {
    // template method of yourself
    var html = template(data);
    dataContainer.html(html);
}
})

$('#orders').pagination({
    dataSource: [1, 2, 3, 4, 5, 6, 7, 195],
callback: function(data, pagination) {
    // template method of yourself
    var html = template(data);
    dataContainer.html(html);
}
})