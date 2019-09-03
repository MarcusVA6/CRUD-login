<?php 
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $repeteSenha = $_POST['repeteSenha'];
    $perfil = $_POST['perfil'];
    
    /*
    echo $nome . "<br>";
    echo $email . "<br>";
    echo $celular . "<br>";
    echo $senha . "<br>";
    echo $repeteSenha . "<br>";
    */


    //------------------Cadastro---------------\\
    
    if ($senha == $repeteSenha){


       include "conexao.php";

       $sql = "INSERT INTO usuarios VALUES(null, '{$nome}', '{$email}', " . "SHA1('" . $senha . "'),'{$perfil}' " ;

        mysqli_query($con, $sql);
        
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/orcamento.php'>";
        

    }else{
        
        echo "<script>alert('teste')</script>";
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/orcamento.php'>";
        
    }


    //--------------------------------------\\
    
        




?>