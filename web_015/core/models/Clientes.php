<?php

namespace core\models;

use core\classes\Database;

/* ======= Clientes ======= */
class Clientes {
    /*==============================================================*/
    public function verificar_email_existe($email){
        //Verifica se já existe outra conta com o mesmo email
        $bd = new Database();
        $parametros = [
            ':e' => strtolower(trim($email))
        ];
        $resultados = $bd->select("SELECT email FROM clientes WHERE email = :e", $parametros);

        //Se o cliente ja existe...
        if(count($resultados) != 0){
            return true;
        }else {
            return false;
        }
    }
    










    /*==============================================================*/
}



?>