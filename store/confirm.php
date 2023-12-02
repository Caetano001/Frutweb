<?php
include "validacao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
        body{
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="confirm">
        <div class="confirmbox1">
            <div class="confirmbox1-1">
                <h1 style="text-align: center;">Pedido confirmado!</h1>
                <p style="text-align: center; margin: 0px;">
                    Muito obrigado!<br><br>
                    Items
                </p>
            </div>
            <div class="confirmbox1-2">
                <div class="cb1-2">
                    <img src="../imgs/maca.png" alt="Maçã">
                    <div class="confirmboxinfo">
                        <h1>
                            MAÇÃ
                        </h1>
                    </div>
                    <div class="confirmboxinfo">
                    <p>R$9,99 1KG</p>
                    </div>  
                </div>
            </div>
            <div class="confirmbox1-2">
                <div class="cb1-2">
                    <img src="../imgs/laranja.png" alt="laranja">
                    <div class="confirmboxinfo">
                        <h1>
                            LARANJA
                        </h1>
                    </div>
                    <div class="confirmboxinfo">
                    <p>R$9,99 500G</p>
                    </div>  
                </div>
            </div>
            <div class="confirmbox1-2">
                <div class="cb1-2">
                    <img src="../imgs/pera.png" alt="Pêra">
                    <div class="confirmboxinfo">
                        <h1>
                            PÊRA
                        </h1>
                    </div>
                    <div class="confirmboxinfo">
                    <p>R$9,99 1KG</p>
                    </div>  
                </div>
            </div>
            <div class="confirmbox1-2">
                <div class="cb1-2">
                    <img src="../imgs/mamao.png" alt="Mamão">
                    <div class="confirmboxinfo">
                        <h1>
                            MAMÃO
                        </h1>
                    </div>
                    <div class="confirmboxinfo">
                    <p>R$9,99 1KG</p>
                    </div>  
                </div>
            </div>
        </div>
        <div class="confirmbox2">
            <div class="confirmbox2-1">
                <h1>Tempo estimado de entrega 15min</h1>
                <p>Rua. rua 1000, apto 300<br><br>
                   Centro 
                </p>
            </div>
            <div class="confirmbox2-2">
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
            <div class="confirmbox2-3">
                <a href="historico.php"><button>Finalizar</button></a>
            </div>
        </div>
    </div>
</body>
</html>