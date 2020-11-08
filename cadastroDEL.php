<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href ="css/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Todas as tags de cabeçalho ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">

    <!-- Icone -->
    <div class="fadeIn first">
      <img src="img\del.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Form -->
    <form action="delete.php" method="post">
      <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Nome">
      <input type="submit" class="fadeIn fourth" value="Excluir">
    </form>
    <a href="index.php"><input type="submit" class="fadeIn fourth" value="Inicio"></a>
  </div>
</div>