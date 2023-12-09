<!-- //////////////////////////////////////////////////////////////////////////////-->
<?php
    $titulo = $_POST['titulo'];
    $img = $_POST['img'];
    $texto = $_POST['texto'];

    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "jornal";
    $con   = mysqli_connect($host, $user, $pass, $base);

    $res = mysqli_query($con,"INSERT INTO tb_post (titulo, img, texto) VALUES('$titulo','$img','$texto');");
        echo "<script>alert('Post em lista de espera! Agora e so aguardar a aprovação de um administrador.')</script>";  
        echo "<script>window.location.href = 'post.php'</script>";

    /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
?>