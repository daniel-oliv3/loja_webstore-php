<h1 class="text-center">Carrinho</h1>


<div class="container">
    <div class="row">
        <div class="col">
            
            <?php if ($carrinho == null) : ?>
                <p>Carrinho vazio</p>
                <p><a href="?a=loja" class="btn btn-primary">Loja</a></p>
                <?php else : ?>
                    
                    <div style="margin-bottom: 80px;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th class="text-end">Valor total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 0;
                            $total_rows = count($carrinho);
                            ?>
                            <?php foreach ($carrinho as $produto) : ?>
                                <?php if ($index < $total_rows - 1) : ?>
                                    
                                    <!-- lista dos produtos -->
                                    <tr>
                                        <td><img src="assets/img/produtos/<?= $produto['imagem']; ?>" class="img-fluid" width="50px"></td>
                                        <td><?= $produto['titulo'] ?></td>
                                        <td><?= $produto['quantidade'] ?></td>
                                        <td class="text-end"><?= $produto['preco'] ?></td>
                                        <td><button class="btn btn-danger"><i class="fas fa-times"></i></button></td>
                                    </tr>
                                    
                                    <?php else : ?>
                                        
                                        <!-- total -->
                                        <tr>
                                            <td>Total:</td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-end"><?= $produto ?></td>
                                            <td></td>
                                        </tr>
                                        
                                        <?php endif; ?>
                                        <?php $index++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <a href="?a=limpar_carrinho" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Limpar Carrinho</a>
                
                <div class="espaco-fundo">
                <!-- ESPAÇO (div tmp) -->
                </div>

