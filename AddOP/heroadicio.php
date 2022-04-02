<!DOCTYPE html>
<meta charset = "utf-8">

<html lang = "PT-BR">

<meta name = "VIEWPORT" content width = "DEVICE" - WIDTH INITIAL SCALE = 1.0>



    <head>

        <title> My Hero </title>

        <link rel = "stylesheet" type = "text/css" href = "Heroadd.css">

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

            $name =  $_POST["name"];
            $realname = $_POST["realname"];
            $rating = $_POST["rating"];
            $teamafilliation = $_POST["teamafilliation"];

            $operacao ->createHero($name, $realname, $rating, $teamafilliation);

        ?>

        <h2>HERÓI ADICIONADO COM SUCESSO</h2>

        <br><br><br>

        <form name = "Voltar" method = post action = "../Myhero.html">
        <input type="submit" value="VOLTAR A TELA INICIAL" class="botoes">&nbsp;&nbsp;
        </form>

    </body>



</html>