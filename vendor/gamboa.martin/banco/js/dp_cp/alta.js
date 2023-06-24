function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    const regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
let session_id = getParameterByName('session_id');
let dp_estado_id = -1;
let sl_dp_municipio_id = $("#dp_municipio_id");
let sl_dp_estado_id = $("#dp_estado_id");

sl_dp_estado_id.change(function(){
    dp_estado_id = $(this).val();
    let url = "index.php?seccion=dp_municipio&ws=1&accion=get_municipio&dp_estado_id="+dp_estado_id+"&session_id="+session_id;
    $.get(url, function(data, status){
        $.each(data.registros, function( index, dp_municipio ) {
            var new_option ="<option value ="+dp_municipio.dp_municipio_id+">"+dp_municipio.dp_estado_descripcion+' '+dp_municipio.dp_municipio_descripcion+"</option>";
            $(new_option).appendTo("#dp_municipio_id");
        });
        sl_dp_municipio_id.selectpicker('refresh');

    });
});