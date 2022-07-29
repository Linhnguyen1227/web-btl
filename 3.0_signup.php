<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="3.1_signup.css">
    <script src="3.2_signup.js"></script>
    <!-- <script src="chuyenHuongweb.js"></script> -->
    <head>
<body>
    <div id="banner">
        <p class="caption">Sign up</p>
        <p class="content">By sign up in you agree to the ridiculously long terms that you didn't bother to read</p>
    </div>
    <form id="formLogin" action="3.3_conn_signup.php" method="get">
        <label for="">User name</label><br>
        <input type="text" id="username" name="nameLogin" placeholder="Enter user name" required ><br>

        <label for="">Full name</label><br>
        <input type="text" id="fullname" name="fullname" placeholder="Enter full name" required ><br>

        <label for="">Phone</label><br>
        <input type="number" id="phone" name="telephone_number" placeholder="Enter phone" required ><br>

        <label for="">Email</label><br>
        <input type="text" id="email" name="email" placeholder="Enter email" required ><br>

        <label for="">ID_Card:</label><br>
        <input type="number" id="card" name="ID_card" placeholder="Enter ID" required ><br>

        <label for="">Password</label><br>
        <input type="password" id="password" name="pass_user" placeholder="Enter password" required ><br>

        <label for="">Confirm Password</label><br>
        <input type="password" id="re_password" name="re_password" placeholder="Confirm password" required ><br>

        <input type="submit" name="submit" id="submit" value="Sign up">

        <a href="2.0_login.php">Log in</a>
    </form>             
</body>
</html>