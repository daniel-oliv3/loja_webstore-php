<?php 

//Coleção de rotas
$rotas = [
    'inicio' => 'main@index',
    'loja' => 'main@loja',
];


//Define ação por defeito
$acao = 'inicio';

//Verifica se existe a ação na query string
if(isset($_GET['a'])){

    //Verifica se a ação existe nas rotas
    if(!key_exists($rotas, $_GET['a'])){
        $acao = 'inicio';
    }else {
        $acao = $_GET['a'];
    }
}


//Trata a definição da rota
$partes = explode('@', $rotas[$acao]);


var_dump($partes);

?>