<?php
use config\generales;
$generales = new generales();
?>
<div class="widget widget-form" id="form">
    <form action="<?php echo $generales->url_base; ?>pedir-informes.php" method="post" >
        <div class="box-container widget-body">
            <div class="widget-header text-uppercaser"><h2>Quiero información</h2></div>
            <div class="form-additional">
                <div class="form-group">
                    <input type="text" name='name' class="form-control" placeholder="Nombre completo" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Teléfono" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="mail" class="form-control" placeholder="Email"  />
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Mensaje"  rows='3' required></textarea>
                </div>
                <div class="form-group" hidden>
                    <input type="text" name="hogar" class="form-control" placeholder="Hogar" value=" Hogar Santiago" />
                </div>
                <div class="form-group" hidden>
                    <input type="text" name="url_redireccion" class="form-control" placeholder="Hogar" value="hogar-santiago.php" />
                </div>
                <div class="form-group form-group-submit">
                    <input type="submit" name='submit' class="btn btn-primary btn-wide color-primary btn-property" value="Enviar"  />
                </div>
            </div>
        </div>
    </form>
</div><!-- /.widget-form-->