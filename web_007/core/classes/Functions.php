<?php

namespace core\classes;

use Exception;

class Functions{

    /*==============================================================*/
    public static function Layout($estruturas){

        //Verifica se estruturas é um array
        if(!is_array($estruturas)){
            throw new Exception("Coleção de estruturas inválidas!");
        }

        //Variaveis

        //Apresentar as views da aplicação
        foreach($estruturas as $estrutura){
            include("../../core/views/$estrutura.php");
        }
    }

}

/*
html_header.php
nav_bar.php
inicio.php
html_footer.php
*/