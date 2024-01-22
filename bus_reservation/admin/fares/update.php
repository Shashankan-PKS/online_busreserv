<?php
    include "../../config.php";

    $sql = "update fares set busnum='{$_POST['busnum']}',destination='{$_POST['destination']}',date='{$_POST['date']}',time='{$_POST['time']}',cost='{$_POST['cost']}'  where id=".$_POST["id"];
    $con->query($sql);
?>