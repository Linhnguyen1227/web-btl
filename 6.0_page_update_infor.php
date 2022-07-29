<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="update_infor.js"></script>
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
        }
        #popup_update{
            width: 700px;
            position: relative;
            top: 50%;
            margin:auto;
            border:none;
            border-radius: 5px ;
            background-color: #dadce0;
            padding: 10px;
            box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
        }
        input{
            width: 100%;
            background-color:#dadce0;
            border:none;
            border-bottom: 1px solid #fff ;
            margin: 5px;
        }
        #submit_update{
            cursor: pointer;
        }
        #update_if{
            
            line-height: 20px;
        }
        #back{
            text-decoration: none;
            justify-content: center;
            color:black;
        }
        input{
            line-height: 30px;
        }
    </style>
</head>
<body>
    <div id="popup_update">
        <form action="6.1_changeUsers.php" method="get">
            <?php
                require 'conn_page.php'; //kết nối database
                 mysqli_set_charset($conn,'UTF8');
                $sql_selectID = "SELECT * from users where Name_login  = '{$_SESSION['Name_login']}'";
                $result_selectID = $conn->query($sql_selectID);
                if($result_selectID ->num_rows > 0){
                    $row = $result_selectID->fetch_assoc();
                    $ID = $row["ID"];
                }
                $sql = "SELECT * FROM infor_user,users where id_users = $ID";
                $result = $conn->query($sql);
                if($result ->num_rows > 0){
                    $row = $result->fetch_assoc();

                   
                    $full_name = $row['fullName'];
                    $id_card = $row['ID_card'];
                    $phone= $row['telephone_number'];
                    $mail = $row['email'];
                    
                    echo"
                     Name:<input type='text' name='name_update' id='update_name' value='$full_name' > <br> 
                     ID_Card<input type='text' name='card_update' id='update_card' value='$id_card' > <br> 
                     Phone Number:<input type='text' name='phone_update' id='update_phone' value='$phone' > <br> 
                     Mail:<input type='text' name='mail_update' id='update_mail' value='$mail' > <br>
                    ";
                }
            ?>
            
           <input type="submit" id="submit_update" name='submit_update' value='Cập Nhật'>

           <a id="back" href='javascript:history.go(-1)'>Trở Lại</a>
           
        </form>   
    </div>
</body>
</html>