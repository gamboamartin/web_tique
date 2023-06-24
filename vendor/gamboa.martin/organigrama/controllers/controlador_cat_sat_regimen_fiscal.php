<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace gamboamartin\organigrama\controllers;
use PDO;


class controlador_cat_sat_regimen_fiscal extends \controllers\controlador_cat_sat_regimen_fiscal {

    public function __construct(PDO $link){


        parent::__construct(link: $link);

        $this->titulo_lista = 'Regimenes fiscales';

    }


}
