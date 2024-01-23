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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <main>
        <nav>
           <label class="logo"> Admin Panel</label>
            <ul>
                <li><a href="" class="active">Buses</a></li>
                <li><a href="../fares/fares.php">Fares & Timing</a></li>
                <li><a href="../booking/booking.html">Booking Status</a></li>
                <li><a href="../customer/customer.php">Customer Status</a></li>
                <li><a href="../../user/logout/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
        </nav>
        <section>
            <div class="heading">
                <h1>
                    Welcome , <span> Admin </span>
                </h1>
            </div>
            <div class="add">
                <span onclick="disp()"> + Add buses</span>
            </div>
            <div class="addbus">
                <div class="notification">
                    <div class="head">
                        <span>Add the Bus</span>
                    </div>
                    <form id="frm">
                        <input type="text" class="input-box" id="busnumber" name="busnum" placeholder="Enter the Bus Number">
                        <input type="text" class="input-box" id="source" name="source" placeholder="Enter From Station">
                        <input type="text" class="input-box" id="destini" name="destination" placeholder="Enter the Destination">
                        <input type="hidden" name="id" id="id" value="0">
                        <input type="button" value="Submit" class="submit-btn" name="submit" id="save">
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
                    var formdata = $("#frm").serialize();
                    $.ajax({
                        url:"insert.php",
                        type:"POST",
                        data:formdata,
                        success:function(d){
                            $("#output").load("view.php");
                            $("<tr></tr>").html(d).appendTo(".table");
                            $("#form")[0].reset();
                            $("#id").val("0");
                        }
                    });
                }else{
                    var formdata = $("#frm").serialize();
                    $.ajax({
                        url:"update.php",
                        type:"POST",
                        data:formdata,
                        success:function(d){
                            $("#output").load("view.php");
                            $("#frm")[0].reset();
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
                        $("#output").load("view.php");
                    }
                });
            });

            $(document).on("click",".updt",function(){
                var row = $(this);
                var id = $(this).attr("data-id");
                $("#id").val(id);

                var num = row.closest("tr").find("td:eq(0)").text();
                $("#busnumber").val(num);

                var src = row.closest("tr").find("td:eq(1)").text();
                $("#source").val(src);

                var desti = row.closest("tr").find("td:eq(2)").text();
                $("#destini").val(desti);
            });
        });
    </script>
    <script src="admin.js"></script>
    <script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
</body>
</html>
