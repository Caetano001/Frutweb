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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>historico</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
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
            <li><a href="contato.php">Contato</a></li>
            <li><a href="carrinho.php">Carrinho</a></li>
            <li><a href="historico.php" class="active">Histórico</a></li>
            <li><a href="index.php?logout">Sair</a></li>

        </ul>
    </nav>
</header>
    <div class="histcontainer">
        <div class="histbox1">
            <h1>Historico de pedidos</h1>
            <div class="histbox1-1" style="border-top: 1px solid lightgrey;">
                <div class="histbox1-2">
                    <p>Numero do pedido: 010248858</p>
                    <p>Data: 12/02/23</p>
                    <p>Endereço: rua. rua 1000</p>
                </div>
                <div class="histbox1-3" style="display: flex; align-items: center; justify-content: center;">
                    <a href="detalhes/detalhes1.php"><button>Detalhes</button></a>
                </div>
            </div>
            <div class="histbox1-1">
                <div class="histbox1-2">
                    <p>Numero do pedido: 385673970</p>
                    <p>Data: 15/02/23</p>
                    <p>Endereço: rua. rua 1000</p>
                </div>
                <div class="histbox1-3" style="display: flex; align-items: center; justify-content: center;">
                    <a href="detalhes/detalhes2.php"><button>Detalhes</button></a>
                </div>
            </div>
            <div class="histbox1-1" style="border-bottom: 0; margin-bottom: 0;">
                <div class="histbox1-2">
                    <p>Numero do pedido: 053248874</p>
                    <p>Data: 25/04/23</p>
                    <p>Endereço: rua. rua 1000</p>
                </div>
                <div class="histbox1-3" style="display: flex; align-items: center; justify-content: center;">
                    <a href="detalhes/detalhes3.php"><button>Detalhes</button></a>
                </div>
            </div>
        </div>
        <div class="histbox2">
            <h1>pedidos em andamento</h1>
            <div class="histbox1-1 histbox1-1a" style="border-top: 1px solid lightgrey ;">
                <div class="histbox1-2">
                    <p>Numero do pedido: 997456259</p>
                    <p>Entrega estimada em 15min</p>
                    <p>Endereço: rua. rua 1000</p>
                </div>
                <div class="histbox1-3" style="display: flex; align-items: center; justify-content: center;">
                    <a href="detalhes/detalhes4.php"><button>Detalhes</button></a>
                </div>
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