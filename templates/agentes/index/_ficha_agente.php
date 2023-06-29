<?php
use config\generales;
$generales = new generales();
?>
<div class="item agents-corousel-item">

        <div class="agent-logo media-left media-top">
            <?php include $generales->path_base.'templates/agentes/index/links/_perfil_agente.php'?>
        </div>
        <div class="agent-details media-right media-top">
            <?php include $generales->path_base.'templates/agentes/index/links/_nombre_agente.php'?>
            <?php include $generales->path_base.'templates/agentes/index/links/_telefono_agente.php'?>
            <?php include $generales->path_base.'templates/agentes/index/links/_email_agente.php'?>

        </div>
    </div><!-- /.agent-card-->
</div>