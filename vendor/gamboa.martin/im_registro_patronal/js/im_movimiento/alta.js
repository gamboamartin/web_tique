let url = getAbsolutePath();

let session_id = getParameterByName('session_id');

let sl_em_empleado = $("#em_empleado_id");
let txt_salario_diario = $('#salario_diario');
let txt_salario_diario_integrado = $('#salario_diario_integrado');
let txt_fecha_inicio_rel_laboral = $('#fecha');

txt_salario_diario.change(function (){
    let em_empleado_id = sl_em_empleado.val();
    let fecha_inicio_rel_laboral = txt_fecha_inicio_rel_laboral.val();
    let salario_diario = $(this).val();
    let url = "index.php?seccion=em_empleado&ws=1&accion=calcula_sdi&em_empleado_id="+em_empleado_id+"&fecha_inicio_rel_laboral="+fecha_inicio_rel_laboral+"&salario_diario="+salario_diario+"&session_id="+session_id;

    getData(url,(data) => {
        console.log(data);
        txt_salario_diario_integrado.val(data);
    });
});

let getData = async (url, acciones) => {
    fetch(url)
        .then(response => response.json())
        .then(data => acciones(data))
        .catch(err => {
            alert(err.message);
            console.error("ERROR: ", err.message)
        });
}

