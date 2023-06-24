let url = getAbsolutePath();

let direcciones_js = url+'vendor/gamboa.martin/js_base/src/direcciones.js';

document.write('<script src="'+direcciones_js+'"></script>');


let session_id = getParameterByName('session_id');


let sl_local_dp_colonia_postal_id = $("#dp_colonia_postal_id");
let sl_dp_calle_pertenece_entre1_id = $("#dp_calle_pertenece_entre1_id");
let sl_dp_calle_pertenece_entre2_id = $("#dp_calle_pertenece_entre2_id");



sl_local_dp_colonia_postal_id.change(function(){
    dp_colonia_postal_id = $(this).val();
    let url = "index.php?seccion=dp_calle_pertenece&ws=1&accion=get_calle_pertenece&dp_colonia_postal_id="+dp_colonia_postal_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        console.log(data);
        $.each(data.registros, function( index, dp_calle_pertenece ) {
            integra_new_option("#dp_calle_pertenece_entre1_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
            integra_new_option("#dp_calle_pertenece_entre2_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
        });
        sl_dp_calle_pertenece_entre1_id.selectpicker('refresh');
        sl_dp_calle_pertenece_entre2_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
        console.log(url);
    });
});

let fecha_inicio_operaciones = $("#fecha_inicio_operaciones");
let fecha_ultimo_cambio_sat = $("#fecha_ultimo_cambio_sat");

fecha_inicio_operaciones.change(function () {
    fecha_ultimo_cambio_sat.val(fecha_inicio_operaciones.val());
});