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

        //Busca a lista de categorias na loja
        $categorias = $this->lista_categorias();

        $sql = "SELECT * FROM produtos ";
        $sql .= "WHERE visivel = 1 ";

        if(in_array($categoria, $categorias)){
            $sql .= "AND categoria = '$categoria'";
        }

        $produtos = $bd->select($sql);
        return $produtos;
    }


    /*==============================================================*/
    public function lista_categorias(){
        //Devolve a lista de categorias existentes na base de dados.
        $bd = new Database();
        $resultados = $bd->select("SELECT DISTINCT categoria FROM produtos");
        $categorias = [];
        foreach($resultados as $resultado){
            array_push($categorias, $resultado->categoria);
        }

        return $categorias;
    }


    /*==============================================================*/
    public function verificar_estoque_produto($id_produto){
        $bd = new Database();
        $parametros = [
            'id_produto' => $id_produto
        ];

        $resultados = $bd->select("SELECT * FROM produtos WHERE id_produto = :id_produto AND visivel = 1 AND estoque > 0");

        return count($resultados) != 0 ? true : false;
    }





    /*==============================================================*/

}


    

?>