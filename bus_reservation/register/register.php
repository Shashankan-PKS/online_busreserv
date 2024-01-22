<?php

    include '../config.php';

    if(isset($_POST['submit'])){

        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mob = mysqli_real_escape_string($con, $_POST['phone']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);

        $select = " SELECT * FROM user_data WHERE email = '$email' && password = '$pass' && name = '$name' && phone = '$mob'";
        $result = mysqli_query($con, $select);

        if(mysqli_num_rows($result) > 0){

            $error[] = 'user already exist!';
        }else{

            if ($pass != $cpass) {
                $error[] = 'password not matched!';
            }else{
                $insert = "INSERT INTO user_data (name, email, phone , password) VALUES('$name','$email', '$mob', '$pass')";
                mysqli_query($con, $insert);
                header('location:../login/login.php');
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css" />
</head>
<body>
    <main>
        <div class="container">
            <form action="" method="post">
                <div class="header">
                    <h3> Payanam User Registeration</h3>
                    <label><a href="../index.html">x</a></label>
                </div>
                <?php 
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                ?>
                <input type="text" placeholder="Enter Your name" required name="name" autocomplete="off">
                <input type="email" name="email" required placeholder="Enter your email"  autocomplete="off">
                <input type="number" name="phone" required placeholder="Enter your mobile"  autocomplete="off">
                <input type="password" name="password" required placeholder="Enter the password">
                <input type="password" name="cpassword" required placeholder="Confirm your password">
                <input type="submit" value="Register" name="submit" class="button">
                <p>already have an account? <a href="../login/login.php">Login Now</a></p>
            </form>
        </div>
    </main>
</body>
</html>