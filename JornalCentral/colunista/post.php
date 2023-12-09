<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <title>Edição Jornal Central</title>
</head>

<body>
    <form action="post_envio.php" method="post">
        <header>
            <div class="nmlogo"><img class="logo" src="../img/logo.png"></div>
            <div class="Login"><button class="boto"><a href="../indexEDIT.php" class="link">Voltar</a></button></div>

        </header>
        <div class="divmae">
            <div class="edicao">
                <input type="text" class="titulo" placeholder="Título:" name="titulo">

                <div class="escolheima">
                    <input type="text" class="nameimage" placeholder="Insira o nome da imagem e o formato" name="img">
                    <label>**obs: insira a imagem aqui na pasta imagem dentro do JornalCentral.</label>
                </div>

                <textarea class="coluna" id="meuTexto" cols="50" rows="5" placeholder="Coluna:" name="texto"></textarea>
            </div>
            <input type="submit" class="enviar" value="Postar">
        </div>
    </form>


    <style>
        body {
            padding-top: 7%;
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
            left: 50%;
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

        .edicao {
            display: flex;
            width: 80%;
            height: 40rem;
            flex-direction: column;
            border: solid 2px #000000;
            border-radius: 10px;
            background-color: #22517c;
        }

        .titulo {
            border-radius: 5px;
            margin: 5%;
            font-family: 'cormorant';
            color: #000000;
            font-weight: bold;
        }

        .escolheima {
            display: flex;
            flex-direction: row;
        }

        .nameimage {
            border-radius: 5px;
            margin-left: 5%;
            margin-right: 5%;
            width: 30%;
            font-family: 'cormorant';
            color: #000000;
            font-weight: bold;
        }

        .image {
            border-radius: 5px;
            border: none;
            width: 10cap;
            height: 3cap;
            font-family: 'cormorant';
            background-color: #404040;
            color: #ffff;
        }

        .coluna {
            height: 20rem;
            margin: 5%;
            font-family: 'cormorant';
            color: #000000;
            font-weight: bold;
        }

        .divmae {
            /*border: solid 2px #22517c;*/
            margin-left: 14%;
            border-radius: 10px;
            width: 70%;
            height: 40rem;
            align-items: center;
            justify-content: center;
            justify-items: center;
            text-align: center;
            display: flex;
            flex-direction: column;
            padding: 2%;
        }

        .enviar {
            border-radius: 5px;
            border: none;
            width: 10cap;
            height: 4cap;
            font-family: 'cormorant';
            background-color: #404040;
            color: #ffff;
            margin-top: 2%;
            margin-right: 50rem;
        }
    </style>
</body>

</html>