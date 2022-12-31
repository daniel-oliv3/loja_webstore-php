<?php

namespace core\models;

use core\classes\Database;
use core\classes\Store;

/* ======= Produtos ======= */
class Produtos {
    /*==============================================================*/
    public function lista_produtos_disponiveis(){
        //Buscar todas as informações dos produtos da base de dados
        $bd = new Database();

        $produtos = $bd->select("SELECT * FROM produtos WHERE visivel = 1");

        return $produtos;

    }


    /*==============================================================*/

}


    

?>