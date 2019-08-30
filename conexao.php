<html>
    <title>Login</title>
    
<body>

<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
 
$con = mysqli_connect("localhost","root","","jf") or die ("Sem conexão com o servidor");

$sql = mysqli_query($con, "SELECT * FROM usuario WHERE email = '$email' AND senha = SHA1('$senha')");

if(mysqli_num_rows($sql) == 1 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('location:orcamento.php');
}
else{
unset ($_SESSION['login']);
unset ($_SESSION['senha']);
header('location:ok.php');
  
}

?>
    
</body>
</html>
