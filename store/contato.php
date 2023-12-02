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
<title>Frutaria's Web</title>
</head>
<body>
    <header>
        <div class="logo">
                <h1><a href="index.php">Frutaria's Web</a></h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="contato.php" class="active">Contato</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="historico.php">Histórico</a></li>
                <li><a href="index.php?logout">Sair</a></li>

            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="contatosbox1">
            <div class="contatosbox1-1">
                <div class="conth1">
                    <h1>Contato</h1>
                </div>
                <div class="contlist">
                    <div class="list" id="l1">
                        <ul>
                            <li>(41) 0000-0000</li>
                            <li>(41) 0000-0000</li>
                        </ul>
                    </div>
                    <div class="list" id="l2">
                    <ul>
                        <li>Rua. rua </li>
                        <li>Número:1234</li>
                        <li>CEP:00000-000</li>
                        <li>Curitiba/PR</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contatosbox2">
        <div class="contatosbox2-2">
            <div class="cont2h1"><h1>Envie sua mensagem</h1></div>
            <form action="#">
                <div class="inputs">
                <input type="text" id="input" placeholder="Nome" required>
                <input type="text" id="input" placeholder="Sobrenome" required>
                <input type="email" id="input" placeholder="E-mail" required>
                <input type="tel" id="input" placeholder="Telefone">
                </div>
                <div class="textarea">
                <textarea name="textarea" id="txtarea" cols="30" rows="10" placeholder="Mensagem"></textarea>
                </div>
                <div class="submit">
                <input type="submit" id="submit-buttom">
                </div>
            </form>
        </div>
        </div>
    </div>
    <footer>
        <div class="contfooter">
            <p>(41) 0000-0000</p>
            <p>Rua. rua 00 - curitiba</p>
            <p>email@email.com</p>
        </div>
    </footer>
</body>
</html>