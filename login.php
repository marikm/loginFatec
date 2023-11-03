<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <form action="">
        <div class=titulo>
            <h1>Sejam&nbsp;<b class="negrito">Bem-Vindos</b></h1> 
        </div>
        <!-- &nbsp; usado para nao permitir quebra de liha entre elementos -->
       
       <main> <!-- Dentro dessa tag está o conteúdo         principal da pagina-->
            <div class="login">
                <div class="imagem"><img src="./img/perfil.png" alt="imagem de login"></div>
                <form action="">
                    <div>
                        <label for="usuario">USUÁRIO</label>
                        <input type="text" name="usuario" id="usuario"/>
                    </div>
                    <div>
                        <label for="senha">SENHA</label>
                        <input type="password" name="senha" id="senha"/>
                    </div>
                    <div class="button">
                        <button type="submit">L O G I N</button>
                    </div>
                </form>
            </div>
       </main>
    </form>
    
</body>
</html>