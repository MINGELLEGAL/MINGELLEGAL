<?php
    session_start();
    require_once 'db_conn.php';
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
        <center><a href="insert.php" class="botaofoda pqnaofuncionaporraaaaaaa">ADICIONAR QUADROS UAU :o</a></center>
        <div class="obra">
        <?php 

            $query = "SELECT * FROM obras";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $obras)
                {
                    ?>
                    <div class="divfodastica">
                        <img src="<?= $obras['imagem_url']; ?>" class="quadros">
                        <p class="pqnaofuncionaporraaaaaaa">
                        <?= $obras['nome']; ?>,
                        <?= $obras['pintor']; ?>,
                        (<?= $obras['data_criacao']; ?>). <br>
                        movimento artístico: <?= $obras['movimento']; ?>

                        <br> <br>
                        <a href="updatemtfoda.php?pintor=<?= $obras['pintor']; ?> &nome= <?= $obras['nome']; ?> &id= <?= $obras['id']; ?> &data= <?= $obras['data_criacao'] ; ?> &movimento= <?= $obras['movimento']; ?> &url= <?= $obras['imagem_url']; ?>" class="botaofoda">Editar</a>
                        <a href="deletemtfoda.php?id=<?= $obras['id']; ?>" class="botaofoda">Deletar</a>

                        </p>
                    </div>
                    <hr>
                    <?php 
                }
            }
            else
            {
                echo "<h5> Nenhuma obra cadastrada </h5>";
            }
            ?>

        </div>
        </article>
</body>
</html>