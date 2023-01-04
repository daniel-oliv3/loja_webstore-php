<div class="container">
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
            <!-- Ciclo de apresentação dos produtos -->
            <?php foreach($produtos as $produto): ?>
            <div class="col-sm-4 col-6 p-2">
                <div class="text-center p-3 box-produto">
                    <img src="assets/img/produtos/<?= $produto->imagem ?>" class="img-fluid">
                    <h5><?= $produto->nome_produto ?></h5>
                    <h6><?= 'R$ ' . preg_replace("/\./", ",", $produto->preco)?></h6>
                    <div>
                        <?php if($produto->estoque <= 0): ?>
                                <button class="btn btn-secondary btn-sm"><i class="fas fa-shopping-cart me-2"></i>Produto Indisponível</button>
                            <?php else: ?>
                                <button class="btn btn-warning btn-sm" onclick="adicionar_carrinho(<?= $produto->id_produto ?>)"><i class="fas fa-shopping-cart me-2"></i>Adicionar ao Carrinho</button>
                        <?php endif; ?>
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