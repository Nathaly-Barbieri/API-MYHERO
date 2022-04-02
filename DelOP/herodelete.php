<!DOCTYPE html>
<meta charset = "utf-8">

<html lang = "PT-BR">

<meta name = "VIEWPORT" content width = "DEVICE" - WIDTH INITIAL SCALE = 1.0>



    <head>

        <title> My Hero </title>

        <link rel = "stylesheet" type = "text/css" href = "Herodel.css">

        <link rel = "shortcut icon" href = "favicon.ico" type = "image/x-icon">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">


    </head>
    <body>

    <h1> MY HERO </h1>

    <img src="herofoto1.png" alt="herois juntos">

    <br><br>

        <?php

            include("../includes/DbOperation.php");
            include("../includes/DbConnect.php");

            $operacao = new DbOperation();

            $id = $_POST["id"];

            $operacao -> deleteHero ($id);

        ?>

    <h2> HERÓI EXCLUIDO COM SUCESSO! </h2>

    <br>

    <form name = "Voltar" method = post action = "../Myhero.html">
    <input type="submit" value="VOLTAR A TELA INICIAL" class="botoes">&nbsp;&nbsp;
    </form>


    </body>

</html>