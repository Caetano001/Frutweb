<?php
include "validacao.php";
?>
<?php
    if(isset($_GET['logout'])){
    session_destroy();
    header('location: ../index.html');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale-1.0">
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<title>Frutaria's Web</title>
</head>
<body>
    <header>
        <div class="logo">
                <h1><a href="index.php">Frutaria's Web</a></h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="historico.php">Histórico</a></li>
                <li><a href="index.php?logout">Sair</a></li>

            </ul>
        </nav>
    </header>
    <div class="topoimg" style="background-image: url('../imgs/frutas.jpg')"></div>
    <div class="midbox wow animate__animated animate__fadeInLeft">
        <h1>Seja Bem-Vindo</h1>
        <p>
        Aqui você encontra frutas frescas e selecionadas, diretamente dos produtores locais.
        Nosso compromisso é levar até você produtos de qualidade,
        com preços acessíveis e um atendimento excepcional. Sinta-se à vontade para navegar em nosso site e descobrir as opções 
        deliciosas que temos para oferecer. Com a Frutaria Web, comer frutas nunca foi tão fácil e prático.
        </p>
    </div>
    <div class="prod wow animate__animated animate__zoomIn">
        <div class="caixa 1"><a href="produtos.php"><img src="../imgs/mamao.png" alt="produtos"></a></div>
        <div class="caixa 2"><a href="produtos.php"><img src="../imgs/laranja.png" alt="produtos"></a></div>
        <div class="caixa 3"><a href="produtos.php"><img src="../imgs/pera.png" alt="produtos"></a></div>
        <div class="caixa 4"><a href="produtos.php"><img src="../imgs/uva.png" alt="produtos"></a></div>
    </div>
    <div class="p-link">
    <h1 id="vt">
        <a href="produtos.php">Ver Tudo</a>
    </h1>
    </div>
    <div class="bottom-img" style="background-image: url('../imgs/fruits5.jpg');"></div>
    <footer>
        <div class="contfooter">
            <p>(41) 0000-0000</p>
            <p>Rua. rua 00 - curitiba</p>
            <p>email@email.com</p>
        </div>
    </footer>

<script src="dist/wow.js"></script>
<script>
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();
</script>
</body>
</html>
