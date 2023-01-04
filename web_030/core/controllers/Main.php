<?php

namespace core\controllers;

use core\classes\Database;
use core\classes\EnviarEmail;
use core\classes\Store;
use core\models\Clientes;
use core\models\Produtos;

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

        //Buscar a lista de produtos disponiveis
        $produtos = new Produtos();

        //Analisa que categoria mostrar
        $c = 'todos';
        if(isset($_GET['c'])){
            $c = $_GET['c'];
        }

        //Buscando informações na base de dados
        $lista_produtos = $produtos->lista_produtos_disponiveis($c);
        $lista_categorias = $produtos->lista_categorias();

        $dados = [
            'produtos' => $lista_produtos,
            'categorias' => $lista_categorias,
        ];

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ], $dados);
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


        //Inserir novo cliente na base de dados e devolver o purl
        $email_cliente = strtolower(trim($_POST['text_email']));
        $purl = $cliente->registrar_cliente();
        
        //Enviar do email para o cliente
        $email = new EnviarEmail();
        $resultado = $email->enviar_email_confirmacao_novo_cliente($email_cliente, $purl);

        if($resultado){
            //Apresenta o layout para informar o envio do email
            Store::Layout([
                'layouts/html_header',
                'layouts/header',
                'criar_cliente_sucesso',
                'layouts/footer',
                'layouts/html_footer',
            ]);
            return;

            //echo 'Email enviado!';
        }else {
            echo 'Aconteceu um Erro!';
        }

    }


    /*==============================================================*/
    public function confirmar_email(){

        //Verifica se ja existe sessão aberta
        if(Store::clienteLogado()){
            $this->index();
            return;
        }

        //Verificar se existe na query string um purl
        if(!isset($_GET['purl'])){
            $this->index();
            return;
        }

        $purl = $_GET['purl'];

        //Verifica se o purl e valido
        if(strlen($purl) != 12){
            $this->index();
            return;
        }

        $cliente = new Clientes();
        $resultado = $cliente->validar_email($purl);

        if($resultado){
            //Apresenta o layout para informar a conta foi confirmada com sucesso
            Store::Layout([
                'layouts/html_header',
                'layouts/header',
                'conta_confirmada_sucesso',
                'layouts/footer',
                'layouts/html_footer',
            ]);
            return;
            //echo 'Conta validada com sucesso!';
        }else {
            //Redirecionar para a pagina inicial
            Store::redirect();
            
            //echo 'Erro: não foi posivel validar a conta!';
        }

    }


    /*==============================================================*/
    public function login(){
        //Verificar se o login é válido
        if(Store::clienteLogado()){
            Store::redirect();
            return;
        }


        //Apresenta a página de formulario de login
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'login_frm',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }


    /*==============================================================*/
    public function login_submit(){
        //Verificar se ja existe um utilizador valido
        if(Store::clienteLogado()){
            Store::redirect();
            return;
        }

        //verifica se foi efetuado o post do formulario de login
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            Store::redirect();
            return;
        }

        //Validar se os campos vierem corretamente preenchidos
        if(!isset($_POST['text_usuario']) || !isset($_POST['text_senha']) || !filter_var(trim($_POST['text_usuario']), FILTER_VALIDATE_EMAIL)){
            //erro de preenchimento de formulario
            $_SESSION['erro'] = 'Login inválido';
            Store::redirect('login');
            return;
        }

        //Prepara os dados para a model
        $usuario = trim(strtolower($_POST['text_usuario']));
        $senha = trim($_POST['text_senha']);

        //carrega o model e verifica se o login e valido
        $cliente = new Clientes();
        $resultado = $cliente->validar_login($usuario, $senha);

        //Analisa o resultado
        if(is_bool($resultado)){
            //login invalido
            $_SESSION['error'] = 'Login inválido';
            Store::redirect('login');
            return;
        }else {
            //login valido, coloca os dados na sessão
            $_SESSION['cliente'] = $resultado->id_cliente;
            $_SESSION['usuario'] = $resultado->email;
            $_SESSION['nome_cliente'] = $resultado->nome_completo;

            //Redirecionamento para o inicio da nossa loja
            Store::redirect();
            
        }
    }


    /*==============================================================*/
    public function logout(){
        //Remove as variaveis da sessão
        unset($_SESSION['cliente']);
        unset($_SESSION['usuario']);
        unset($_SESSION['nome_cliente']);

        //Redireciona para o inicio da loja
        Store::redirect();
    }
    

    /*==============================================================*/
}


?>