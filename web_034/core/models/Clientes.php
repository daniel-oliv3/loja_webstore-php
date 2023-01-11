<?php

namespace core\models;

use core\classes\Database;
use core\classes\Store;

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
    public function registrar_cliente(){
        //Registra o novo cliente na base de dados
        $bd = new Database();

        //Cria uma hash para o registro do cliente
        $purl = Store::criarHash();

        //Parametros
        $parametros = [
            ':email' => strtolower(trim($_POST['text_email'])),
            ':senha' => password_hash(trim($_POST['text_senha_1']), PASSWORD_DEFAULT),            
            ':nome_completo' => trim($_POST['text_nome_completo']),
            ':endereco' => trim($_POST['text_endereco']),
            ':telefone' => trim($_POST['text_telefone']),
            ':cidade' => trim($_POST['text_cidade']),
            ':estado' => trim($_POST['text_estado']),
            ':purl' => $purl,
            ':activo' => 0,
        ];
        $bd->insert("INSERT INTO clientes VALUES(
            0,
            :email,
            :senha,
            :nome_completo,
            :endereco,
            :telefone,
            :cidade,
            :estado,
            :purl,
            :activo,
            NOW(),
            NOW(),
            NULL
        )
        ", $parametros);

        //Retorna o purl criado
        return $purl;
    }


    /*==============================================================*/
    public function validar_email($purl){
        
        //Validar o email do novo cliente
        $bd = new Database();
        $parametros = [
            ':purl' => $purl
        ];
        $resultados = $bd->select("SELECT * FROM clientes WHERE purl = :purl", $parametros);

        //verifica se foi encontrado o cliente
        if(count($resultados) != 1){
            return false;
        }

        //Foi encontrada esse cliente com o purl indicado
        $id_cliente = $resultados[0]->id_cliente;

        //Atualizar os dados do cliente
        $parametros = [
            ':id_cliente' => $id_cliente
        ];

        $bd->update("UPDATE clientes SET purl = NULL, activo = 1, updated_at = NOW() WHERE id_cliente = :$id_cliente", $parametros);

        return true;

    }


    /*==============================================================*/
    public function validar_login($usuario, $senha){
        //Verifica se o login e valido
        $parametros = [
            ':usuario' => $usuario
        ];

        $bd = new Database();
        $resultados = $bd->select("SELECT * FROM clientes WHERE email = :usuario AND activo = 1 AND deleted_at IS NULL", $parametros);

        if(count($resultados) != 1){
            return false;
        }else {
            //temos usuario. vamos ver sua senha
            $usuario = $resultados[0];

            //Verifica a senha
            if(!password_verify($senha, $usuario->senha) ){
                
                //senha invalida
                return false;
            }else {
                //Login valido
                return $usuario;
            }


        }


    }





    /*==============================================================*/
}



?>