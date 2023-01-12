<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-3">A sua encomenda</h3>
            <hr>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <div class="col">
            
            <?php if ($carrinho == null) : ?>
                <p class="text-center">Não existem produtos no carrinho.</p>
                <div class="mt-4 text-center">
                    <a href="?a=loja" class="btn btn-primary">Ir para a loja</a>
                </div>                
                <?php else : ?>
                    
                    <div style="margin-bottom: 80px;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Produto</th>
                                <th class="text-center">Quantidade</th>
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
                                        <td class="align-middle"><h5><?= $produto['titulo'] ?></h5></td>
                                        <td class="text-center align-middle"><h5><?= $produto['quantidade'] ?></h5></td>
                                        <td class="text-end align-middle"><h4><?= 'R$ ' . str_replace('.', ',', $produto['preco']);  ?></h4></td>
                                        <td class="text-center align-middle"><button class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>
                                    </tr>
                                    
                                    <?php else : ?>
                                        
                                    <!-- total -->
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="text-end"><h3>Total:</h3></td>
                                        <td class="text-end"><h3><?= 'R$ ' . str_replace('.', ',', $produto) ?></h3></td>
                                        <td></td>
                                    </tr>
                                        
                                <?php endif; ?>
                                <?php $index++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                            <a href="?a=limpar_carrinho" class="btn btn-danger"><i class="fas fa-shopping-cart"></i> Limpar Carrinho</a>
                        </div>
                        <div class="col text-end">
                            <a href="?a=loja" class="btn btn-secondary"><i class="fas fa-shopping-cart"></i> Continuar comprando</a>
                            <a href="#" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Finalizar pedido</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>               
                
                

