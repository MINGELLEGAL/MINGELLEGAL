<?php
    session_start();
    require_once 'db_conn.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") { 
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $pintor = $_POST["pintor"];
        $data_criacao = $_POST["data_criacao"];
        $movimento = $_POST["movimento"];
        $img_url = $_POST["img_url"];
        $sql = "INSERT INTO obras (id, nome, pintor, data_criacao, movimento, imagem_url) VALUES ('$id', '$nome', '$pintor', '$data_criacao', '$movimento', '$img_url')";
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
                <input type="text" name="id">
            </div>
            <div>
                <label>Pintor</label>
                <input type="text" name="pintor">
            </div>
            <div>
                <label>Nome</label>
                <input type="text" name="nome">
            </div>
            <div>
                <label>Data de criação</label>
                <input type="text" name="data_criacao">
            </div>
            <div>
                <label>Movimento artístico</label>
                <input type="text" name="movimento">
            </div>
            <div>
                <label>Imagem (url)</label>
                <input type="text" name="img_url" class="t">
            </div>
            <div>
                <button type="submit" name="adicionar_obra">Adicionar obra</button>
            </div>
            </form>
        </article>
</body>
</html>