<?php

namespace core\classes;

use Exception;


/*======= STORE =======*/
class Store{

    /*==============================================================*/
    public static function Layout($estruturas, $dados = null){

        //Verifica se estruturas é um array
        if(!is_array($estruturas)){
            throw new Exception("Coleção de estruturas inválidas!");
        }

        //Variaveis
        if(!empty($dados) && is_array($dados)){
            extract($dados);
        }

        //Apresentar as views da aplicação
        foreach($estruturas as $estrutura){
            include("../core/views/$estrutura.php");
        }
    }


    /*==============================================================*/
    public static function clienteLogado(){
        //Verifica se existe um cliente com sessão
        return isset($_SESSION['cliente']);
    }


    /*==============================================================*/
    public static function criarHash($num_caracteres = 12){
        //Criar hashes
        $chars = '01234567890123456789abcdefghijklmnopqrstuwxyzabcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZABCDEFGHIJKLMNOPQRSTUWXYZ';
        return substr(str_shuffle($chars), 0, $num_caracteres);
    }

    
    /*==============================================================*/
    public static function redirect($rota = ''){
        //Faz o redirecionamento para a URL desejada (rota)
        header("Location: " . BASE_URL . "?a=$rota");
    }
    

    /*==============================================================*/
    public static function printData($data){
        if(is_array($data) || is_object($data)){
            echo '<pre>';
            print_r($data);
        }else {
            echo '<pre>';
            print_r($data);
        }

        die("<br>Terminado Sapup3!");
    }




    /*==============================================================*/
}
