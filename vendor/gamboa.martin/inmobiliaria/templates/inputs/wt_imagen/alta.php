<?php /** @var base\controller\controlador_base $controlador  viene de registros del controler/lista */ ?>

<form class="form-additional" action="./index.php?seccion=wt_imagen&accion=alta_bd&session_id=<?php echo $controlador->session_id; ?>" method="POST" enctype="multipart/form-data">
    <div class="control-group col-sm-6">
        <label class="control-label" for="descripcion">Descripcion</label>
        <div class="controls">
            <input type="text" name="descripcion" value="" class="form-control" required="" id="descripcion" placeholder="Descripcion">
        </div>
    </div>
    <div class="control-group col-sm-6">
        <label class="control-label" for="codigo">Codigo</label>
        <div class="controls">
            <input type="text" name="codigo" value="" class="form-control" required="" id="codigo" placeholder="Codigo">
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
    <div class="control-group col-sm-6">
        <label class="control-label" for="imagen">Imagen</label>
        <div class="controls">
            <input type="file" name="descripcion">
        </div>
    </div>
    <div class="control-group btn-alta">
        <div class="controls">
            <button type="submit" class="btn btn-success" name="guarda">Alta</button>
            <button type="submit" class="btn btn-success" name="guarda_otro">Genero Otro</button>
        </div>
    </div>
</form>
