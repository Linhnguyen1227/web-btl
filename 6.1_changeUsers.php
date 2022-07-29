<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <input type="text" name="name" placeholder="Nhập tên đăng nhập" > -->
    <?php
        if(isset($_GET['submit_update'])){
            require 'conn_page.php';
            mysqli_set_charset($conn,'UTF8');
            
            $sql_selectID = "SELECT * from users where Name_login  = '{$_SESSION['Name_login']}'";
            $result_selectID = $conn->query($sql_selectID);
            if($result_selectID ->num_rows > 0){
                $row = $result_selectID->fetch_assoc();
                $ID = $row["ID"];
            }
            $full_name = $_GET['name_update'];
            $id_card = $_GET['card_update'];
            $phone= $_GET['phone_update'];
            $mail = $_GET['mail_update'];


            $sql ="UPDATE infor_user,users SET  fullName='$full_name', ID_card=$id_card, telephone_number = $phone ,email= '$mail' where id_users = $ID";
            if ($conn ->query($sql)==True)
            {
              echo "Thông tin người dùng đã được cập nhật <br>";
              echo"<a href='4.0_home_page.php'>Về trang chủ</a>";
            }
            else {
              echo "Vui lòng không bỏ trống thông tin";
            }
            $conn->close();
        }
        ?>
</body>
</html>