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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Carrinho</title>
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
                <li><a href="carrinho.php" class="active">Carrinho</a></li>
                <li><a href="historico.php">Histórico</a></li>
                <li><a href="index.php?logout">Sair</a></li>

            </ul>
        </nav>
    </header>
    <h1 style="text-align: center; padding: 0; font-family: 'montserrat'; font-weight: 400; font-size: 20pt;">Seu Carrinho</h1>
    <div class="cartbox">
        <div class="itens">
            <div class="inf" style="border-bottom: 1px solid lightgrey;">
                <ul>
                    <li style="width: 45%; padding-left: 20px; box-sizing: border-box;">Produto</li>
                    <li style="width: 20%;">Quantidade</li>
                    <li>valor</li>
                </ul>
            </div>
            <div class="item" style="border-bottom: 1px solid lightgrey; margin-bottom: 5px;">
                <div class="a">
                    <img src="../imgs/maca.png" alt="maça">
                    <div class="info">
                    <h1>
                        MAÇÃ
                    </h1>
                    <p>R$ 9,99 Kg</p>
                    </div>  
                </div>
                <div class="b">
                    <div class="quantity-selector">
                        <select id="quantity" name="quantity">
                          <option value="1">500g</option>
                          <option value="2">1Kg</option>
                          <option value="3">1,5Kg</option>
                        </select>
                      </div>
                </div>
                <div class="c">
                    <p>R$ 0,00</p>
                    <button class="remover">
                    <span class="material-symbols-outlined">
                        delete
                    </span>
                    </button>
                </div>
            </div>
            <div class="item" style="border-bottom: 1px solid lightgrey; margin-bottom: 5px;">
                <div class="a">
                    <img src="../imgs/laranja.png" alt="maça">
                    <div class="info">
                        <h1>
                            LARANJA
                        </h1>
                        <p>R$ 9,99 Kg</p>
                        </div>  
                </div>
                <div class="b">
                    <div class="quantity-selector">
                        <select id="quantity" name="quantity">
                          <option value="1">500g</option>
                          <option value="2">1Kg</option>
                          <option value="3">1,5Kg</option>
                        </select>
                      </div>
                </div>
                <div class="c">
                    <p>R$ 0,00</p>
                    <button class="remover">
                        <span class="material-symbols-outlined">
                            delete
                        </span>
                    </button>
                </div>
            </div>
            <div class="item" style="border-bottom: 1px solid lightgrey; margin-bottom: 5px;">
                <div class="a">
                    <img src="../imgs/pera.png" alt="pera">
                    <div class="info">
                        <h1>
                            PÊRA
                        </h1>
                        <p>R$ 9,99 Kg</p>
                        </div>  
                </div>
                <div class="b">
                    <div class="quantity-selector">
                        <select id="quantity" name="quantity">
                          <option value="1">500g</option>
                          <option value="2">1Kg</option>
                          <option value="3">1,5Kg</option>
                        </select>
                      </div>
                </div>
                <div class="c">
                    <p>R$ 0,00</p>
                    <button class="remover">
                        <span class="material-symbols-outlined">
                            delete
                        </span>
                    </button>
                </div>
            </div>
            <div class="item">
                <div class="a">
                    <img src="../imgs/mamao.png" alt="mamao">
                    <div class="info">
                        <h1>
                            MAMÃO
                        </h1>
                        <p>R$ 9,99 Kg</p>
                        </div>  
                </div>
                <div class="b">
                    <div class="quantity-selector">
                        <select id="quantity" name="quantity">
                          <option value="1">500g</option>
                          <option value="2">1Kg</option>
                          <option value="3">1,5Kg</option>
                        </select>
                      </div>
                </div>
                <div class="c">
                    <p>R$ 0,00</p>
                    <button class="remover">
                        <span class="material-symbols-outlined">
                            delete
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="pr">
        <div class="pr-0">
            <div class="pr-01">
                <p>
                    Produtos:
                    <br>
                    Frete:
                    <br>
                    Total:
                </p>
            </div>
            <div class="pr-02">
                <p>
                    R$ 0,00
                    <br>
                    R$ 0,00
                    <br>
                    R$ 0,00
                </p>
            </div>
        </div>
        <div class="pr-1">
            <input type="text" placeholder="Insira o CEP">
            <br>
            <button style="vertical-align: middle;">Calcular Frete</button>
        </div>
        </div>
    </div>
    <div class="barra">
        <a href="produtos.php">
        <button>
            Continuar comprando
        </button>
        </a>
        <a href="pagamento.php">
        <button>
            Continuar
        </button>
        </a>
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