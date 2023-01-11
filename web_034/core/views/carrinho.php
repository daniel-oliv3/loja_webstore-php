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
                            <p>Carrinho utilizado!</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <a href="?a=limpar_carrinho" class="btn btn-warning"><i class="fas fa-shopping-cart"></i> Limpar Carrinho</a>
        </div>
    </div>
</div>