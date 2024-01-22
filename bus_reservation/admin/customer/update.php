<?php
    include "../../config.php";

    $sql = "update user_data set name='{$_POST['name']}',email='{$_POST['email']}', phone='{$_POST['phone']}' where id=".$_POST["id"];
    $con->query($sql);
?>