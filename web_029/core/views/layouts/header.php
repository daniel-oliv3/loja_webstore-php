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
            
            <a href="?a=inicio" class="nav-item">Início</a>
            <a href="?a=loja" class="nav-item">Loja</a>

            <!-- Verifica se existe cliente na sessão -->
            <?php if(Store::clienteLogado()): ?>
                <!--<a href="?a=minha_conta" class="nav-item">Conta usuario</a>-->
                <i class="fas fa-user"></i> <?= $_SESSION['usuario'] ?>
                <a href="?a=logout" class="nav-item"><i class="fas fa-sign-out-alt"></i></a>
            <?php else: ?>
                <a href="?a=login" class="nav-item">Login</a>
                <a href="?a=novo_cliente" class="nav-item">Criar conta</a>
            <?php endif; ?>

            <a href="?a=carrinho"><i class="fas fa-shopping-cart"></i></a>
            <span class="badge bg-warning" id="carrinho"></span>
        </div>
    </div>
</div>











