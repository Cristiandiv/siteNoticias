<?php
$nome = $_POST['nome'];
$_SESSION['nome'] = $nome;
$senha = $_POST['senha'];

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "jornal";
$con   = mysqli_connect($host, $user, $pass, $base);

$res = mysqli_query($con,"select * from tb_edit where senha='$senha' or nome='$nome';");  

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res)){

if($escrever['nome']==$nome && $escrever['senha']== $senha)
{
    echo "<script>window.location.href = 'colunista/post.php'</script>";
}
else
{
    echo "<script>alert('Senha e/ou Usuario incorretos.!')</script>";  
    echo "<script>window.location.href = 'loginedit.php'</script>";
}
}
?>