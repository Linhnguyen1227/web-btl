<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#dadce0;
            font-family: sans-serif;
        }
        #table_infor{
            border-radius: 5px;
            box-shadow:rgba(0, 0, 0, 0.5);
            /* width:50%; */
            margin:20px;
        }
    #table_infor p{
    margin:5px;
    border-bottom:1px solid #f1f3f4 ;
}
a{
    margin:20px;
}
    </style>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="search" id="search" placeholder="Nhập ID người dùng">
        <input type="submit" name="submit_search" id="submit_search" value="Search">
    </form>
    <div id="table_infor">
    <?php
    if(isset($_GET['submit_search'])){
        require 'conn_page.php';
        mysqli_set_charset($conn,'UTF8');

          $id = $_GET['search'];
            //----------------------------------select dữ liệu từ hai bảng
            $sql_select_infor  = "SELECT * FROM infor_user,users WHERE infor_user.id_users ='$id' AND users.ID = $id"; 
        
            $result_select_infor = $conn->query($sql_select_infor); 
      if ($result_select_infor->num_rows > 0){
         $row = $result_select_infor ->fetch_assoc();
         ?>
           <p>ID: <?php echo $row["ID"]?> </p> <br>
           <p>NameLogin: <?php echo $row["Name_login"]?> </p> <br>
           <p>Pass: <?php echo $row["pass_user"]?> </p> <br>
           <p>FullName: <?php echo $row["fullName"]?> </p> <br>
           <p>Telephone:   <?php echo $row['telephone_number'] ?> </p> <br>
           <p>ID_card: <?php echo $row['ID_card']?></p><br>
           <p>Mail: <?php echo $row['email']?></p><br>
           <p>Position: <?php echo $row['position']?></p> <br>
           <a href='4.0_home_page.php'>về trang chủ</a>
    <?php
        }
        else{
            echo "<script type='text/javascript'>alert('Tên đăng nhập  này không tồn tại. Vui lòng kiểm tra lại !');</script>";
        }
    }
    ?>
    </div>
</body>
</html>