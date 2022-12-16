<?php

namespace core\controladores;

use core\classes\Store;

/*====== MAIN =======*/
class Main {
    /*==============================================================*/
    public function index(){

        $dados = [
            'titulo' => APP_NAME . " " . APP_VERSION,
            'clientes' => ['Daniel', 'Sapup3', 'Priscila']
        ];

        Store::Layout([
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