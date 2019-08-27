<html>
    <title>Login</title>
    <body>
        <?php
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        SELECT * FROM usuario WHERE email = "{$email}" AND senha = "{$senha}";
        
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

        
        //conexão com o bando de dados
        
        //Fazer query no banco de dados
        SELECT * FROM usuario WHERE email = "{$email}" AND senha = "{$senha}";
        
        //SE o resultado for verdadeiro
            //cria sessão
        //SE for falto volta para login (com mensagem de erro)
        
    
        
        session_start();
        
        if("QUERY RETORNOU POSITIVO"){
            echo "password accepted";
            $_SESSION['login']=true;
        }else {
            echo "incorrect login";
        }
        ?>

        <form name="input" action="adminportal.php" method="get">
            <input type="submit" value="Home">
        </form>
    </body>
</html>