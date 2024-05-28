<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        include "config.php";

        $sql = "DELETE FROM khachhang WHERE id=$id";
        $conn->query($sql);
        header("location: xemdanhsach.php");
        exit;
    }
?>