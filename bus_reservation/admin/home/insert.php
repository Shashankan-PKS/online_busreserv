<?php 
    include "../../config.php";
    $busno = $_POST["busnum"];
    $from = $_POST["source"];
    $dest = $_POST["destination"];
    $sql = " INSERT INTO buses (busnum,source,destination) VALUES ('{$busno}','{$from}','{$dest}' ) ";
    $con->query($sql);
    $id=$con->insert_id;
    echo "<td>{$busno}</td>";
    echo "<td>{$from}</td>";
    echo "<td>{$dest}</td>";
    echo "<td><button class='edit updt' data-id='{$id}'><i class='fa-solid fa-pen-to-square'></i></button></td>";
    echo "<td><button class='dlt del' data-id='{$id}'><i class='fa-solid fa-trash'></i></button></td>";
?> 