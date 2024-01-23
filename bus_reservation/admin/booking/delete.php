<?php
    include "../../config.php";

    $sql = "delete from booking where id=".$_POST["id"];
    $con->query($sql);
?>