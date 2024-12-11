<?php
    session_start();
    require_once 'db_conn.php';

    if (isset($_GET['id'])) {
        $_SESSAO['id_veio'] = $_GET['id'];
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") { 
        $id_veio = $_SESSAO['id_veio'];
        $id = $_POST["id"]; 
        $nome = $_POST["nome"];
        $pintor = $_POST["pintor"]; 
        $data_criacao = $_POST["data_criacao"]; 
        $movimento = $_POST["movimento"]; 
        $img_url = $_POST["img_url"]; 
        $sql = "update obras set id = '$id', nome = '$nome', pintor = '$pintor', data_criacao = '$data_criacao', movimento = '$movimento', imagem_url = '$img_url' where id = '$id_veio'";
        if ($conn->query($sql) === TRUE) { 
            header("Location: banco.php");
            exit(0);
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cscu/style.css">
    <title>index bonitão</title>
</head>
<body>
        <nav>
            <a href="index.html">Home</a>
            <a href="vanguardas.html">Vanguardas</a>
            <a href="artistas.html">Artistas</a>
            <a href="banco.php">Banco</a>
        </nav>
        <article>
        <form method="post" class="formfoda">
            <div>
                <label>ID</label>
                <input type="text" name="id" value="<?=$_GET['id']?>">
            </div>
            <div>
                <label>Pintor</label>
                <input type="text" name="pintor" value="<?=$_GET['pintor']?>">
            </div>
            <div>
                <label>Nome</label>
                <input type="text" name="nome" value="<?=$_GET['nome']; ?>">
            </div>
            <div>
                <label>Data de criação</label>
                <input type="text" name="data_criacao" value="<?=$_GET['data']?>">
            </div>
            <div>
                <label>Movimento artístico</label>
                <input type="text" name="movimento" value="<?=$_GET['movimento']?>">
            </div>
            <div>
                <label>Imagem (url)</label>
                <input type="text" name="img_url" value="<?=$_GET['url']?>">
            </div>
            <div>
                <button type="submit" name="atualizar_obra">Atualizar obra</button>
            </div>
            </form>
        </article>
</body>
</html>