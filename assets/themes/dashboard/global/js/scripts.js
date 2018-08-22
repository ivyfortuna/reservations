//Vecinos

$(document).ready(function() {
    $("#guardar_user").click(function() {
        enviar_form('#add_modal_form','#add_vecino_modal');
    });
});

function refrescar_tabla(pag){
    if(pag==null){
        pag="1";
    }
    var url=window.base_url+"admin/vecinos/"+pag;

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#tabla').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/vecinos/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla();

        }else{

                alert("Ese usuario ya existe");

        }
        // res es la respuesta

        $( modal ).modal('hide');

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}
function borrar_vecino(id) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/vecinos/remove/"+id;

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla();

        }


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}



//Grupos

$(document).ready(function() {
    $("#guardar_grupo").click(function() {
        enviar_form_grupo('#add_modal_form','#add_grupo_modal');
    });
});

function refrescar_tabla_grupo(pag){
    if(pag==null){
        pag="1";
    }
    var url=window.base_url+"admin/grupos/"+pag;

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#tabla').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_grupo(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/grupos/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_grupo();


        }
        $( modal ).modal('hide');
        // res es la respuesta
        //$( "#mensaje" ).html( res );
        //$( "#mensaje" ).show();


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}
function borrar_grupo(id) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/grupos/remove/"+id;

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_grupo();

        }

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}



//Usuarios

$(document).ready(function() {
    $("#guardar_usuario").click(function() {
        enviar_form_usuario('#add_modal_form','#add_usuario_modal');
    });
});

function refrescar_tabla_usuario(pag){
    if(pag==null){
        pag="1";
    }
    var url=window.base_url+"admin/usuarios/"+pag;

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#tabla').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_usuario(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/usuarios/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {
        if(res=='ok'){

            refrescar_tabla_usuario();

        }else{
            alert("Ese usuario ya existe");
        }
        // res es la respuesta
        //$( "#mensaje" ).html( res );
        //$( "#mensaje" ).show();
        $( modal ).modal('hide');

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}
function borrar_usuario(id) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/usuarios/remove/"+id;

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_usuario();

        }


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}


//Actas

$(document).ready(function() {
    $("#guardar_acta").click(function() {
        enviar_form_acta('#add_modal_form','#add_acta_modal');
    });

});

function refrescar_tabla_acta(pag){
    if(pag==null){
        pag="1";
    }
    var url=window.base_url+"admin/actas/"+pag;

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#tabla').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_acta(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/actas/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_acta();

        }
        // res es la respuesta
        //$( "#mensaje" ).html( res );
        //$( "#mensaje" ).show();
        $( modal ).modal('hide');

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}
function borrar_acta(id) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/actas/remove/"+id;

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_acta();

        }


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}


//Presupuestos

$(document).ready(function() {
    $("#guardar_presupuesto").click(function() {
        enviar_form_presupuesto('#add_modal_form','#add_presupuesto_modal');
    });
});

function refrescar_tabla_presupuesto(pag){
    if(pag==null){
        pag="1";
    }
    var url=window.base_url+"admin/presupuestos/"+pag;

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#tabla').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_presupuesto(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/presupuestos/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_presupuesto();

        }
        // res es la respuesta
        //$( "#mensaje" ).html( res );
        //$( "#mensaje" ).show();
        $( modal ).modal('hide');

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}
function borrar_presupuesto(id) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/presupuestos/remove/"+id;

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_presupuesto();

        }


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}



//Profesionales

$(document).ready(function() {
    $("#guardar_profesional").click(function() {
        enviar_form_profesional('#add_modal_form','#add_profesional_modal');
    });
});

function refrescar_tabla_profesionales(pag){
    if(pag==null){
        pag="1";
    }
    var url=window.base_url+"admin/profesionales/"+pag;

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#tabla').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_profesional(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/profesionales/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_profesionales();

        }
        // res es la respuesta
        //$( "#mensaje" ).html( res );
        //$( "#mensaje" ).show();
        $( modal ).modal('hide');

    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}
function borrar_profesional(id) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/profesionales/remove/"+id;

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_profesionales();

        }


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}


//Avisos

$(document).ready(function() {
    $("#guardar_aviso").click(function() {
        enviar_form_aviso('#add_modal_form','#add_aviso_modal');
    });
});

function refrescar_tabla_aviso(pag){
    if(pag==null){
        pag="1";
    }
    var url=window.base_url+"admin/avisos/"+pag;

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#tabla').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_aviso(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/avisos/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_aviso();


        }
        $( modal ).modal('hide');
        // res es la respuesta
        //$( "#mensaje" ).html( res );
        //$( "#mensaje" ).show();


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}
function borrar_aviso(id) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/avisos/remove/"+id;

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_aviso();

        }


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}



//Propuesta
$(document).ready(function() {
    $("#guardar_propuesta").click(function() {
        enviar_form_propuesta('#add_modal_form','#add_votacion_modal');
    });
});

function refrescar_tabla_propuesta(pag){
    if(pag==null){
        pag="1";
    }
    var url=window.base_url+"admin/votaciones/"+pag;

    $.ajax({
        type: "GET",
        url: url,
        dataType: "text"
    }).done(function (res) {


        $('#tabla').html(res);


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });
}


function enviar_form_propuesta(id,modal) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/votaciones/add";

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_propuesta();

        }
        $( modal ).modal('hide');
        // res es la respuesta
        //$( "#mensaje" ).html( res );
        //$( "#mensaje" ).show();


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}
function borrar_propuesta(id) {
    // la id es la id del form por ejemplo #add
    var url=window.base_url+"admin/votaciones/remove/"+id;

    $.ajax({
        type: "POST",
        url: url,
        data: $(id).serialize(),
        dataType: "text"
    }).done(function (res) {

        if(res=='ok'){

            refrescar_tabla_propuesta();

        }


    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("AJAX call failed: " + textStatus + ", " + errorThrown);
    });

}



//Subida

$("#agregar").click(function() {
    var file_data = $('#fotonueva').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    var url = window.base_url + "admin/up";
    $.ajax({
        url: url, // point to server-side PHP script
        dataType: 'text',  // what to expect back from the
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (php_script_response) {
            if(php_script_response!='nok'){
                var form = document.getElementById('file');
                var placeholder= document.getElementById('fileInput')
                form.value=php_script_response;
                placeholder.placeholder=php_script_response;
                  }else{
                alert(php_script_response); // display
            }
            //
            //     response from the PHP script, if any
            //       }

        }
    });
    });

function showname () {
    var name = document.getElementById('fileInput');

    alert('Selected file: ' + name.files.item(0).name);
    alert('Selected file: ' + name.files.item(0).size);
    alert('Selected file: ' + name.files.item(0).type);
    form.value=name.files.item(0).name;
};

