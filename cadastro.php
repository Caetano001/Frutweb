<?php
if(isset($_POST['cadastrar'])){
$nome=$_POST['nome'];
$email=$_POST['email'];
$tel=$_POST['numero'];
$senha=MD5($_POST['senha']);
$cpf=$_POST['cpf'];
include "config.php";
$reg=$conn->prepare('INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `tel_usuario`, `CPF_usuario`) 
VALUES (NULL, :pnome, :pemail, :psenha, :ptel, :pcpf);');
$reg->bindValue(':pnome',$nome);
$reg->bindValue(':pemail',$email);
$reg->bindValue(':psenha',$senha);
$reg->bindValue(':ptel',$tel);
$reg->bindValue(':pcpf',$cpf);
$reg->execute();
header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastr.css">
    <title>Cadastrar</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="imgs/imagem.png">
        </div>
        <div class="form">
                <div class="form-header">
                    <div class="title">
                        <h1>cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <a href="login.php"><button>Entrar</button></a>
                    </div>
                </div>
                <form action="cadastro.php" method="POST">
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="name" type="text" name="nome" placeholder="digite seu nome">
                    </div>
                    
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="digite seu email">
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="numero" placeholder="(xx) xxxx-xxxx">
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha">
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="Seu CPF">
                    </div>
                </div>
                <div class="continue-button">
                    <button type="submit" name="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>