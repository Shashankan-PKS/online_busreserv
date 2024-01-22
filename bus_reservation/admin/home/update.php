<?php
    include "../../config.php";

    $sql = "update buses set busnum='{$_POST['busnum']}',destination='{$_POST['destination']}' where id=".$_POST["id"];
    $con->query($sql);
?>