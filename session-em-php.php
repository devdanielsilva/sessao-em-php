<?php
    //Inicia a sessão
    //A função session_start(); deve ser a primeira coisa no seu documento. Antes de qualquer tag HTML.
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Sessão em PHP</title>
</head>
<body>
    <button onclick="minhaFuncao()"><a href="../sessao-em-php2.php/">Sessão 2 </a></button>
    <?php
    //Defini variáveis de sessão
    $_SESSION ["favcolor"] = "Red";
    $_SESSION ["favanimal"] = "Dog";
    $_SESSION ["time"] = "São Paulo Fc";
    echo "As variáveis de sessão estão definidas.";
    ?>
</body>
</html>