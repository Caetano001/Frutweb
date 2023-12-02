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
            <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php" class="active">Produtos</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="historico.php">Histórico</a></li>
                <li><a href="index.php?logout">Sair</a></li>
            </ul>
        </nav>
    </header>
    <div class="idp" style="background-image: url(../imgs/fruits2.jpg);"><h1>NOSSAS FRUTAS</h1></div>
    <div class="barra-busca">
    <form>
        <input class="pesquisar" type="text" placeholder="Pesquisar">
        <button type="submit">
            <span class="material-symbols-outlined" style="display: flex; justify-content: center; align-items: center;">
            search
            </span>
        </button>
    </form>
    </div>
    <div class="boxprodutos">
        <?php
        include "../config.php";

        $exib=$conn->prepare('SELECT * FROM `produto`');
        $exib->execute();
        if($exib->rowCount()==0){
            exit();
        }else{
            while ($row = $exib->fetch()){
            echo '<div class="box">';
            echo '<a href="itembox.php?id='.base64_encode($row['id_prod']).'"><img src="'.$row['prod_img_url'].'" alt="'.$row['nome_prod'].'"></a>';
            echo '<h1>'.$row['nome_prod'].'</h1>';
            echo '<p>R$ '.$row['preco_prod'].' KG</p>';
            echo '<button>Adicionar<span class="material-symbols-outlined" style="font-size: 15pt; margin-left: 5px;">shopping_cart</span></button>';
            echo '</div>';
            }
        }

        ?>
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