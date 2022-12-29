<div class="container"></div>
    <div class="row my-5">
        <div class="col-sm-4 offset-sm-4">
            <div>
            <h3 class="text-center">LOGIN</h3>

            <form action="?a=login_submit" method="post">
                <div class="my-3">
                    <label>Usuário</label>
                    <input type="email" class="form-control" name="text_usuario" placeholder="Digite o nome de usuário" required>
                </div>
                <div class="my-3">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="text_password" placeholder="Digite sua senha" required>
                </div>
                <div class="my-3 text-center">
                    <input type="submit" value="Entrar" class="btn btn-primary">
                </div>
            </form>

            <?php if(true): ?>
                <div class="alert alert-danger text-center">
                    Mensagem de error
                </div>
            <?php endif; ?>

            </div>
        </div>
    </div>
</div>