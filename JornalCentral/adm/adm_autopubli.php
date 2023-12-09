<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <title>Controles em Geral</title>
</head>
<?php
session_start()
?>
<body>
<?php
echo "<h1> Seja bem-vindo de volta ".$_SESSION['nome']."!</h1>";
echo "<h2> Autorização de posts </h2>";
?>
<form action="adm_enviopubli.php" method="post">

        <header>
            <div class="nmlogo"><img class="logo" src="../img/logo.png"></div>
            <div class="Login"><button class="boto"><a href="adm.php" class="link">Voltar</a></button></div>
        </header>

    <div class="maeum">
        <div class="autorizacadas">
            <table border="3px">

    <!-- ////////////////////////////// exibição do banco  de textos /////////////////////////////////// -->
    <?php
        $host  = "localhost:3306";
        $user  = "root";
        $pass  = "";
        $base  = "jornal";
        $con   = mysqli_connect($host, $user, $pass, $base);


        $res2 = mysqli_query($con,"select * from tb_post;");  //esta parte ira mostrar uma tabela como todos posts pedentes a ser liberados.

        echo "<tr><td>Codigo do Post</td><td>Titulo</td><td>Texto</td></tr>";

        while($escrever=mysqli_fetch_array($res2)){

        echo  "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['titulo'] . "</td><td>" . $escrever['texto'] . "</td></tr>";
        }

        echo "</br></br>";

    ?>
    <!-- ////////////////////////////// exibição do banco  de textos /////////////////////////////////// -->

            </table>
        </div>
        <div class="publicacoes"> <!-- classe da busca do artigo-->
        <br><br><br><br>

            <input type="text" name="codigo" placeholder="Insira o codigo do texto.">
            <br>
            <input type="text" name="tipo" placeholder="Insira o tipo de noticia Ex: global, esporte...">
            <input type="submit" value="Autorizar">
        </div>
    <!-- ////////////////////////////// autoriza texto /////////////////////////////////// -->


    </div>    
    </form>

    <!-- ////////////////////////////// exibição do banco  de textos /////////////////////////////////// -->
    

    <style>
        body{
            padding: 10%;
            
        }
        header {
            background-color: #22517c;
            height: 100px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;

        }

        .nmlogo {
            width: 100px;
            height: 100px;
            position: absolute;
            top: 50%;
            left: 49%;
            transform: translate(-50%, -50%);
        }

        .logo {
            height: 100px;
            width: 100px;
        }

        .Login {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 10%;
            height: 100%;
            float: right;
        }

        .boto    {
            background-color: #404040;
            color: white;
            width: 60%;
            height: 40%;
            border-radius: 10px;
            font-family: 'cormorant';
            border: none;
        }

        .link {
            text-decoration: none;
            color: white;
        }

        .maeum{
            flex-direction: row;
            display: flex;
            border: solid 2px #22517c;
            height: 25rem;
            padding: 3%;
        }
        .maedois{
            flex-direction: row;
            display: flex;
            border: solid 2px #22517c;
            height: 25rem;
            padding: 3%;
        }

        .autorizacadas {
            border: solid 2px #22517c;
            border-radius: 10px;
            width: 50%;
            margin: 2%;
        }

        .publicacoes {
            border: solid 2px #22517c;
            border-radius: 10px;
            width: 50%;
            margin: 2%;
        }

        .deletcoment {
            border: solid 2px #22517c;
            border-radius: 10px;
            width: 50%;
            margin: 2%;
        }

        .deletpubli {
            
            border: solid 2px #22517c;
            border-radius: 10px;
            width: 50%;
            margin: 2%;
        }
        img{
            width: 50%;
        }
    </style>
</body>
</html>