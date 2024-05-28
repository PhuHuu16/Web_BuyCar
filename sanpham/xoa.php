<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        include "config.php";

        $sql = "DELETE FROM product WHERE id=$id";
        $conn->query($sql);
        header("location: ../index.php");
        exit;
    }
?>