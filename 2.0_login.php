<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="2.1_login.css">
    <script src="2.2_login.js"></script>
</head>
<body>
    <div id="banner">
        <p class="caption">Login</p>
        <p class="content">By logging in you agree to the ridiculously long terms that you didn't bother to read</p>
    </div>
    <form id="formLogin" action="" method="get">
        <label for="">Name</label><br>
        <input type="text" id="name" name="name" placeholder="Enter name" required ><br>
        <label for="">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Enter password" required ><br>
        <a class="fogot" href="">Fogot password</a>
        <input type="submit" name="submit" id="submit" value="Log in">
        <a href="3.0_signup.php">Sign up</a>
    </form>
    <?php
     header("Content-Type:text/html; charset-UTF-8");
     //xử lý đăng nhập 
    if(isset($_GET['submit']))
    {
    require 'conn_page.php';

    $name= $_GET['name'];
    $pass= $_GET['password'];
    //kiểm tra tên dăng nhập tồn tại không
    $sql ="SELECT Name_login,pass_user from users where Name_login = '$name'";
    $result = $conn->query($sql);
    
    if($result->num_rows == 0)
    {
        echo"<script type='text/javascript'>alert('Tên đăng nhập  không tồn tại. Vui lòng kiểm tra lại !');</script>";
        exit;
    }
    //lấy mật khẩu trong database
    $row = $result->fetch_assoc();
    //so sánh hai mật khẩu trùng hay không
    if($pass != $row['pass_user']){
        echo"<script type='text/javascript'>alert('Mật khẩu không đúng. Vui lòng kiểm tra lại !');</script>";
        exit;
    }
    session_start();
    $_SESSION['Name_login'] = $name;
    
   header("location:4.0_home_page.php");
    }
    $conn->close();
    ?>
</body>
</html>