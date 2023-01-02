<?php

namespace core\models;

use core\classes\Database;
use core\classes\Store;

/* ======= Produtos ======= */
class Produtos {
    /*==============================================================*/
    public function lista_produtos_disponiveis($categoria){
        //Buscar todas as informações dos produtos da base de dados
        $bd = new Database();

        $sql = "SELECT * FROM produtos ";
        $sql .= "WHERE visivel = 1 ";

        if($categoria == 'homem' || $categoria == 'mulher'){
            $sql .= " AND categoria = '$categoria'";
        }

        //$produtos = $bd->select("SELECT * FROM produtos WHERE visivel = 1");
        $produtos = $bd->select($sql);

        return $produtos;

    }


    /*==============================================================*/

}


    

?>