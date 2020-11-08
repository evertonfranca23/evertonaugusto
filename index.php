<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href ="css/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">

    <!-- Icone -->
    <div class="fadeIn first">
      <img src="img\login.png" id="icon" alt="User Icon" />
    </div>

    <!-- Form -->
    <form action="login.php" action="painelUsuario.php" method="post">
      <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Nome">
      <input type="password" id="senha" class="fadeIn second" name="senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Outros botões-->
      <a href="cadastroUPD.php"><input type="submit" class="fadeIn fourth" value="Atualizar"></a>
      <a href="cadastroDEL.php"><input type="submit" class="fadeIn fourth" value="Excluir"></a>

    <!-- Redefinir Senha -->
    <div id="formFooter">
      <a class="underlineHover" href="cadastroUPD.php">Esqueceu sua senha?</a>
    </div>

  </div>
</div>