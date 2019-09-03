<!DOCTYPE html>

    <div class="row corpo">

        <div class="formulario"> <!-- Formulario -->
            
         <form class="segunda" action="Gravar2.php" method="POST"><!-- segunda camada -->

            <div><img style="float:left;" src="img/parafuso.png" alt=""> <img style="float:right;" src="img/parafuso.png" alt=""></div>
            
            <h3 class="titulo">Cadastro</h3>

            <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu"> 

            <div class="form-group"> <input autofocus name="nome" class="form-control" type="text" placeholder="Nome de usuário *"> </div> <!-- Nome -->

            <div class="form-group"> <input name="email" class="form-control" type="email" placeholder="E-mail *"> </div> <!-- email -->

            <div class="form-group"> <input id="senha" name="senha" class="form-control" type="password" placeholder="Senha *"> </div> <!-- Senha -->

            <div class="form-group"> <input id="repeteSenha" name="repeteSenha" class="form-control" type="password" placeholder="Repita sua senha *"> </div> <!--Repetir Senha-->
            
            <select name="perfil" class="form-control col-md-4">
                <option value="" disabled selected>- Escolha -</option>
                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                <option value="PADRÂO">PADRÂO</option>
            </select><br>

            <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu">


            <input class="botao" type="submit" value="Cadastrar"> <!-- Botão -->
            
            
            <img style="float:left; margin-top:5%;" src="img/parafuso.png" alt=""> <img style="margin-top:5%; float:right;" src="img/parafuso.png" alt=""> <!-- Botões -->
            
            </form> <!-- segunda camada -->

        </div> <!-- Formulario -->

        

    </div>
