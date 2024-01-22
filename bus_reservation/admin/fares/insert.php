<?php 
    include "../../config.php";
    $busno = $_POST["busnum"];
    $dest = $_POST["destination"];
    $depdate = $_POST["date"];
    $deptime = $_POST["time"];
    $depcost = $_POST["cost"];
    $sql = "INSERT INTO fares (busnum,destination,date , time , cost) VALUES ('{$busno}','{$dest}','{$depdate}','{$deptime}','{$depcost}') ";
    $con->query($sql);
    $id=$con->insert_id;
    echo "<td>{$busno}</td>";
    echo "<td>{$dest}</td>";
    echo "<td>{$depdate}</td>";
    echo "<td>{$deptime}</td>";
    echo "<td>{$depcost}</td>";
    echo "<td><button class='edit updt' data-id='{$id}'><i class='fa-solid fa-pen-to-square'></i></button></td>";
    echo "<td><button class='dlt del' data-id='{$id}'><i class='fa-solid fa-trash'></i></button></td>";
?>