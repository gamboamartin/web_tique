<div class="col-lg-6">
    <div class="widget  widget-box box-container widget-form form-main" id="form2">
        <div class="widget-header">
            <h2>Registrarse</h2>
        </div>
        <form action="#" method="post" class="form-additional">
            <div class="control-group">
                <label class="control-label">Nombre completo</label>
                <div class="controls">
                    <input type="text" name="nombre" value="" class="form-control" id="nombre" placeholder="Nombre(s)" required/>
                    <input type="text" name="primer_apellido" value="" class="form-control" id="primer_apellido" placeholder="Primer apellido" required/>
                    <input type="text" name="segundo_apellido" value="" class="form-control" id="segundo_apellido" placeholder="Segundo apellido" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Nombre de usuario</label>
                <div class="controls">
                    <input type="text" name="user" value="" class="form-control" id="user" placeholder="Nombre de usuario" required />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                    <input type="text" name="mail" value="" class="form-control" id="inputMail" placeholder="Email" required/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword2">Contraseña</label>
                <div class="controls">
                    <input type="password" name="pass" value="" class="form-control" id="pass" placeholder="Contraseña" autocomplete="off" required/>
                    <input type="password" name="password_confirm" value="" class="form-control" id="inputPasswordConfirm" placeholder="Confirmar contraseña" autocomplete="off" required/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Dirección</label>
                <div class="controls">
                    <input type="text" name="cp_pais_id" value="" class="form-control" id="cp_pais_id" placeholder="País" required/>
                    <input type="text" name="cp_id" value="" class="form-control" id="cp_id" placeholder="Código Postal" required/>
                    <input type="text" name="cp_estado_id" value="" class="form-control" id="cp_estado_id" placeholder="Estado" required/>
                    <input type="text" name="cp_municipio_id" value="" class="form-control" id="cp_municipio_id" placeholder="Municipio" required/>
                    <input type="text" name="colonia" value="" class="form-control" id="colonia" placeholder="Colonia" required/>
                    <input type="text" name="calle" value="" class="form-control" id="calle" placeholder="Calle" required/>
                    <input type="text" name="numero_exterior" value="" class="form-control" id="numero_exterior" placeholder="Número exterior" required/>
                    <input type="text" name="numero_interior" value="" class="form-control" id="numero_interior" placeholder="Número interior" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Teléfono (con código de país)</label>
                <div class="controls">
                    <input type="text" name="phone" value="" class="form-control" id="inputPhone" placeholder="Teléfono" required/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label captcha"><img src="assets/img/placeholders/120x35.png" width="120" height="35" style="border:0;" alt=" " /></label>
                <div class="controls">
                    <input class="captcha form-control" name="captcha" type="text" placeholder="Introduzca el código de la imagen" value="" required />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-danger">Registrarse</button>
                    <button type="reset" class="btn btn-success">Limpiar</button>
                </div>
            </div>
        </form>
    </div><!-- /.widget-form-->
</div>
