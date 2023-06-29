<?php
use config\generales;
$generales = new generales();
?>
<div class="widget widget-box box-container widget-agent">
    <div class="media">
        <div class="agent-logo media-left media-middle">
            <?php include $generales->path_base.'templates/agentes/index/links/_perfil_agente.php'?>
        </div>
        <div class="agent-details media-right media-top">
            <?php include $generales->path_base.'templates/agentes/index/links/_nombre_agente.php'?>
            <?php include $generales->path_base.'templates/agentes/index/links/_telefono_agente.php'?>
            <?php include $generales->path_base.'templates/agentes/index/links/_email_agente_reducido.php'?>
        </div>
    </div><!-- /.agent-card -->
</div><!-- /. widget-agent -->
