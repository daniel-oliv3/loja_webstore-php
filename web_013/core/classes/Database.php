<?php

namespace core\classes;

use Exception;
use PDO;
use PDOException;

class Database{

    private $ligacao;

    /*=======================================================================*/
    private function ligar(){
        //Conectando a base de dados
        $this->ligacao = new PDO(
            'mysql:'.
            'host='.MYSQL_SERVER.';'.
            'dbname='.MYSQL_DATABASE.';'.
            'charset='.MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)//;
        );

        //Debug
        $this->ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    /*=======================================================================*/
    private function desligar(){
        //Desconect-se a base de dados
        $this->ligacao = null;
    }

    /*=======================================================================*/
    /*============================= CRUD ====================================*/
    /*=======================================================================*/
    public function select($sql, $parametros = null){
        $sql = trim($sql);
        //Verifica se e uma instrução SELECT
        if(!preg_match("/^SELECT/i", $sql)){
            throw new Exception('Base de dados - Não é uma instrução SELECT.');
        }

        //ligar
        $this->ligar();


        $resultados = null;

        //Comunicar
        try{
            //Comunicação com o banco de dados
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
                $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
            }
        }catch(PDOException $e){
            //caso exista erro
            return false;
        }

        //Desliga do banco de dados
        $this->desligar();

        //Devolver os resultados obtidos
        return $resultados;

    }

    /*=======================================================================*/
    public function insert($sql, $parametros = null){
        $sql = trim($sql);
        //Verifica se e uma instrução INSERT
        if(!preg_match("/^INSERT/i", $sql)){
            throw new Exception('Base de dados - Não é uma instrução INSERT.');
        }

        //Ligar
        $this->ligar();

        //Comunicar
        try{
            //Comunicação com o banco de dados
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
            }
        }catch(PDOException $e){
            //caso exista erro
            return false;
        }

        //Desliga do banco de dados
        $this->desligar();

    }

    /*=======================================================================*/
    public function update($sql, $parametros = null){
        $sql = trim($sql);
        //Verifica se e uma instrução INSERT
        if(!preg_match("/^UPDATE/i", $sql)){
            throw new Exception('Base de dados - Não é uma instrução UPDATE.');
        }

        //Ligar
        $this->ligar();

        //Comunicar
        try{
            //Comunicação com o banco de dados
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
            }
        }catch(PDOException $e){
            //caso exista erro
            return false;
        }

        //Desliga do banco de dados
        $this->desligar();
        
    }

    /*=======================================================================*/
    public function delete($sql, $parametros = null){
        $sql = trim($sql);
        //Verifica se e uma instrução INSERT
        if(!preg_match("/^DELETE/i", $sql)){
            throw new Exception('Base de dados - Não é uma instrução DELETE.');
        }

        //Ligar
        $this->ligar();

        //Comunicar
        try{
            //Comunicação com o banco de dados
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
            }
        }catch(PDOException $e){
            //caso exista erro
            return false;
        }

        //Desliga do banco de dados
        $this->desligar();
        
    }

    /*=======================================================================*/
    /*========================== GENÉRICA ===================================*/
    /*=======================================================================*/
    public function statement($sql, $parametros = null){
        $sql = trim($sql);
        //Verifica se e uma instrução diferente das anteriores 
        if(preg_match("/^(SELECT|INSERT|UPDATE|DELETE|)/i", $sql)){
            throw new Exception('Base de dados - Instrução inválida.');
        }

        //Ligar
        $this->ligar();

        //Comunicar
        try{
            //Comunicação com o banco de dados
            if(!empty($parametros)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($parametros);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $resultados = $executar->fetchAll(PDO::FETCH_CLASS);
            }
        }catch(PDOException $e){
            //caso exista erro
            return false;
        }

        //Desliga do banco de dados
        $this->desligar();
        
    }


    /*=======================================================================*/
    /*=======================================================================*/


}






?>