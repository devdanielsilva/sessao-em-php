<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Aplica echo nas variáveis de sessão que foram definidas na página html anterior.
    echo "A cor favorita é" .$_SESSION ["favcolor"]. ".<br>";
    echo "A cor favorita é" .$_SESSION ["favanimal"]. ".<br>";
    echo "A cor favorita é" .$_SESSION ["time"]. ".<br>";
    ?>
</body>
</html>