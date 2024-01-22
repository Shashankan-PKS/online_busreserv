<?php   

    include '../../config.php';


    session_start();

    if(!isset($_SESSION['name'])){
        header('location: ../../login/login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="history.css">
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <nav style="height: 100px;">
        <img src="../../assets/logo.png" width="120px" style="margin: 5px 100px;">
        <ul >
            <li style="height: 100px;"><a href="../home/home.php">Home</a></li>
            <li style="height: 100px;"><a href="../reservation/reserv.php"> Ticket Reservation</a></li>
            <li style="height: 100px;"><a href="" class="active">Booking History</a></li>
            <li style="height: 100px;"><a href="../logout/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    <section>
        <div class="container">
            <div class="header">
                <h2><i class="fa-solid fa-clock-rotate-left"></i>Booking History</h2>
            </div>
            <div class="data">
                <?php
                    $getname = $_SESSION["name"];
                    $sql = "SELECT * FROM booking WHERE username = '{$getname}' ";
                    $res = $con->query($sql);
                    if($res->num_rows>0){
                        
                        echo "<table style='border: 1px solid gray;text-align: center;width:100%;'>";
                        echo "<tr style=' background:blue; color: white; border: 1px solid gray;font-size: 18px;font-weight: 600;'>
                                <td style='padding: 10px;'>Sr.No</td>
                                <td style='padding: 10px;'>bus number</td>
                                <td style='padding: 10px;'>From Station</td>
                                <td style='padding: 10px;'>Destination</td>
                                <td style='padding: 10px;'>Name</td>
                                <td style='padding: 10px;'>Email</td>
                                <td style='padding: 10px;'>Phone</td>
                                <td style='padding: 10px;'>Seat</td>
                                <td style='padding: 10px;'>date</td>
                                <td style='padding: 10px;'>time</td>
                            </tr>";
                        $i=0;
                        while ($row = $res->fetch_assoc()) {
                            $i++;
                            echo "<tr style='font-size: 18px;font-weight: 600;padding: 10px;border-bottom: 1px solid gray;'>";
                            echo " <td style='padding: 10px;'>{$i}</td>
                                <td style='padding: 10px;'>{$row["busnum"]}</td>
                                <td style='padding: 10px;'>{$row["source"]}</td>
                                <td style='padding: 10px;'>{$row["destination"]}</td>
                                <td style='padding: 10px;'>{$row["username"]}</td>
                                <td style='padding: 10px;'>{$row["email"]}</td>
                                <td style='padding: 10px;'>{$row["phone"]}</td>
                                <td style='padding: 10px;'>{$row["seat"]}</td>
                                <td style='padding: 10px;'>{$row["date"]}</td>
                                <td style='padding: 10px;'>{$row["time"]}</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }else{
                        echo "No records found";
                    }
                ?>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
</body>
</html>