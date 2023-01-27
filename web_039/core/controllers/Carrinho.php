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
    public function remover_produto_carrinho(){
        //vai buscar o id do produto na query string
        $id_produto = $_GET['id_produto'];
        //busca o carrinho na sessão
        $carrinho = $_SESSION['carrinho'];
        //remove o produto do carrinho
        unset($carrinho[$id_produto]);
        //atualizar o carrinho na sessão
        $_SESSION['carrinho'] = $carrinho;
        //apresenta novamente a pagina do carrinho
        $this->carrinho();
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

            $dados_tmp = [];
            foreach($_SESSION['carrinho'] as $id_produto => $quantidade_carrinho){
                //imagem do produto
                foreach($resultados as $produto){
                    if($produto->id_produto == $id_produto){
                        $id_produto = $produto->id_produto;
                        $imagem = $produto->imagem;
                        $titulo = $produto->nome_produto;
                        $quantidade = $quantidade_carrinho;
                        $preco = $produto->preco * $quantidade;

                        //Colocar o produto na coleção
                        array_push($dados_tmp, [
                            'id_produto' => $id_produto,
                            'imagem' => $imagem,
                            'titulo' => $titulo,
                            'quantidade' => $quantidade,
                            'preco' => $preco,
                        ]);
                        break;
                    }
                }
            }

            //Calcula o total
            $total_da_encomenda = 0;
            foreach($dados_tmp as $item){
                $total_da_encomenda += $item['preco'];
            }

            array_push($dados_tmp, $total_da_encomenda);

            $dados = [
                'carrinho' => $dados_tmp
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
    public function finalizar_encomenda(){
        
        //Verifica se existe cliente logado
        if(!isset($_SESSION['cliente'])){

            //Coloca na sessão um referrer temporário
            $_SESSION['tmp_carrinho'] = true;

            //Redirecionar para o quadro de login
            Store::redirect('login');

        }
        //Store::printData($_SESSION);
    }
}









/*==*/
?>