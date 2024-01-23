<?php   

    include '../../config.php';


    session_start();

    if(!isset($_SESSION['name'])){
        header('location: ../../ad_login/adminlogin.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="customer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <main>
        <nav>
           <label class="logo"> Admin Panel</label>
            <ul>
                <li><a href="../home/home.php" >Buses</a></li>
                <li><a href="../fares/fares.php" > Fares & Timing</a></li>
                <li><a href="../booking/booking.html" >Booking Status</a></li>
                <li><a href="" class="active">Customer Status</a></li>
                <li><a href="../../user/logout/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
        </nav>
        <section>
            <div class="add">
                <span>Customer Details</span>
            </div>
            <div class="data" id="output">
                
            </div>
        </section>
    </main>

    <script>
        $(document).ready(function(){

        $("#output").load("view.php");

        $(document).on("click",".del",function(){
            var del = $(this);
            var id = $(this).attr("data-id");
            $.ajax({
                url:"delete.php",
                type:"post",
                data:{id:id},
                success:function(){
                    del.closest("tr").hide();
                    $("#output").load("view.php");
                }
            });
        });
        });
    </script>
    <script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
</body>
</html>
