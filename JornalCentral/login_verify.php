<?php
$nome = $_GET['nome'];
$_SESSION['nome'] = $nome;
$senha = $_GET['senha'];

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "jornal";
$con   = mysqli_connect($host, $user, $pass, $base);

$res = mysqli_query($con,"select * from usuario where senha='$senha' or nome='$nome';");  

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res)){

if($escrever['nome']==$nome && $escrever['senha']== $senha)
{
    echo "<script>window.location.href = 'index.php'</script>";
}
else
{
    echo "<script>alert('Senha ou Usuario incorretos!')</script>";  
    echo "<script>window.location.href = 'login.php'</script>";
}
}
?>