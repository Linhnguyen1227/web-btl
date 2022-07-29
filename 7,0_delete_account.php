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
        require "conn_page.php";

        mysqli_set_charset($conn,'UTF8');

        $sql = "SELECT * from users where Name_login  = '{$_SESSION['Name_login']}'";
        $result = $conn->query($sql);
        if($result ->num_rows > 0){
            $row = $result->fetch_assoc();
            $ID = $row["ID"];
            echo "$ID";
        }
        $sql_delete = "DELETE * FROM infor_user WHERE ID = $ID";
        $result_delete = $conn->query($sql_delete);
        if( !$result_delete){
           die ("Lỗi . $conn->$conn_error");
        }else{
            echo'Đã xóa thông tin của bạn';
        }
    }
    ?>
</body>
</html>