<?php /** @var base\controller\controlador_base $controlador  viene de registros del controler/lista */ ?>
<?php use config\views;?>
<div class="control-group col-sm-6">
    <label class="control-label" for="id">Id</label>
    <div class="controls">
        <input type="text" name="id" value="<?php echo $controlador->row_upd->id ?>" class="form-control" required="" id="Id" placeholder="Id" readonly>
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
    <label class="control-label" for="doc_extension">Extension</label>
    <div class="controls">
        <?php echo $controlador->inputs->select->doc_extension_id; ?>
    </div>
</div>
<div class="control-group col-sm-6">
    <label class="control-label" for="wt_hogar">Hogar</label>
    <div class="controls">
        <?php echo $controlador->inputs->select->wt_hogar_id; ?>
    </div>
</div>
<div class="control-group col-sm-6">
    <label class="control-label" for="wt_context_img">Contexto Img</label>
    <div class="controls">
        <?php echo $controlador->inputs->select->wt_context_img_id; ?>
    </div>
</div>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>