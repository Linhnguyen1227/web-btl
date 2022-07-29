<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['Name_login'])){
        unset($_SESSION['Name_login']);
    }
    header("location:2.0_login.php");
    ?>
    <!-- <a href="2.0_login.php">Về trang đăng nhập</a> -->
    

</body>
</html>