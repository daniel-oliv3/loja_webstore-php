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
        if(!isset($_GET['id_produto'])){
            echo isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : '';
            return;
        }

    
        //define o id do produto
        $id_produto = $_GET['id_produto'];

        $produtos = new Produtos();
        $resultados = $produtos->verificar_estoque_produto($id_produto);
        

        if(!$resultados){
            echo isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : '';
            return;
        }
        
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
            $carrinho[$id_produto] = 1;
        }
        //atualiza od dados do carrinho na sessão
        $_SESSION['carrinho'] = $carrinho;
        //devolve a resposta (número de produtos do carrinho)
        $total_produtos = 0;
        foreach($carrinho as $quantidade){
            $total_produtos += $quantidade;
        }
        echo $total_produtos;
    }


    /*==============================================================*/
    public function limpar_carrinho(){
        //Limpa o carrinho de todos os produtos
        unset($_SESSION['carrinho']);

        //refrescar(recarregar) a pagina de carrinho
        $this->carrinho();
    }


    /*==============================================================*/
    public function carrinho(){
        
        //Verifica se existe carrinho
        if(!isset($_SESSION['carrinho']) || count($_SESSION['carrinho']) == 0){
            $dados = [
                'carrinho' => null
            ];
        }else {
            $ids = [];
            foreach($_SESSION['carrinho'] as $id_produto => $quantidade){
                array_push($ids, $id_produto);
            }

            $ids = implode(",", $ids);
            $produtos = new Produtos();
            $resultados = $produtos->buscar_produtos_por_ids($ids);

            //Store::printData($ids);
            Store::printData($resultados);
            die();

            $dados = [
                'carrinho' => 1
            ];
        }

        //Apresenta a página de carrinho
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'carrinho',
            'layouts/footer',
            'layouts/html_footer',
        ], $dados);
    }


    /*==============================================================*/
}










?>