<div class="container">
    <div class="row my-5">
        <div class="col-sm-6 offset-sm-3">
            <h3 class="text-center">Registro de Novo Cliente</h3>

            <form action="?a=criar_cliente" method="post">                
                <!-- Nome -->
                <div class="my-3">
                    <label>Nome Completo</label>                    
                    <input type="text" class="form-control" name="text_name" placeholder="Digite Seu Nome Completo" required>
                </div>
                <!-- Email -->
                <div class="my-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="text_email" placeholder="Digite Seu E-mail" required>
                </div>
                <!-- Senha -->
                <div class="my-3">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="text_senha_1" placeholder="Digite Sua Senha" required>
                </div>
                <!-- Confirmação da Senha -->
                <div class="my-3">
                    <label>Confirmar Senha</label>
                    <input type="password" class="form-control" name="text_senha_2" placeholder="Confirme Sua Senha" required>
                </div>
                <!-- Endereço -->
                <div class="my-3">
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="text_endereco" placeholder="Digite Seu Endereço" required>
                </div>
                <!-- Telefone -->
                <div class="my-3">
                    <label>Telefone</label>                    
                    <input type="text" class="form-control" name="text_telefone" placeholder="Digite Seu Número">
                </div>
                <!-- Cidade -->
                <div class="my-3">
                    <label>Cidade</label>                    
                    <input type="text" class="form-control" name="text_cidade" placeholder="Digite Sua Cidade" required>
                </div>
                <!-- Estado -->
                <div class="my-3">
                    <label>Estado</label>                    
                    <input type="text" class="form-control" name="text_estado" placeholder="Digite Seu Estado" required>
                </div>
                <!-- Submit -->
                <div class="my-4 text-center">
                    <input type="submit" value="Criar Conta" class="btn btn-primary">
                </div>

                <?php if(isset($_SESSION['erro'])): ?>
                    <div class="alert alert-danger text-center p-2">
                    <?= $_SESSION['erro'] ?>
                    </div>
                <?php endif; ?>
            </form>        
        </div>
    </div>
</div>