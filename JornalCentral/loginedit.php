<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <form action="login_editverify.php" method="post">

        <header>
            <div class="nmlogo"><img class="logo" src="img/logo.png"></div>
        </header>

        <div class="cadastrar">
                <h2 class="text">Editor</h2>
            <div class="logi">
                <p class="text">Nome:</p>
            </div>
            <input class="escri" type="text" name="nome">
            <div class="logi">
                <p class="text">Senha:</p>
            </div>
            <input class="escri" type="password" name="senha">
            <div class="botoes">
                <input class="logar" type="submit" value="Login">
            </div>

        </div>
    </form>

    <style>
        body {
            align-items: center;
            justify-content: center;
            justify-items: center;
            text-align: center;
            display: flex;
        }

        header{
        
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

        .cadastrar {
            background-color: #22517c;
            margin-top: 20%;
            width: 790px;
            height: 349px;
            flex-shrink: 0;
            border-radius: 10px;
            padding-top: 10px;
            align-items: center;
            padding-top: 5%;
            display: flex;
            flex-direction: column;
            border: solid 2px #000000;
        }

        .text {
            font-family: 'cormorant';
            color: white;
        }

        .escri {
            width: 258px;
            height: 25px;
            border-radius: 5px;
            border: none;
        }

        .logar {
            background-color: #404040;
            color: white;
            font-family: 'cormorant';
            border-radius: 10px;
            width: 80px;
            height: 40px;
            margin: 1rem;
            border: none;
        }

        .botoes {
            display: flex;
            margin-top: 2rem;
        }

        .logi {
            width: 258px;
            text-align: left;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
        }
    </style>
</body>

</html>