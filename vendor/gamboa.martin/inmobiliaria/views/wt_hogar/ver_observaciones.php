<?php use config\views; ?>
<?php /** @var controllers\controlador_wt_hogar $controlador */ ?>
<?php /** @var stdClass $row  viene de registros del controler*/ ?>
<div class="widget  widget-box box-container form-main widget-form-cart" id="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section class="top-title">
                    <ul class="breadcrumb">
                        <li class="item"><a href="./index.php?seccion=adm_session&accion=inicio&session_id=<?php echo $controlador->session_id; ?>"> Inicio </a></li>
                        <li class="item"><a href="./index.php?seccion=wt_hogar&accion=lista&session_id=<?php echo $controlador->session_id; ?>"> Lista </a></li>
                        <li class="item"> <?php echo $controlador->row_upd->wt_hogar_descripcion?> </li>
                    </ul>    <h1 class="h-side-title page-title page-title-big text-color-primary"><?php echo strtoupper($controlador->row_upd->wt_hogar_descripcion)?></h1>
                </section> <!-- /. content-header -->
                <div class="widget  widget-box box-container form-main widget-form-cart" id="form">
                    <div class="widget-header">
                        <h2>Ver Observaciones</h2>
                    </div>
                    <div>
                        <h3><?php echo $controlador->row_upd->wt_hogar_observaciones?></h3>
                    </div>

                </div>
            </div><!-- /.center-content -->
        </div>
    </div>

</div>