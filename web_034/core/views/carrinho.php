<div class="container-fluid"></div>
    <div class="row">
        <div class="col-12">
            <h1>Carrinho</h1>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php if($carrinho == null): ?>
                            <p>Carrinho vazio</p>
                            <p><a href="?a=loja" class="btn btn-primary">Loja</a></p>
                            <?php else: ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Valor total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $index = 0;
                                        $total_rows = count($carrinho);
                                    ?>
                                    <?php foreach($carrinho as $produto): ?>
                                        <?php if($index < $total_rows-1): ?>
                                        <!-- Lista dos produtos -->
                                        <tr>
                                            <td><img src="assets/img/produtos/<?= $produto['imagem']; ?>" class="img-fluid"></td>
                                            <td><?= $produto['titulo'] ?></td>
                                            <td><?= $produto['quantidade'] ?></td>
                                            <td><?= $produto['preco'] ?></td>
                                            <td>Ações</td>
                                        </tr>
                                        <?php else: ?>
                                        <!-- Total -->
                                        <tr>
                                            <td>Total:</td>
                                            <td></td>
                                            <td></td>
                                            <td><?= $produto ?></td>
                                            <td></td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php $index++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <a href="?a=limpar_carrinho" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Limpar Carrinho</a>
        </div>
    </div>
</div>