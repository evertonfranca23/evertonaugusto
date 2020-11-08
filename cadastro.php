<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href ="css/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img\cadastro.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Login Form -->
    <form action="cadastroBD.php" method="post">
      <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Nome">
      <input type="password" id="senha" class="fadeIn second" name="senha" placeholder="senha">
      <input type="submit" class="fadeIn fourth" value="Cadastrar">
    </form>
    <a href="index.php"><input type="submit" class="fadeIn fourth" value="Inicio"></a>
  </div>
</div>