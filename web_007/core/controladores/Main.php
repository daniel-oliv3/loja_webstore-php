<?php

namespace core\controladores;

use core\classes\Functions;

/*====== MAIN =======*/
class Main {
    /*==============================================================*/
    public function index(){

        $dados = [
            'titulo' => 'Este é o titulo',
            'clientes' => ['Daniel', 'Sapup3', 'Priscila']
        ];

        Functions::Layout([
            'layouts/html_header',
            'pagina_inicial',
            'layouts/html_footer',
        ], $dados);


    }


    /*==============================================================*/
    public function loja(){
        echo "Loja!";
    }
}






?>