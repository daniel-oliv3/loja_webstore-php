<?php

namespace core\controllers;

use core\classes\Database;
use core\classes\Store;
use core\models\Clientes;

/*====== MAIN =======*/
class Main {
    /*==============================================================*/
    public function index(){
        //Apresenta a página inicial
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }


    /*==============================================================*/
    public function loja(){
        //Apresenta a página da loja
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }


    /*==============================================================*/
    public function novo_cliente(){

        //Verifica se ja existe sessão aberta
        if(Store::clienteLogado()){
            $this->index();
            return;
        }

        //Apresenta a página de novo cliente
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'criar_cliente',
            'layouts/footer',
            'layouts/html_footer',
        ]);
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
    public function criar_cliente(){
        //Verifica se ja existe sessão aberta
        if(Store::clienteLogado()){
            $this->index();
            return;
        }

        //Verifica se ouve submisão de um formulario
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $this->index();
            return;
        }

        //Verifica se senha 1 e igual a senha 2
        if($_POST['text_senha_1'] !== $_POST['text_senha_2']){
            //As senhas são diferentes
            $_SESSION['erro'] = 'As senhas não são iguais!';
            $this->novo_cliente();
            return;
        }

        //Verifica na base de dados se ja existe clientes com mesmo email
        $cliente = new Clientes();
        if($cliente->verificar_email_existe($_POST['text_email'])){
            $_SESSION['erro'] = 'Já existe um cliente com o mesmo email!';
            $this->novo_cliente();
            return;
        }


        //Cliente pronto para ser inserido na base de dados
        $purl = $cliente->registrar_cliente();

        
        //Criar o link purl para enviar por email
        $link_purl = "http://localhost/loja_webstore-php/web_015/public/?a=confirmar_email&purl=$purl";

    }
    

    /*==============================================================*/
}


?>