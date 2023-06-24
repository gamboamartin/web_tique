<?php
use config\generales;
include "./init.php";
require './vendor/autoload.php';
$generales = new generales();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <?php include $generales->path_base.'templates/css.php'; ?>
    </head>
    <body class="">
        <div class="container container-wrapper">
            <header class="header">
                <?php include 'templates/head/_head.php'?>
            </header><!-- /.header--> 
            <main class="main section-color-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="top-title">
                                <ul class="breadcrumb">
                                    <li class="item"><a href="/"> Home </a></li>
                                    <li class="item"> Login </li>
                                </ul>
                                <h1 class="h-side-title page-title page-title-big text-color-primary">Iniciar Sesión</h1>
                            </section> <!-- /. content-header -->
                             <!-- /. widget-AVAILABLE PACKAGES -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="widget  widget-box box-container widget-form form-main" id="form">
                                        <div class="widget-header">
                                            <h2>Iniciar Sesión</h2>
                                        </div>
                                        <form action="#" method="post" class="form-additional"> 
                                            <div class="control-group">
                                                <label class="control-label" for="inputUsername2">Nombre de usuario</label>
                                                <div class="controls">
                                                    <input type="text" name="username" value="" class="form-control" id="inputUsername2" placeholder="Nombre de usuario" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword1">Contraseña</label>
                                                <div class="controls">
                                                    <input type="password" name="password" value="" class="form-control" id="inputPassword1" placeholder="Contraseña" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember" id="remember" value="true" /> Recordar </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <button type="submit" class="btn btn-danger">Iniciar Sesión</button>
                                                    <button type="reset" class="btn btn-default">Limpiar</button><br>
                                                    <a href="#"><em>¿Olvidaste tu contraseña?</em></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- /.widget-form--> 
                                </div> 
                                <?php include $generales->path_base.'templates/login/_registro.php'?>
                            </div>
                        </div><!-- /.center-content -->
                    </div>
                </div>
            </main><!-- /.main-part--> 
            <footer class="footer">
                <?php include 'templates/footer/_footer.php' ?>
            </footer>
            <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
        </div>
        <?php include $generales->path_base.'templates/java.php' ?>
    </body>
</html>