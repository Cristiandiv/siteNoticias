<?php
        $id = $_POST['codigo'];

        
        $host  = "localhost:3306";
        $user  = "root";
        $pass  = "";
        $base  = "jornal";
        $con   = mysqli_connect($host, $user, $pass, $base);       

        $res1 = mysqli_query($con,"DELETE FROM materias WHERE id='$id';");

        echo "<script>alert('Post apagado com suscesso.!')</script>";  
        echo "<script>window.location.href = 'adm_expubli.php'</script>";
        
            
        ?>
