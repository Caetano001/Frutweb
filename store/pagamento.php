<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagamento</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
        body{
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<?php
include "validacao.php";
?>
<body>
    <div class="pay">
        <div class="paycontainer">
        <form id="form" action="confirm.php" method="get">
        <div class="paybox">
            <p>Endereço de entrega</p>
            <input type="text" placeholder="CEP">
            <input type="text" placeholder="Endereço">
            <input type="text" placeholder="Bairro">
            <input type="text" placeholder="Cidade">
            <input type="number" placeholder="Complemento">
        </div>
        <div class="paybox">
            <p>pagamento com cartão</p>
            <input type="text" placeholder="Nome no cartão">
            <input type="number" placeholder="Numero do cartão">
            <input type="number" placeholder="MM / AA">
            <input type="number" placeholder="CVV">
            <input type="number" placeholder="CPF">
        </div>
        </form>
        </div>
        <div class="paybox2">
            <div class="pr-0">
                <div class="pr-01">
                    <p style="font-weight: 400;">
                        Produtos:
                        <br>
                        Frete:
                        <br>
                        Total:
                    </p>
                </div>
                <div class="pr-02">
                    <p style="font-weight: 400;">
                        R$ 0,00
                        <br>
                        R$ 0,00
                        <br>
                        R$ 0,00
                    </p>
                </div>
            </div>
        </div>
        <div class="paybarra">
            <a href="carrinho.php"><button type="button">Voltar</button></a>
            <button type="submit" form="form">Confirmar</button>
        </div>
    </div>
</body>
</html>