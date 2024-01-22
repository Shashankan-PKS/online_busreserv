<?php
    include "../../config.php";

    $sql = "delete from fares where id=".$_POST["id"];
    $con->query($sql);
?>