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