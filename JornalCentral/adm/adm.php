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
?>
<form action="" method="get">

        <header>
            <div class="nmlogo"><img class="logo" src="../img/logo.png"></div>
            <div class="Login"><button class="boto"><a href="../indexADM.php" class="link">Voltar</a></button></div>
        </header>
    <div class="maeum">
        <div class="autorizacadas">
            
        <center>
            <a href="adm_autocadastro.php">
            <h3>Autorizar Cadastro</h3>
            <img src="../img/icone-cadas.jpg">
            </a>
        </center>

        </div>
        <div class="publicacoes">
            
        <center>
            <a href="adm_autopubli.php">
            <h3>Autorizar Publicação</h3>
            <img src="../img/texto.png">
            </a>
        </center>

        </div>
    </div>
    <div class="maedois">
        <div class="deletpubli">

        <center>
            <a href="adm_expubli.php">
            <h3>Deletar Publicação</h3>
            <img src="../img/delete.png">
            </a>
        </center>

        </div>
    </div>    
    </form>
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