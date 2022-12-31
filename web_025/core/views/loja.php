<?php $produto = $produtos[0]; ?>
<div class="container-fluid"></div>
    <!-- Titulo da página -->
    <div class="row">
        <div class="col-12">
            <h1>LOJA ONLINE</h1>
        </div>
    </div>

    <!-- Produtos -->
    <div class="row">
        <?php foreach($produtos as $produto): ?>
        <div class="col-sm-4">
            <div class="text-center p-3">
                <img src="assets/img/produtos/<?= $produto->imagem ?>" class="img-fluid">
                <h5><?= $produto->nome_produto ?></h5>
                <h6><?= $produto->preco ?></h6>
                <p><small><?= $produto->descricao ?></small></p>
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