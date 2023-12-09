<?php
            $id = $_POST['codigo'];
            $noticia = $_POST['tipo'];
            
            $host  = "localhost:3306";
            $user  = "root";
            $pass  = "";
            $base  = "jornal";
            $con   = mysqli_connect($host, $user, $pass, $base);

            $res2 = mysqli_query($con,"SELECT * FROM tb_post WHERE id='$id';");

            while($escrever=mysqli_fetch_array($res2)){

            $titulo = $escrever['titulo'];
            $img = $escrever['img'];
            $texto = $escrever['texto'];  
              
            


            $numnoticia = rand(3,1000);

            $file = 'C:\xampp\htdocs\JornalCentral';
            // Abre o arquivo para obter o conteúdo existente
            $current = file_get_contents($file);
            // Acrescenta a nova pessoa no arquivo
            $current = '\
            '.$noticia."6.php";
            // Escreve o conteúdo de volta no arquivo
            file_put_contents($file, $current);

            $file = '../'.$noticia.$numnoticia.'.php';
            // Abre o arquivo para obter o conteúdo existente

            $res2 = mysqli_query($con,"INSERT INTO materias (titulo, img, texto, link) VALUES ('$titulo','$img','$texto','$noticia$numnoticia.php');");
            //ira transferir os dados de uma tabela para outra
            
            $current = file_get_contents($file);
            // Acrescenta a nova pessoa no arquivo
            $current = "
            <!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' href='img/logo.png'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500&family=Roboto+Slab&display=swap'
        rel='stylesheet'>

</head>

<body>

    <div>
        <header>
            <div class='nmlogo'><img class='logo' src='img/logo.png'></div>
            <div class='Login'><button class='bot'><a href='index.php' class='link'>Voltar</a></button></div>
        </header>
        <h1 class='titulo'>".$escrever['titulo']."</h1>

        <img class='imagenoti' src='imagem/".$escrever['img']."'>

        <div class='noticia'>
            <p class='coluna'>
            ".$escrever['texto']."
            </p>
        </div>
        <style>
            body {
                text-align: center;
                justify-content: center;
                align-items: center;
                display: flex;
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

            .login {
                background-color: #ffff;
                color: black;
                font-size: 15px;
                font-family: 'cormorant';
                border-radius: 10px;
                width: 80px;
                height: 40px;
                margin: 1rem;
                border: none;
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

            .lin{
                text-decoration: none;
            }

            .coluna {
                color: #000;
                font-family: 'Cormorant';
                font-size: 20px;
                text-align: justify;
                width: 50%;
                line-height: 1.5em
            }

            .noticia {
                text-align: center;
                justify-content: center;
                display: flex;
            }

            .titulo {
                margin-bottom: 50px;
                font-size: 50px;
                font-family: 'Cormorant';
                font-weight: bolder;
            }

            .imanoti {
                width: 50rem;
                border-radius: 10px;
                margin-bottom: 15px;
            }
        </style>
</body>

</html>
            ";
            // Escreve o conteúdo de volta no arquivo
            file_put_contents($file, $current);
                        

            $res1 = mysqli_query($con,"DELETE FROM tb_post WHERE id='$id';");

            echo "<script>alert('Post liberado com suscesso.!')</script>";  
            echo "<script>window.location.href = '../teste.php'</script>";

            }
        
            
        ?>
