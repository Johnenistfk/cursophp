<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste PHP</title>
</head>
<body>
  <h1>My PHP Testing page </h1>
  <?php 
    echo "Olá Seja Bem vindo a Minha pagina PHP <br>";
    date_default_timezone_set("America/Sao_Paulo"); //-3GMT
    echo "Hoje e dia:" . date("M/d/Y");
    echo "<br>";
    echo "É o horário:" . date("G:i:s");
  ?>
</body>
</html>