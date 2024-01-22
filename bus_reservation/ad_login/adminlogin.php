<?php

    include '../config.php';
    session_start();

    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $pass = mysqli_real_escape_string($con, $_POST['password']);

        $select = " SELECT * FROM  admin_data  WHERE email = '$email' && password = '$pass' ";
        $result = mysqli_query($con, $select);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['name'] = $row['name'];
            header('location: ../admin/home/home.php');
        }else{
            $error[] = 'incorrect email or password';
        };
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <main>
        <div class="container">
            <form action="" method="post">
                <div class="header">
                    <span>Payanam Admin Login</span>
                    <label><a href="../index.html">x</a></label>
                </div>
                <?php 
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                ?>
                <input type="email" name="email" required placeholder="Enter your email" autocomplete="off">
                <input type="password" name="password" required placeholder="Enter the password">
                <input type="submit" value="Login" name="submit" class="button">
                <p>dont have an account? <a href="../register/register.php">Register Now</a></p>
            </form>
        </div>
    </main>
</body>
</html>