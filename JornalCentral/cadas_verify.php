<?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $host  = "localhost:3306";
        $user  = "root";
        $pass  = "";
        $base  = "jornal";
        $con   = mysqli_connect($host, $user, $pass, $base);

        $res = mysqli_query($con,"INSERT INTO tb_pendente (nome, email, senha)VALUES('$nome','$email','$senha');");
        echo "<script>window.location.href = 'cadastro.php'</script>";

        /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
    ?>