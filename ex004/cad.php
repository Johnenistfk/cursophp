<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area do participante</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<header>
  <h1>Seja bem vindo a area do participante!!</h1>
</header>
<main>
  <?php 
    $nome = $_GET ["nome"];
    $sobrenome = $_GET["sobrenome"];
    echo "É um Prazer te conhecer $nome $sobrenome Seja muito bem vindo!!" ;
    ?>
</main>
<p>
  <a href="javascript:history.go(-1)">Retornar a pagina anterior</a>
</p>
</body>
</html>