<?php /** @var base\controller\controlador_base $controlador  viene de registros del controler/lista */ ?>
<?php use config\views;?>
<div class="control-group col-sm-6">
    <label class="control-label" for="descripcion">Id</label>
    <div class="controls">
        <input type="text" name="descripcion" value="<?php echo $controlador->row_upd->id ?>" class="form-control" required="" id="Id" placeholder="Descripcion" readonly>
    </div>
</div>
<div class="control-group col-sm-6">
    <label class="control-label" for="descripcion">Descripcion</label>
    <div class="controls">
        <input type="text" name="descripcion" value="<?php echo $controlador->row_upd->descripcion ?>" class="form-control" required="" id="descripcion" placeholder="Descripcion">
    </div>
</div>
<div class="control-group col-sm-6">
    <label class="control-label" for="codigo">Codigo</label>
    <div class="controls">
        <input type="text" name="codigo" value="<?php echo $controlador->row_upd->codigo ?>" class="form-control" required="" id="codigo" placeholder="Codigo">
    </div>
</div>
<div class="control-group col-sm-6">
    <label class="control-label" for="descripcion_select">Descripcion Select</label>
    <div class="controls">
        <input type="text" name="descripcion_select" value="<?php echo $controlador->row_upd->descripcion_select ?>" class="form-control" required="" id="descripcion_select" placeholder="descripcion_select">
    </div>
</div>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>