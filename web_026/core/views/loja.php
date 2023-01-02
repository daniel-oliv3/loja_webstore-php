<?php $produto = $produtos[0]; ?>
<div class="container"></div>
    <!-- Titulo da página -->
    <div class="row">
        <div class="col-12 text-center my-4">

            <a href="?a=loja&c=todos" class="btn btn-primary">Todos</a>
            <?php foreach($categorias as $categoria):?>
                <a href="?a=loja&c=<?= $categoria; ?>" class="btn btn-primary">
                    <?= ucfirst(preg_replace("/\_/", " ", $categoria)) ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Produtos -->
    <div class="row">
        
        <?php if(count($produtos) == 0):?>
            <div class="text-center my-5">
                <h3>Não existem produtos disponíveis!</h3>
            </div>
        <?php else:?>
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
        <?php endif?>       
    </div>

    <div class="espaco-fundo">
        <!-- ESPAÇO (div tmp) -->
    </div>
</div>