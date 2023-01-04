<?php 

namespace core\controllers;

use core\classes\Database;
use core\classes\EnviarEmail;
use core\classes\Store;
use core\models\Clientes;
use core\models\Produtos;



/*====== CARRINHO =======*/
class Carrinho {
    /*==============================================================*/
    public function adicionar_carrinho(){
        //Vai buscar o id_produto a query string
        $id_produto = $_GET['id_produto'];
        //adiciona(gestão) da variavel de sessão do carrinho
        $carrinho = [];

        if(isset($_SESSION['carrinho'])){
            $carrinho = $_SESSION['carrinho'];
        }
                
        //Adicionar o produto ao carrinho
        if(key_exists($id_produto, $carrinho)){

            //Já existe o produto. acrescenta mais uma unidade
            $carrinho[$id_produto]++;

        }else {
            //adiciona novo produto ao carrinho
            array_push($carrinho, [$id_produto => 1]);
        }
        //atualiza od dados do carrinho na sessão
        $_SESSION['carrinho'] = $carrinho;
        //devolve a resposta (número de produtos do carrinho)
        $total_produtos = 0;
        foreach($carrinho as $produto_quantidade){
            $total_produtos += $produto_quantidade;
        }
        echo $total_produtos;
    }


    /*==============================================================*/
    public function carrinho(){
        //Apresenta a página de carrinho
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'carrinho',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }


    /*==============================================================*/
}










?>