<?php
    include "../../config.php";

    $sql = "delete from buses where id=".$_POST["id"];
    $con->query($sql);
?>
