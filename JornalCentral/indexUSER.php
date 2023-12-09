<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Germania+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto+Slab:wght@800&display=swap"
        rel="stylesheet">

    <title>Jornal Central</title>
</head>



<?php
$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "jornal";
$con   = mysqli_connect($host, $user, $pass, $base);


$res2 = mysqli_query($con,"select * from materias;"); 

while($escrever=mysqli_fetch_array($res2)){

    echo "<body>
            <form action='' method='get'>
                    <div>
                        <header>
                            <div class='divmenu'><img class='menu' src='img/menu.png' width='5rem' height='15px'></div>
                            <div class='nmlogo'><img class='logo' src='img/logo.png'></div>
                            <div class='Login'><button class='bot'><a href='login.php' class='link'>Login</a></button></div>
                        </header>

                        <!-- ////////////////////////////// area de teste /////////////////////////////////// -->
                        <a href='".$escrever['link']."' class='link'>
                        <div class='noti'>
                            <img class='imagenoti' src='imagem/".$escrever['img']."'>
                            <h2>
                            ".$escrever['titulo']."
                            </h2>
                        </div>
                        </a>

                    <!-- ////////////////////////////// area de teste /////////////////////////////////// -->

                    </div>
            </form>
            <style>
                body {
                    text-align: center;
                    align-items: center;
                    padding-top: 8%;
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

                /*----------------------- Divs Header -------------------------------*/
                .nmlogo {
                    width: 100px;
                    height: 100px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }

                .divmenu {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 8%;
                    height: 100%;
                    float: left;
                }

                .Login {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 10%;
                    height: 100%;
                    float: right;
                }

                /*------------------------------- Outros header ---------------------------------------*/
                .bot {
                    background-color: #404040;
                    color: white;
                    width: 60%;
                    height: 40%;
                    border-radius: 10px;
                    font-family: 'cormorant';
                    border: none;
                }

                .menu {

                    width: 43%;
                    height: 35%;
                }

                .logo {
                    height: 100px;
                    width: 100px;
                }

                /*-------------------------------- Escritas ----------------------------------------*/
                p {
                    width: 50%;
                    justify-content: center;
                    align-items: center;
                    margin-top: 30px;
                    margin-left: 45%;
                    font-family: 'Roboto Slab', serif;
                    text-align: justify;
                }

                .link {
                    text-decoration: none;
                    color: white;
                }

                h2 {
                    margin-left: 45%;
                    font-family: 'Roboto Slab', serif;
                    text-align: justify;
                    color: #22517c;
                    text-align: justify;
                }

                /*--------------------------- Divs notícias ---------------------------------------------*/
                .noti {
                    margin-left: 20%;
                    width: 60%;
                    height: 15rem;
                    margin-bottom: 1%;
                    border-radius: 10px;
                    border: solid 2px black;

                }

                .imagenoti {
                    width: 40%;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    float: left;
                    border-top-left-radius: 7px;
                    border-bottom-left-radius: 7px;
                }
            </style>
        </body>
        </html>
    ";
}

echo "</br>";

?>

<body>
    <form action="" method="get">
        <div>
            <header>
                <div class="divmenu"><img class="menu" src="img/menu.png" width="5rem" height="15px"></div>
                <div class="nmlogo"><img class="logo" src="img/logo.png"></div>
                <div class="Login"><button class="bot"><a href="index.php" class="link">Log-out</a></button></div>
            </header>

            <div class="noti">
                <img class="imagenoti" src="img/guerra.jpg">
                <h2>
                    Guerra!!!!!!!!!
                </h2>
                <p>
                    A polícia federal dos Estados Unidos, o FBI, apreendeu celulares e outros aparelhos eletrônicos
                    do prefeito de Nova York, Eric Adams, de acordo com uma reportagem publicada pelo jornal "The New
                    York Times" nesta sexta-feira (10).
                </p>
            </div>

                <!-- ////////////////////////////// area de teste /////////////////////////////////// -->
   
        
        </div>
            
    </form>
    <style>
        body {
            text-align: center;
            align-items: center;
            padding-top: 8%;
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

        /*----------------------- Divs Header -------------------------------*/
        .nmlogo {
            width: 100px;
            height: 100px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .divmenu {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 8%;
            height: 100%;
            float: left;
        }

        .Login {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 10%;
            height: 100%;
            float: right;
        }

        /*------------------------------- Outros header ---------------------------------------*/
        .bot {
            background-color: #404040;
            color: white;
            width: 60%;
            height: 40%;
            border-radius: 10px;
            font-family: 'cormorant';
            border: none;
        }

        .menu {

            width: 43%;
            height: 35%;
        }

        .logo {
            height: 100px;
            width: 100px;
        }

        /*-------------------------------- Escritas ----------------------------------------*/
        p {
            width: 50%;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            margin-left: 45%;
            font-family: 'Roboto Slab', serif;
            text-align: justify;
        }

        .link {
            text-decoration: none;
            color: white;
        }

        h2 {
            margin-left: 45%;
            font-family: 'Roboto Slab', serif;
            text-align: justify;
            color: #22517c;
            text-align: justify;
        }

        /*--------------------------- Divs notícias ---------------------------------------------*/
        .noti {
            margin-left: 20%;
            width: 60%;
            height: 15rem;
            margin-bottom: 1%;
            border-radius: 10px;
            border: solid 2px black;

        }

        .imagenoti {
            width: 40%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
            border-top-left-radius: 7px;
            border-bottom-left-radius: 7px;
        }
    </style>
</body>

</html>