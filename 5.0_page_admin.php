<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d112bb3c5e.js" crossorigin="anonymous"></script>                                          
    <title>Document</title>
    <script>
         document.addEventListener('DOMContentLoaded',function()
{
    document.querySelector('#open_popup').style.opacity = "0";
    document.querySelector('#open_popup').style.visibility = "hidden";
    document.querySelector('#img_acc').onclick = function()
    {
        document.querySelector('#open_popup').style.opacity = "1";
        document.querySelector('#open_popup').style.visibility = "visible";
    }
    document.querySelector('#close_popup').onclick = function()
    {
        document.querySelector('#open_popup').style.opacity = "0";
        document.querySelector('#open_popup').style.visibility = "hidden";
    }
});
    </script>
    <style>
        *{
    margin: 0px;
    padding: 0px;
}
body{
    height: 650px;
    width: 1536px;
    font-family:'Product Sans',Arial,sans-serif;
    background-color: #dadce0;
}
#header{
    height: 58px;
    width: 100%;
    background-color:#dadce0;
}
#header #header_logo{
    height: 58px;
    width: 230px;
}
#header #header_logo a{
    color: #5f6368;
    font-size: 18px;
    line-height: 58px;
    text-decoration: none;
    width: 100px;
}
#header #header_logo a img{
    width: 37px;
    margin: 13px 10px 0px 11px;
    float: left;
}
#header #header_search{
    height: 47px;
    width: 722px;
    border-radius:  10px;
    position: absolute;
    top: 7px;
    right: 558px;
    border: none;
    background-color: #ffffff;
}
#header #header_search input{
    height: 47px;
    width: 92%;
    border: none;
    padding-left: 10px;
    background-color: #ffffff;
    font-size: 14px;
}
#header #header_search #search_btn{
    float: right;
    width: 8%;
    line-height: 53px;
    text-align: center;
}
#header #header_search input:focus,#header #header_search input:active,#header #header_search input{
    outline: 0;
    outline-style: none;
    outline-width: 0;
    border-radius: 10px 0 0 10px;
}
#header #Icon_1{
    position: absolute;
    top: 14px;
    right: 130px;
}
#header #Icon_1 button a  i{
    color: #5f6368;
    font-size: 21px;
}
#header #Icon_1 button{
    height: 43px;
    width: 43px;
    border-radius: 22px;
    background-color: #dadce0;
    border: none;
}
#header #Icon_1 button:hover{
    background-color: #f1f3f4;
}
#header #Icon_2{
    position: absolute;
    top: 13px;
    right: 80px;
}
#header #Icon_2 button a  i{
    color: #5f6368;
    font-size: 21px;
}
#header #Icon_2 button{
    height: 43px;
    width: 43px;
    border-radius: 22px;
    background-color: #dadce0;
    border: none;
}
#header #Icon_2 button:hover{
    background-color: #f1f3f4;
}
#header #img_acc{
    position: absolute;
    top: 11px;
    right: 30px;
    height: 45px;
    width: 45px;
    border: none;
    border-radius: 100%;
    /* background-color: #dadce0; */

}
#header #img_acc img{
    width: 100%;
    border-radius: 100%;
}
/* #popup{
    background: rgba(0,0,0,0.6);
    position: fixed;
    top: 0;
    height: 100%;
    width: 100%;
} */
#open_popup{ 
    /* opacity: 0;
    visibility: hidden; */
    transition: 0.2s;
    width: 356px;
    border: none;
    border-radius: 10px;
    position: relative;
    top: 70px;
    margin: auto;
    background-color:#ffffff;
    text-align:center;
    border:0.5px solid gray;
    font-family:sans-serif;
    color: black;
    box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
  }
#close_popup{
    position: relative;
    bottom: 118px;
    left: 311px;
    width: 20px;
  }
  #open_popup_header_1{
    margin: 20px 20px;
  
  }
  #open_popup_header #open_popup_header_1 img {
   height: 80px;
   width: 80px;
   border-radius: 20px;
   margin-top: 20px;
   
  }
  #open_popup_header_2 h3 {
   
  }
  #open_popup_header_4{
    padding: 30px;
    display: block;
  }
  #open_popup_header_4 a {
    border: 1px solid gray;
    padding: 10px;
    border-radius: 25px;
    text-decoration: none;
    color:black;
  }
  #open_popup_body{
  height: 162px;
  border-bottom: 0.5px solid #dadce0;
  }
  #open_popup_body a {
    color: black;
    line-height: 55px;
    text-decoration: none;
  }
  #body_in{
    height: 55px;
  }
  #open_popup_body a #body_in:hover{
    background-color:#dadce0;
  }
  a:hover{
    background-color:#dadce0;
  }
  #log_out {
    height: 55px;
  }
  #log_out:hover{
    background-color:#dadce0;
  }
  #open_popup_footer {
   display:flex;
   justify-content:center;
  }
  #open_popup_footer a{
    color:black;
    margin-left :16px;
    text-decoration:none;
    font-size: 13px;
    line-height:40px;
  } 
/* #header #img_acc button{
    height: 45px;
    width: 44px;
    border: none;
    background-color: #dadce0;
} */
#header #img_acc :hover{
    background-color: #f1f3f4;
}
#left{
    height: 650px;
    width: 283px;
    background-color:#dadce0;
    float: left;
    margin-top: 30px;
    border-right: 1px solid #f1f3f4;
}
#left ul{
    border-bottom: 1px solid #ffffff;
}
#left ul a{
    text-decoration: none;
    list-style-type: none;
    font-size: 14px;
    border-radius: 20px;
    color: #3c4043;
    font-weight: 500;
}
#left ul a li{
    border-right: 20px;
    line-height: 46px;
    margin: 0px ;
}
#left ul a li:hover{
    background: #f1f3f4;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
#left ul a i{
    margin: 0 19px 0 22px;
    font-size: 21px;
}
footer{
    display: block;
    height: 80px;
    padding: 0 0 0 20px;
    margin-top: 293px;
}
footer a{
    color: #5f6368;
    text-align: center;
    text-decoration: none;
    margin: 12px;
    font-size: .75rem;
    font-weight: 600;
}
footer a:hover{
    text-decoration:underline;
}
#main{
    margin-top: 30px;
    border-top: 0.5px solid #ffffff;
    width: 1251px;
    display:flex;
   
}
#left_second{
background-color: #ffffff;
border-top-right-radius: 20px;
border-bottom-right-radius: 20px;
}
section{
    margin: 20px;
    width:1250px;
}
#info_user p{
    
    margin:5px;
    border-bottom:1px solid #f1f3f4 ;
}
td,th {
    padding: 10px 10px;
    border: 1px solid black;
    padding:  5px;
    background-color:#a4abb0;
    color: #ffffff;
}
table{
    border-collapse: collapse;
    text-align: center;
    border-radius: 5px;
     
}
button a{
    text-decoration: none;
    color: black;
}

    </style>
</head>
<body>
<header>
        <div id="header">
            <div id="header_logo">
                <a href="#"> <img src="logo.png" alt="#">MoneyManager</a>
            </div>
            <div id="header_search">
                <input type="search" name="timkiem" placeholder="Tìm kiếm trong tài khoản của bạn"> 
                <a href="#" id="search_btn"  ><i class="fa fa-search"></i>
                </a>
            </div>
            <div id="Icon_1">
                <button><a href="#"><i class="fa fa-question-circle-o"></i></a></button>
            </div>
            <div id="Icon_2">
                <button><i class='fas fa-th'></i></button>
            </div>
                <div id="img_acc" ><img src="acc.png" alt="#"></div>
              
                <div id="open_popup">
                    <div id="open_popup_header">
                        <div id="open_popup_header_1">
                            <img src="acc.png" alt="#">
                            <div id="close_popup"><i class="fas fa-times"></i></div>
                        </div>
                        <div id="open_popup_header_2">
                        <?php 
                            if(isset($_SESSION['Name_login'])){
                               
                                echo"<h3>Xin Chào</h3>";
                                echo $_SESSION['Name_login'];
                            }
                            else{
                                echo'Xin đăng nhập </br>';
                                echo'Email';
                            }
                            ?>
                            <!-- <h3>Chào bạn</h3> -->
                        </div>
                        <div id="open_popup_header_3"></div>
                        <div id="open_popup_header_4">
                        <?php
                        if(isset($_SESSION['Name_login'])){ 
                            
                            require 'conn_page.php'; //kết nối database

                            mysqli_set_charset($conn,'UTF8');
                           
                            
                           $sql = "SELECT * from users where Name_login  = '{$_SESSION['Name_login']}'";
                           $result = $conn->query($sql);
                           if($result ->num_rows > 0){
                               $row = $result->fetch_assoc();

                               $pos = $row["position"];
                            if($pos == 'admin'){
                                 echo '<a href="5.0_page_admin.php"> Quản lý tài khoản của bạn </a>';
                            }
                            else{
                                echo '<a href="#"> Quản lý tài khoản của bạn </a>';
                            }
                         }

                         }
                        ?>
                            <!-- <a href="#"> Quản lý tài khoản của bạn </a>  -->
                        </div>
                    </div>
                    <div id="open_popup_body">
                        <?php
                        if(!isset($_SESSION['Name_login'])){
                        echo'<a href="3.0_signup.php">
                        <div id="body_in"> 
                        <i class="fas fa-user-plus"></i> 
                        Đăng kí tài khoản
                        </div>
                        </a>';
                        }
                        ?>

                        <!-- <div>
                            <a href="#"><div id="body_in"> <i class="fas fa-user-plus"></i> Thêm một tài khoản khác</div></a>
                        </div> -->
                        <?php
                        if(isset($_SESSION['Name_login'])){    
                            echo '<div id="log_out">
                                        <a href="LogOutPage.php">Đăng xuất tài khoản của bạn</a>
                                    </div>';
                        }
                         ?>
                        <!-- <div id="log_out">
                            <a href="LogOutPage.php">Đăng xuất tài khoản của bạn</a>
                        </div> -->
                    </div>
                    <div id="open_popup_footer">
                        <div></div>
                        <a href="#">Quyền riêng tư</a>
                        <div></div>
                        <a href="#">Điều khoản dịch vụ </a>
                    </div>
                </div>
            
    </header>
    <div id="left">
        
        <nav>
            <ul>
                <a href="8.0_page_infor.php"><li id="left_first"><i class='fab fa-wpforms'></i>Thông tin cá nhân</li></a>
                <a href="#"><li id="left_second"><i class='fa fa-cloud'></i>Dữ liệu và Sao lưu</li></a>
                <a href="10.0_wallet.php"><li><i class='fa fa-expeditedssl'></i>Bảo mật</li></a></li>
                <a href="#"><li><i class='fas fa-users'></i>Mọi người và chia sẻ</li></a>
                <a href="10.0_wallet.php"><li><i class='fas fa-money-check'></i>Thanh toán và đăng ký</li></a>
            </ul>
        </nav>
        <footer>
            <a href="">Điều Khoản</a>
            <a href="10.0_wallet.php">Trợ Giúp</a>
            <a href="">Giới Thiệu</a>
            <a href="">Khác</a>
        </footer>
    </div>
    <div id="main">
        <section>
        <h1>Admin:</h1>
    <?php
    
            $sql = "SELECT * FROM infor_user,users where users.ID = infor_user.id_users ";

            $result = $conn->query($sql);

      if ($result ->num_rows > 0){
          echo"
          <form methor='get' action=''>
          <table  border='1' width=50% >
              <caption> <b> Bảng thông tin người dùng </caption>
              <tr style= 'background-color:rgb(255,160,122)'>
                <th>Check</th>
                <th >ID</th>
                <th >Name_login</th>
                <th >Pass</th>
                <th >Full_name</th>
                <th >ID_card</th>
                <th >ID_infor</th>
                <th >ID_user</th>
                <th >Telephone_number</th>
                <th >Mail</th>
                <th >Position</th>
              </tr>";
    
          while($row = $result ->fetch_assoc())
          {
            echo "
            <tr>
            <td><input type='checkbox' name='checkbox[]' value='{$row ['ID']}'></td>
              <td> ".$row['ID']."</td>
              <td >".$row['Name_login']."</td>
              <td >".$row['pass_user']."</td>
              <td >".$row['fullName']."</td>
              <td >".$row['ID_card']."</td>
              <td >".$row['id_infor']."</td>
              <td >".$row['id_users']."</td>
              <td >".$row['telephone_number']."</td>
              <td >".$row['email']."</td>
              <td >".$row['position']."</td>
            </tr>";
          }
          echo"<input type='submit' name='delete' value='Xóa tài khoản '>
               <button><a href='9.0_page_search.php'>Tìm kiếm</a></button>
          </form>";
        }
    
  ?>              
  <?php
    if(isset($_GET['delete']))
    {
        if(isset($_GET['checkbox']))
           {
               $chkarr = $_GET['checkbox'];
               foreach($chkarr as $id); // vòng lập for xét từng phần
               {
                   $sql ="DELETE FROM infor_user WHERE id_users = '$id'";
                   $result = $conn->query($sql);
                  if($result==True){
                      $sql1 = "DELETE FROM users WHERE ID = '$id'";
                      $result1  = $conn->query($sql1);
                      if($result1 != True){
                          echo"$conn->error";
                      }
                  }else{
                      echo"đã xóa thành công";
                  }
                //   header("location:page_admin.php");
               }
           }
    }
    ?>
        </section>
    </div>
</body>
</html>