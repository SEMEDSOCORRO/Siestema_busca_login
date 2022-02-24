<?php

$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>'  : '';
$alertaCadastro = strlen($alertaCadastro) ? '<div class="alert alert-danger">'.$alertaCadastro.'</div>'  : '';

?>


<div class="jumbotron text-light">

<div class="row">

   <div class="col">
        <form method="post">

               <h4>Login de acesso</h4>

               <?=$alertaLogin?>


            <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" required>
            </div><br>

            <div class="form-group">
                    <button type="submit" name="acao" value="logar" class="btn btn-info">Entrar</button>
            </div>
 
       </form>

    </div>

    <div class="col">

    <form method="post">

               <h4>Cadastre-se caso não tenha</h4>

               <?=$alertaCadastro?>

             <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="email" class="form-control" required>

            <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="nome" class="form-control" required>
            </div>

            <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" required>
            </div><br>

            <div class="form-group">
                    <button type="submit" name="acao" value="cadastrar" class="btn btn-info">Cadastrar</button>
            </div>
 
       </form>

    </div>

</div>

</div>