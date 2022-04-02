<!DOCTYPE html>

<meta charset = "utf-8">

<html lang = "PT-BR">

<meta name = "VIEWPORT" content width = "DEVICE" - WIDTH INITIAL SCALE = 1.0>



<head>

    <title> My Hero </title>

    <link rel = "stylesheet" type = "text/css" href = "Heroup.css">

    <link rel = "shortcut icon" href = "favicon.ico" type = "image/x-icon">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">


</head>

    <body>

    <h1> MY HERO </h1>

    <img src="herofoto1.png" alt="herois juntos">

    <br><br>

    <h2> ATUALIZAR HERÓI </h2>



            <div class="showheroes">

            <?php

                include("../includes/DbOperation.php");
                include("../includes/DbConnect.php");

                $operacao = new DbOperation();
                $operacao -> getHeroes();

            ?>

            </div>


    

    <br><br>

    <form name = "Continuar" method = post action = "heroupdate1.php">
    <input type="submit" value="PRÓXIMA" class="botoes">&nbsp;&nbsp;
    </form>

    <br><br>

    <form name = "Voltar" method = post action = "../Myhero.html">
    <input type="submit" value="VOLTAR A TELA INICIAL" class="botoes">&nbsp;&nbsp;
    </form>

    </body>

</html>