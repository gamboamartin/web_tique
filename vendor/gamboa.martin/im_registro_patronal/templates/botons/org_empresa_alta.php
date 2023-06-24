<?php use links\secciones\link_org_empresa; ?>
<a href="<?php echo (new link_org_empresa(registro_id: -1))->links->org_empresa->nueva_empresa; ?>" class="btn btn-info"><i class="icon-edit"></i>
    Nueva empresa
</a>