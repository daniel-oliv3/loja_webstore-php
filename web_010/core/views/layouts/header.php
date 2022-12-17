<?php
use core\classes\Store;

//$_SESSION['cliente'] = 1;
?>
<!-- ======= HEADER ======= -->
<div class="container-fluid navegacao"> 
    <div class="row">
        <div class="col-6 p-3">
            <a href="?a=inicio">
                <h3><?= APP_NAME ?></h3>
            </a>
        </div>
        <div class="col-6 text-end p-3">
            
            <a href="?a=inicio">Início</a>
            <a href="?a=loja">Loja</a>

            <!-- Verifica se existe cliente na sessão -->
            <?php if(Store::clienteLogado()): ?>
                <a href="#">Minha conta</a>
                <a href="#">Logout</a>
            <?php else: ?>
                <a href="#">Login</a>
                <a href="#">Criar conta</a>
            <?php endif; ?>

            <a href="?a=carrinho"><i class="fas fa-shopping-cart"></i></a>
            <span class="badge bg-warning">10</span>
        </div>
    </div>
</div>











