 <?php
    $id=$_POST['id'];
    $host  = "localhost:3306";
    $user  = "root";
    $pass  = "";
    $base  = "jornal";
    $con   = mysqli_connect($host, $user, $pass, $base);


    $res2 = mysqli_query($con,"select * from tb_pendente where id='$id';");  //esta parte ira mostrar uma tabela como todos posts pedentes a ser liberados.

    while($escrever=mysqli_fetch_array($res2)){

    $nome = $escrever['nome'];
    $senha = $escrever['senha']; 

    $res2 = mysqli_query($con,"INSERT INTO usuario (nome,senha) VALUES ('$nome','$senha');");
    
    $res1 = mysqli_query($con,"DELETE FROM tb_pendente WHERE id='$id';");

    echo "<script>alert('Cadastro realizado com suscesso.!')</script>";  
    echo "<script>window.location.href = 'adm.php'</script>";
    }

    echo "</br></br>";

?>