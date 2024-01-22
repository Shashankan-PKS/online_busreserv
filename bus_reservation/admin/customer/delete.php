<?php
    include "../../config.php";

    $sql = "delete from user_data where id=".$_POST["id"];
    $con->query($sql);
?>