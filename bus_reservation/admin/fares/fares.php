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
    <link rel="stylesheet" href="fare.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <main>
        <nav>
           <label class="logo"> Admin Panel</label>
            <ul>
                <li><a href="../home/home.php" >Buses</a></li>
                <li><a href="" class="active"> Fares & Timing</a></li>
                <li><a href="../booking/booking.html">Booking Status</a></li>
                <li><a href="../customer/customer.php">Customer Status</a></li>
                <li><a href="../../user/logout/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
        </nav>
        <section>
            <div class="add">
                <span> + Add Departure Timing</span>
            </div>
            <div class="addbus">
                <div class="notification">
                    <div class="head">
                        <span>Add the Bus</span>
                    </div>
                    <form id="form">
                        <input type="text" class="input-box" name="busnum" id="busnumber" placeholder="Enter the Bus Number">
                        <input type="text" class="input-box" name="destination" id="destini" placeholder="Enter the Destination">
                        <input type="date" class="input-box" name="date" id="date">
                        <input type="time" class="input-box" name="time" id="time">
                        <input type="number" class="input-box" name="cost" id="cost" placeholder="Enter the Cost">
                        <input type="hidden" name="id" id="id" value="0"> 
                        <input type="submit" value="Submit" class="submit-btn" name="submit" id="save">
                    </form> 
                </div>
                <div class="table" id="output">

                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function(){

            $("#output").load("view.php");

            $("#save").click(function(){
                var id = $("#id").val();
                if(id==0){
                    $.ajax({
                        url:"insert.php",
                        type:"POST",
                        data:$("#form").serialize(),
                        success:function(d){
                            $("#output").load("view.php");
                            $("<tr></tr>").html(d).appendTo(".table");
                            $("#form")[0].reset();
                            $("#id").val("0");
                        }
                    });
                }else{
                    var formdata = $("#form").serialize();
                    $.ajax({
                        url:"update.php",
                        type:"POST",
                        data:formdata,
                        success:function(d){
                            $("#output").load("view.php");
                            $("#form")[0].reset();
                            $("#id").val("0");
                        }
                    });
                }
            });

            $(document).on("click",".del",function(){
                var del = $(this);
                var id = $(this).attr("data-id");
                $.ajax({
                    url:"delete.php",
                    type:"post",
                    data:{id:id},
                    success:function(){
                        del.closest("tr").hide();
                    }
                });
            });

            $(document).on("click",".updt",function(){
                var row = $(this);
                var id = $(this).attr("data-id");
                $("#id").val(id);

                var num = row.closest("tr").find("td:eq(0)").text();
                $("#busnumber").val(num);

                var desti = row.closest("tr").find("td:eq(1)").text();
                $("#destini").val(desti);

                var date = row.closest("tr").find("td:eq(2)").text();
                $("#date").val(date);

                var time = row.closest("tr").find("td:eq(3)").text();
                $("#time").val(time);

                var cost = row.closest("tr").find("td:eq(4)").text();
                $("#cost").val(cost);

                $("#output").load("view.php");
            });
        });
    </script>
    <script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
</body>
</html>
