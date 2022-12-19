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
}
