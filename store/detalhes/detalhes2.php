<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location: ../../login.php');
}
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <header>
        <div class="logo">
                <h1><a href="index.html">Frutaria's Web</a></h1>
        </div>
        <nav>
        <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../produtos.php">Produtos</a></li>
                <li><a href="../contato.php">Contato</a></li>
                <li><a href="../carrinho.php">Carrinho</a></li>
                <li><a href="../historico.php" class="active">Histórico</a></li>
                <li><a href="../index.php?logout">Sair</a></li>

            </ul>
        </nav>
    </header>
    <div class="back" style="width: 75%; margin: auto; margin-bottom: 10px; margin-top: 60px;"><a href="../historico.php">VOLTAR</a></div>
    <div class="detalcontainer">
        <div class="detalbox1">
            <h1>Items</h1>
            <div class="detalbox1-1" style="border-top: 1px solid lightgrey;">
                <img src="../../imgs/03-16.png" alt="kiwi">
                <div class="detalinf">
                    <p>Kiwi 1Kg R$9,99</p>
                </div>
            </div>
            <div class="detalbox1-1">
                <img src="../../imgs/mamao.png" alt="mamão">
                <div class="detalinf">
                    <p>Mamão 500g R$9,99</p>
                </div>    
            </div>
        </div>
        <div class="detalbox2">
            <div class="detalbox2-1">
                <h1>Dados do pedido</h1>
                <p>Numero do pedido: 385673970</p>
                <p>Data de entrega: 15/02/23</p>
                <p>Endereço: Rua. rua 1000</p>
                <p>valor total: R$9,99</p>
            </div>
            <div class="detalbox2-1">
                <h1 style="margin-bottom: 0;">forma de pagamento</h1>
                <h2 style="margin-top: 0; margin-bottom: 10px;">Cartão</h2>
                <p>Nome: Pedro Ramos</p>
                <p>CPF: 123.456.789-00</p>
                <p>Numero: 1234 1234 1234 1234</p>
                <p>CCV: 123</p>
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