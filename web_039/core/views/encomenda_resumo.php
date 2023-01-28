<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="my-3">A sua encomenda - Resumo</h3>
            <hr>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <div class="col">
            

                    
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
                                        <td class="text-end align-middle"><h4><?= 'R$ ' . number_format($produto['preco'],2, ',', '.')  ?></h4></td>
                                        <td class="text-center align-middle"><a href="?a=remover_produto_carrinho&id_produto=<?= $produto['id_produto'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a></td>
                                    </tr>
                                    
                                    <?php else : ?>
                                        
                                    <!-- total -->
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td class="text-end"><h3>Total:</h3></td>
                                        <td class="text-end"><h3><?= 'R$ ' . number_format($produto,2, ',', '.') ?></h3></td>
                                        <td></td>
                                    </tr>
                                        
                                <?php endif; ?>
                                <?php $index++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                            <!--<a href="?a=limpar_carrinho" class="btn btn-danger"><i class="fas fa-shopping-cart"></i> Limpar Carrinho</a> -->
                            <button onclick="limpar_carrinho()" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Limpar carrinho</button>
                            <span class="ms-3" id="confirmar_limpar_carrinho" style="display: none;">Tem certeza ?
                                <button class="btn btn-primary" onclick="limpar_carrinho_off()">Não</button>
                                <a href="?a=limpar_carrinho" class="btn btn-danger">Sim</a>
                            </span>            
                        </div>
                        <div class="col text-end">
                            <a href="?a=loja" class="btn btn-secondary"><i class="fas fa-shopping-cart"></i> Continuar comprando</a>
                            <a href="?a=finalizar_encomenda" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Finalizar pedido</a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>               
                
                

