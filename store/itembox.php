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
    <title>item</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header>
        <div class="logo">
            <h1><a href="index.php">Frutaria's Web</a></h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php" class="active">Produtos</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="historico.php">Histórico</a></li>
                <li><a href="index.php?logout">Sair</a></li>

            </ul>
        </nav>
    </header>
    <?php
        include "../config.php";
        $id=base64_decode($_GET['id']);
        $exib = $conn->prepare('SELECT `nome_prod`, `preco_prod`, `prod_img_url` FROM produto WHERE id_prod = :pid ;');
        $exib->bindValue(':pid',$id);
        $exib->execute();
        $row=$exib->fetch();
        ?>
        <div class="back" style="width: 80%; margin: auto; margin-bottom: 10px; margin-top: 60px;"><a href="produtos.php">VOLTAR</a></div>
        <div class="it1">
            <div class="it1imagem"><img src="<?php echo $row['prod_img_url'];?>" alt="maça"></div>
            <div class="it1inf">
                <h1 style="margin-top: 45px;"><?php echo $row['nome_prod'];?> KG</h1>
                <p>R$ <?php echo $row['preco_prod'];?></p>
            </div>
            <div class="it1add">
                <div class="quantity-selector">
                    <select id="quantity" name="quantity" style="width: 100px; height: 40px; margin: auto; margin-top: 45px;">
                      <option value="1">500g</option>
                      <option value="2">1Kg</option>
                      <option value="3">1,5Kg</option>
                    </select>
                  </div>
                  <button>Adicionar<span class="material-symbols-outlined" style="font-size: 18pt; margin-left: 5px;">shopping_cart</span></button>
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