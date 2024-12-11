<?php
    session_start();
    require_once 'db_conn.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        $sql = "DELETE FROM obras WHERE id = $id";
        if ($conn->query($sql) === TRUE) { 
            header("Location: banco.php");
            exit(0);
        }
    }
?>