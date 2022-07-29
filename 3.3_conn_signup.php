<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function countDown()
        {
         soGiay --
         if(soGiay>0){
             document.querySelector('#soGiay').innerHTML = soGiay;
         }
         else{
             document.location="2.0_login.php";
         }
     }
        var soGiay = 5;
        setInterval(countDown,1000);
    </script>
    <style>
    #thongbao {
    background-color: #474a59;
    width: 600px; 
    margin: 50px auto; 
    border: 2px solid darkolivegreen;
    font-size: 20px; 
    text-align: center;
    border-radius: 5px;
    box-shadow: 100% rgb(20 23 26 / 16%);
    color: #ffffff;
}
    </style>
</head>
<body>
<?php
    if(isset($_GET['submit']))
            {
                //Kết nối với file connect
                require "conn_page.php";
                //Lấy dữ liệu từ thẻ input
                $nameLogin = $_GET['nameLogin'];
                $fullname = $_GET['fullname'];
                $telephone = $_GET['telephone_number'];
                $mail = $_GET['email'];
                $ID_card = $_GET['ID_card'];
                $pass = $_GET['pass_user'];
                $position = "user";
                //insert data to table
                $sql = "INSERT INTO users (Name_login,pass_user,position) VALUES ('$nameLogin','$pass','$position')";
                $result= $conn->query($sql);


                if($result==true){ // kết nối sql để lấy ID
                    $sql = "SELECT * FROM users WHERE Name_login = '$nameLogin'";
                    $result = $conn->query($sql);
                if($result ->num_rows > 0){ 
                    $row = $result->fetch_assoc();
                }
                $ID = $row["ID"]; // lấy id
            }
                    $sql_signup = "INSERT INTO infor_user (fullName,ID_card,telephone_number,id_users,email) VALUES ('$fullname','$ID_card','$telephone','$ID','$mail')";
                    $conn->query($sql_signup);

                    // session_start();
                    // $_SESSION['Name_login'] = $name;

            
                    echo "
                    <div id = 'thongbao'>
                        <h3>Chào mừng bạn: " . $nameLogin . " đã đăng ký thành công hệ thống Money Manager  </h3><br> 
                        <p>Quay lại trang đăng nhập sau <span id ='soGiay'>5</span> giây </p>
                    </div>";
                }
                else
                {
                    echo "Đăng ký thất bại: " . $conn->error;
                    echo "<a href='3.0_signup.php'>Re sign up</a>";
                    die;
                }
                $conn->close();
    ?>
</body>
</html>
