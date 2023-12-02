<?php
include "config.php";
if(isset($_POST['entrar'])){
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $login=$conn->prepare('SELECT * FROM `usuario` WHERE `email_usuario`=:pemail AND `senha_usuario`=MD5(:psenha);');
    $login->bindValue(':pemail',$email);
    $login->bindValue(':psenha',$senha);
    $login->execute();
    if($login->rowCount()==0){
        $mensagemErro = "Credenciais inválidas. Tente novamente.";
    }else{
        session_start();
        $row=$login->fetch();
        $id_login=$row['id_usuario'];
        $_SESSION['login']=$id_login;
        header("Location: store/index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Entrar</title>
    <style>
        body{
            background-color: #f7f7f7;
        }
        .login-box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #fff;
            padding: 70px 45px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, .212);
            text-align: center;
        }
        h1{
            margin-top: 0;
            font-family: 'montserrat';
            font-size: 15pt;
            font-weight: 500;
            text-align: center;
            margin-bottom: 20px
        }
        input{
            width: 300px;
            height: 40px;
            border-radius: 12px;
            border: 1px solid lightgrey;
            box-sizing: border-box;
            padding-left: 8px;
            font-size: 12pt;
            box-shadow: 1px 1px 6px #0000001C;
        }
        input:focus-visible {
        outline: 1px solid #cdeac0;
        }
        .botao{
            width: 100%;
            height: auto;
            text-align: center;
        }
        button{
            width: 200px;
            height: 50px;
            border-radius: 15px;
            border: 2px solid lightgrey;
            cursor: pointer;
            background-color: #f5f5dc;
            color: #000;
            font-size: 11.5pt;
            transition: 0.2s ease-in-out;
            box-shadow: 1px 1px 6px #0000001C;
        }
        button:hover{
            background-color: #cdeac0;
        }
    </style>
</head>
<body>
<header style="justify-content: flex-start;">
        <div class="logo" style="display:flex; justify-content: center;">
                <h1><a href="index.html">Frutaria's Web</a></h1>
        </div>
</header>
    <div class="login-box">
        <h1>LOGIN</h1>
        <form id="login" action="login.php" method="post">
        <input type="text" placeholder="Email" name="email" required>
        <br><br>
        <input type="password" placeholder="Senha" name="senha" required>
        <br><br>
        <div class="botao">
        <button type="submit" name="entrar">Entrar</button>
        </div>
        <?php
        if (isset($mensagemErro)) {
        echo "<p style='color: red;'>$mensagemErro</p>";
        }
        ?>
        </form>
        <br>
        <a href="cadastro.php">criar uma conta</a><br>
        <a href="#">Esqueçeu sua senha?</a><br><br>
        <a href="loginADM.php">Entrar como ADM</a>
    </div>
</body>
</html>