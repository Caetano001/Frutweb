<?php
if(isset($_GET['logout'])){
    session_destroy();
    header('location: ../index.html');
    }
?>
<?php
session_start();
if(!isset($_SESSION['loginadm'])){
    header('location: ../loginADM.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700&family=Nunito:ital,wght@0,400;0,500;1,400&display=swap');
    body{
        font-family: 'montserrat', 'helvetica';
        background-color: #F0F0F0;
    }
    .grpr form{
        width: 50%;
    }
    .btn-primary{
        --bs-btn-hover-bg: #526b4b;
        background-color: #3a4d34;
        --bs-btn-active-bg: #526b4b;
    }
    @media screen and (max-width:900px){
        .grpr form{
            width: 90%;
        }
    }
    </style>
    <title>Administração</title>
</head>
<body>
<header>
    <div class="logo">
        <h1>Frutaria's Web</h1>
    </div>
    <nav style="Display: flex; justify-content: flex-end;">
    <a class="btn btn-primary" href="index.php?logout" role="button" style="width: 150px; margin: 10px; border-color: #3a4d34;">Sair</a>
    </nav>
</header>
<div class="container-fluid">
        <div class="row">
        <div class="col-12">
        <?php
        include "../config.php";
        if(isset($_GET['alterar'])){
            $id=base64_decode($_GET['id']);
            $alterar=$conn->prepare('SELECT * FROM `produto` WHERE `id_prod`=:pid');
            $alterar->bindValue(':pid',$id);
            $alterar->execute();
            $row_alterar=$alterar->fetch();

        ?>
        <div class="grpr">
        <form action="index.php" method="POST" enctype="multipart/form-data" style="margin: auto; margin-top:80px;border: 1px solid lightgrey; padding: 30px; border-radius: 30px; background-color: #fff; box-shadow: 2px 2px 10px lightgrey;">
        <H1 style="text-align: center; font-weight: 400; margin: 10px 0px;">Alterar Fruta : "<?php echo $row_alterar['nome_prod']; ?>"</H1>
            <input type="hidden" name="id" value="<?php echo base64_encode($row_alterar['id_prod']); ?>">
            <div class="mb-3">
                <label for="nomeproduto" class="form-label">Nome da Fruta</label>
                <input type="text" class="form-control" id="nomeproduto" name="nomeproduto" value="<?php echo $row_alterar['nome_prod']; ?>">
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço(KG)</label>
                <input type="number" step="any" class="form-control" id="preco" name="precoproduto" value="<?php echo $row_alterar['preco_prod']; ?>"> 
            </div>
            <button type="submit" class="btn btn-primary" name="altera" value="alterar" style="border-color: #3a4d34; margin-bottom: 20px;">Alterar</button>  
            <a class="btn btn-primary" href="index.php" role="button" style="margin-bottom:20px;border-color:#3a4d34">Cancelar</a>  
        </form>
        </div>
        <?php
        }
        if(isset($_POST['altera'])){
            $id=base64_decode($_POST['id']);
            $nome=$_POST['nomeproduto'];
            $preco=$_POST['precoproduto'];

            $altera=$conn->prepare('UPDATE `produto` SET `nome_prod` = :pnome, `preco_prod` = :ppreco WHERE `produto`.`id_prod` = :pid ;');
            $altera->bindValue(':pnome',$nome);
            $altera->bindValue(':ppreco',$preco);
            $altera->bindValue(':pid',$id);
            $altera->execute();
        }
        ?>   
        </div>
    </div>
    <div class="row">     
    <div class="row">
        <div class="col-12 grpr">
            <form action="index.php" method="POST" enctype="multipart/form-data" style="margin: auto; margin-top:80px; border: 1px solid lightgrey; padding: 30px; border-radius: 30px; background-color: #fff; box-shadow: 2px 2px 10px lightgrey;">
                <H1 style="text-align: center; font-weight: 400; margin: 10px 0px;">Adicionar Fruta</H1>
                <div class="mb-3">
                    <label for="nomeproduto" class="form-label">Nome da Fruta</label>
                    <input type="text" class="form-control" id="nomeproduto" name="nomeproduto" required>
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço(KG)</label>
                    <input type="number" step="any" class="form-control" id="preco" name="precoproduto" required> 
                </div>
                <div class="mb-3">
                    <label for="imgprod" class="form-label">Escolher Imagem da fruta</label>
                    <input class="form-control" type="file" name="imgprod">
                </div>
                <button type="submit" class="btn btn-primary" name="grava" style="border-color: #3a4d34; margin-bottom: 20px;">Gravar</button>
                <?php
                include "../config.php";
                if(isset($_POST['grava'])){
                $nomeproduto=$_POST['nomeproduto'];
                $precoproduto=$_POST['precoproduto'];

                $_UP['pasta']="../uploads/";
                $_UP['tamanho']=1024*1024*2; //2mb
                $_UP['extensao']=['jpg','png','jpeg','gif'];
                $_UP['renomear']=true;
                    
                $explode=explode('.',$_FILES['imgprod']['name']);
                $aponta=end($explode);
                $extensao=strtolower($aponta);
                if(array_search($extensao,$_UP['extensao'])===false){
                    echo "Extensão não aceita";
                    exit;
                }

                if($_UP['tamanho']<=$_FILES['imgprod']['size']){
                    echo "arquivo muito grande";
                    exit;
                }

                if($_UP['renomear']===true){
                    $nome_final=md5(time()).".$extensao";
                }else{
                    $nome_final=$_FILES['imgprod']['name'];
                }

                if(move_uploaded_file($_FILES['imgprod']['tmp_name'],$_UP['pasta'].$nome_final)){
                $url=$_UP['pasta'].$nome_final;
                $grava=$conn->prepare('INSERT INTO `produto` (`id_prod`, `nome_prod`, `preco_prod`, `prod_img_url`) VALUES (NULL, :nomeprod, :precoprod, :purl);');
                $grava->bindValue(':nomeprod', $nomeproduto);
                $grava->bindValue(':precoprod', $precoproduto);
                $grava->bindValue(':purl', $url);
                $grava->execute();
                }
                echo 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="color: black; background-color: #f5f5dc; border-color: #f5f5dc;">
                <strong>Registrado com sucesso!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
                }
                ?>
            </form>
            </div>
        </div>

        <h1 style="text-align: center; font-weight: 400; margin: 40px 0px;">Frutas</h1>
        <div class="col-12" style="display: flex; justify-content: center; width: 100%; align-itens: center; flex-direction: column; margin-bottom: 50px;">
            <table class="table" style="width: 90%; box-shadow: 2px 2px 10px lightgray; margin: auto;">
                <thead>
                    <tr>
                    <th scope="col">img</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço(KG)</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <?php
                    include "../config.php";
                    if(isset($_GET['exclusao'])){
                        $id=base64_decode($_GET['id']);
                        $excluir=$conn->prepare('DELETE FROM produto WHERE `produto`.`id_prod` = :pid');
                        $excluir->bindValue(':pid', $id);
                        $excluir->execute();
                        header("Location: index.php");
                    }
                    $exib=$conn->prepare('SELECT * FROM `produto`');
                    $exib->execute();
                    if ($exib->rowCount() == 0){
                        echo "Não há registros";
                    }else{
                    while ($row = $exib->fetch()){
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<th scope="row" style="width: 150px;">';
                    echo '<img src="'.$row['prod_img_url'].'" class="img-thumbnail" alt="'.$row['nome_prod'].'" style="width: 150px;">';
                    echo '</th>';
                    echo '<td>'.$row['id_prod'].'</td>';
                    echo '<td>'.$row['nome_prod'].'</td>';
                    echo '<td>R$'.$row['preco_prod'].'</td>';
                    echo '<td>Disponivel</td>';
                    echo '<td>';
                    echo '<div class="btn-group">';
                    echo '<a href="index.php?alterar&id='.base64_encode($row['id_prod']).'" class="btn btn-primary bacoes" style="border-color: #3a4d34">Editar</a>';
                    echo '<a href="index.php?excluir&id='.base64_encode($row['id_prod']).'&name='.base64_encode($row['nome_prod']).'" class="btn btn-primary bacoes" style="border-color: #3a4d34">Excluir</a>';
                    echo '</div>';
                    echo '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    }
                    }
                    if(isset($_GET['excluir'])){
                        $id=$_GET['id'];
                        $name=$_GET['name'];
                        echo '<div class="alert alert-light" role="alert" style="width: 90%; margin: auto; margin-bottom: 30px;">
                                Deseja realmente excluir "'.base64_decode($name).'"?
                                <a href="index.php?exclusao&id='.$id.'" class="alert-link" style="margin: 0px 10px">Sim</a>
                                <a href="index.php" class="alert-link">Não</a>
                                </div>';
                    }
 
                ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>