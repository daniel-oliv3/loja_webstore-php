<?php $produto = $produtos[0]; ?>
<div class="container">
    <!-- Titulo da página -->
    <div class="row">
        <div class="col-12 text-center my-4">
            <a href="?a=loja&c=todos" class="btn btn-primary">Todos</a>
            <a href="?a=loja&c=homem" class="btn btn-primary">Homem</a>
            <a href="?a=loja&c=mulher" class="btn btn-primary">Mulher</a>
        </div>
    </div>

    <!-- Produtos -->
    <div class="row">
        <?php foreach($produtos as $produto): ?>
        <div class="col-sm-4 col-6 p-2">
            <div class="text-center p-3 box-produto">
                <img src="assets/img/produtos/<?= $produto->imagem ?>" class="img-fluid">
                <h5><?= $produto->nome_produto ?></h5>
                <h6><?= $produto->preco ?></h6>
                <div>
                    <button class="btn btn-primary">Adicionar ao carrinho</button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="espaco-fundo">
        <!-- ESPAÇO (div tmp) -->
    </div>
</div>