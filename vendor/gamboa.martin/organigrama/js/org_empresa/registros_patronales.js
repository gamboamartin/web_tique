let url = getAbsolutePath();
let direcciones_js = url+'vendor/gamboa.martin/js_base/src/direcciones.js';
document.write('<script src="'+direcciones_js+'"></script>');
let session_id = getParameterByName('session_id');


$( document ).ready(function() {
    let sl_org_empresa_id = $("#org_empresa_id");
    let sl_org_sucursal_id = $("#org_sucursal_id");

    let org_empresa_id = sl_org_empresa_id.val();
    let url = "index.php?seccion=org_sucursal&ws=1&accion=get_sucursal&org_empresa_id="+org_empresa_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        sl_org_sucursal_id.empty();

        integra_new_option("#org_sucursal_id",'Seleccione una calle','-1');

        $.each(data.registros, function( index, org_sucursal ) {
            integra_new_option("#org_sucursal_id",org_sucursal.org_tipo_sucursal_descripcion+
                ' - '+ org_sucursal.dp_colonia_descripcion+ ' '+org_sucursal.dp_calle_descripcion+
                ' '+org_sucursal.org_sucursal_exterior+ ' '+org_sucursal.org_sucursal_interior,
                org_sucursal.org_sucursal_id);
        });
        sl_org_sucursal_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
        console.log(url);
    });

});

let sl_org_sucursal_id = $("#org_sucursal_id");
let sl_fc_csd_id = $("#fc_csd_id");

sl_org_sucursal_id.change(function(){
    let org_sucursal_id = $(this).val();

    let url = "index.php?seccion=fc_csd&ws=1&accion=get_csd&org_sucursal_id="+org_sucursal_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        sl_fc_csd_id.empty();

        integra_new_option("#fc_csd_id",'Seleccione una calle','-1');

        $.each(data.registros, function( index, fc_csd) {
            integra_new_option("#fc_csd_id",fc_csd.fc_csd_codigo+' - '+fc_csd.fc_csd_serie+
                ' - '+fc_csd.fc_csd_descripcion_select
                ,fc_csd.fc_csd_id);
        });
        sl_fc_csd_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
        console.log(url);
    });
});
