<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Inmobiliaria Tique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <?php include $generales->path_base.'templates/css.php'?>
</head>
<body class="">
<div id="fb-root"></div>
<div class="container container-wrapper">
    <header class="header">
        <?php include $generales->path_base.'templates/head/_head.php'?>
    </header><!-- /.header-->
    <main class="main section-color-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="h-side top-pad h-side-slim clearfix">

                        <div class="widget widget-form" id="form">
                            <form action="<?php echo $generales->url_base; ?>compra_hogar.php" method="post" >
                                <div class="box-container widget-body">
                                    <div class="widget-header text-uppercaser"><h2>Quiero vender mi hogar</h2></div>

                                    <div class="form-additional">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="codigo">Nombre completo</label>
                                                <div class="controls">
                                                    <input type="text" name='name' class="form-control" placeholder="Nombre completo" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="codigo">Teléfono</label>
                                                <div class="controls">
                                                    <input type="tel" name="phone" class="form-control" placeholder="Teléfono" required pattern="[0-9]{10}"
                                                           title="Ingresa 10 digitos. Ejemplo: 3316052732" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="codigo">Email</label>
                                                <div class="controls">
                                                    <input type="email" name="mail" class="form-control" placeholder="Email" pattern="[a-z0-9!#$%&\'*+=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?"
                                                           title="Agregar alguna extencion valida. Ejemplo: nombre@ejemplo.algo" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="codigo">Eestado en donde se localiza la propiedad</label>
                                                <div class="controls">
                                                    <select name="estado" required class="form-control">
                                                        <option>Estado</option>
                                                        <option>Aguascalientes</option>
                                                        <option>Baja California</option>
                                                        <option>Chiapas</option>
                                                        <option>Ciudad de México</option>
                                                        <option>Jalisco</option>
                                                        <option>Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="codigo">Municipio en donde se localiza la propiedad</label>
                                                <div class="controls">
                                                    <select name="municipio" required class="form-control">
                                                        <option>Municipio</option>
                                                        <option>Ameca</option>
                                                        <option>Chapala</option>
                                                        <option>Zapopan</option>
                                                        <option>Tonala</option>
                                                        <option>Guadalajara</option>
                                                        <option>Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label" for="codigo">Comentario</label>
                                                <div class="controls">
                                                    <textarea class="form-control" name="message" placeholder="Adeudo, intestado, etc."  rows='3' required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-group-submit">
                                            <input type="submit" name='submit' class="btn btn-primary btn-wide color-primary btn-property" value="Enviar"  />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.widget-form-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-side top-pad h-side-slim clearfix">
                        <div class="widget widget-box box-container widget-property">
                            <font  face="Luminari,verdana">
                                <h2 style="text-align: center;">Beneficios de vender tu hogar con nosotros</h2>
                            </font>
                            <font face="Comic Sans MS,arial">
                            <p><img src="<?php echo $generales->url_base; ?>assets/img/grupo.png" align="left" width="100" height="100"  />
                                <h3 style="text-align: center;">Grupo TIQUE</h3>
                            En grupo TIQUE somos un grupo capacitados con los mejores especialistas para ventas de inmuebles, el cual
                            se encargara de posicionar tu casa con los mejores compradores.</p>
                                <p><img src="<?php echo $generales->url_base; ?>assets/img/stres.png" align="left" width="100" height="100"  />
                                <h3 style="text-align: center;">Sin Molestias</h3>
                                Olvidate de preocupaciones y enojos por llegar a tiempo de mostrar tu hogar, de clientes preguntones y enfadosos, de todo nos encargaremos.</p>
                                <p><img src="<?php echo $generales->url_base; ?>assets/img/dinero_rapido.png" align="left" width="100" height="100"  />
                                <h3 style="text-align: center;">Dinero Inmediato</h3>
                                Con nuestros evaluadores te daremos el mejor precio por tu hogar de inmediato.</p>
                            </font>

                        </div>
                    </div> <!-- /. content-header -->
                </div>

            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include $generales->path_base.'templates/footer/_footer.php' ?>
    </footer>
    <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
</div>

<?php include $generales->path_base.'templates/java.php' ?>

</body>

</html>

