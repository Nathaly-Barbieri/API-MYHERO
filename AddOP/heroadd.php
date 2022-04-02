<!DOCTYPE HTML>

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




        <form name = "Adicionar herói" method = "post" action = "heroadicio.php">


            

                <h2> ADICIONAR HERÓI </h2>

                <br>

                
                
                Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="name" name="name" id="dadoshero">
                <br><br>
                Nome real:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="name" name="realname" id="dadoshero">
                <br><br>
                Rating:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="rating" id="dadoshero">
                <br><br>
                Time afiliado:&nbsp;&nbsp;&nbsp;<input type="text" name="teamafilliation" id="dadoshero">
            

                <br><br><br>

                <input type="checkbox" name="termsofuse" value="termsofuseagree">Aceito os termos de uso.

                <br><br>

                <input type="submit" value="ADICIONAR" class="botoes">&nbsp;&nbsp;
                <input type="reset" value="REFAZER" class="botoes">

        </form>

        <br>

        <form name = "Voltar" method = post action = "../Myhero.html">
        &nbsp;&nbsp;<input type="submit" class = "botoes" value="VOLTAR A TELA INICIAL">&nbsp;&nbsp;
        </form>

    </body>





    <footer>


    </footer>

</html>
