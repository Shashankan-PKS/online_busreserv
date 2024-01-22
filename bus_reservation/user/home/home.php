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
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <main>
        <nav>
            <img src="../../assets/logo.png" width="120px" style="margin: 5px 100px;">
            <ul>
                <li><a href="" class="active">Home</a></li>
                <li><a href="../reservation/reserv.php">Ticket Reservation</a></li>
                <li><a href="../history/history.php">Booking History</a></li>
                <li><a href="../logout/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="content">
                <h2>
                    Let's start your journey with us safe and secure!
                </h2>
                <button onclick="location = this.value" value="../reservation/reserv.html">Book Now</button>
            </div>
        </div>
    </main>


    <script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
</body>
</html>