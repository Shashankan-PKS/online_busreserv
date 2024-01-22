<?php
    include "../../../config.php";
    session_start();
    if(isset($_POST['submit'])){
        $busno = $_POST['busnum'];
        $from = $_POST['source'];
        $dest = $_POST['destination'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mob = $_POST['phone'];
        $seat = $_POST['seating'];
        $depdate = date('Y-m-d', strtotime($_POST['date']));
        $deptime = $_POST['time'];

        $sql = "INSERT INTO booking (busnum,source,destination,username,email,phone,seat,date,time) VALUES ('$busno','$from','$dest','$name','$email','$mob','$seat','$depdate','$deptime')";
        $result = mysqli_query($con, $sql);

        if($result){
            $_SESSION['status'] = "Data are inserted";
            header("location: book1.php");
        }else{
            $_SESSION['status'] = "Data are not inserted";
            header("location: book1.php");
        }
    }
?>