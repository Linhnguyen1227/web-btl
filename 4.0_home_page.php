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
     <script src="popup.js"></script>
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
    border:none;
  }
#close_popup{
    position: relative;
    bottom: 100px;
    left: 311px;
    width: 20px;
    cursor: pointer;
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
    height: 650px;
    width: 1238px;
    background-color: #dadce0;
    float: left;
    margin-top: 30px;
    border-top: 0.5px solid #ffffff;
    overflow-y: scroll;
}
#main  #main_1{
    width: 900px;
}
#main  #main_1 #main_header{
    height: 220px;
    width: 100%;
    text-align: center;
    margin: 30px 0 30px 0;
}
#main #main_1 #main_header #img_main a img{
    height: 97px;
    width: 97px;

}
#main #main_1 #main_header #inTro h2{
    margin: 15px 0 15px 0;
    font-size: 30px;
    font-weight: 500;
}
section{
    height: 982px;
    width: 100%;
}
section #main_top{
    height: 520px;
    width: 100%;
}
section #main_top #col_1{
    height: 258px;
    width: 50%;
    float: left;
}
#tab_1{
    height: 238px;
    width: auto;
    margin: 18px 14px 0 20px;
    background-color: #dadce0;
   
    border: 1px solid #ffffff;
    border-radius: 10px;
}
 #tab_1:hover{
     background-color: #f1f3f4;
 }
#tab_2{
    height: 238px;
 }
 #tab_2 a{
    text-decoration: none;
 }
#tab_Top{
    margin: 15px 0px 13px 15px;
    width: 53%;
    color: #322b2b;
}
#tab_Top h3{
    margin: 10px;
}
#tab_Top p{
    margin: 10px;
}
#tab_bt{
    text-align: center;
    width: 127px;
    height: 93px;
    margin: -113px 0px 0px 259px;
}
#ipet_1{
    border: 0.5px solid #ffffff;
    list-style-type: none;
    margin: 28px 0 0 0;
}
#ipet_2{
    border: 0.5px solid #ffffff;
    list-style-type: none;
    margin: 43px 0 0 0;
}
#ipet_3{
    border: 0.5px solid #ffffff;
    list-style-type: none;
    margin: 68px 0 0 0;
}
#ipet_4{
    border: 0.5px solid #ffffff;
    list-style-type: none;
    margin: 47px 0 0 0;
}
#main_bt{
    margin-left: 23px;
    line-height: 57px;
    color: #1a73e8;
}
#m_bt{
    width: 100%;
    height: auto;
    margin-top: 20px;
}
#m_bt #col_2{
    margin: 0px 0px 0px 20px;
    width: 96%;
    border: 1px solid #ffffff;
    border-radius: 10px;
}
#m_bt #col_2 #pub_1 a{
    text-decoration: none;
    line-height: 58px;
    border-bottom: 1px solid #ffffff;
}
#m_bt #col_2 #pub_1 h3{
    font-weight: 400;
    color: #322b2b;
    font-size: 17px;
    border-bottom: 1px solid #ffffff;
}
#m_bt #col_2 #pub_1 a i{
    margin: 0 19px 0 0;
    font-size: 21px;
}
#m_bt #col_2 h3{
    height: 58px;
    margin-left: 25px;
}
#m_bt #col_2 #pub h3{
    margin-top: 10px;
}
#m_bt #col_2 #pub_1 h3:hover{
    background-color: #f1f3f4;
}
section #btm{
    margin: 48px 28px 0 44px;
}
section #btm h2{
    font-weight: 400;
    font-size: .875rem;
    padding: 0px;
    margin-top: 20px;
}
a{
    text-decoration: none;
    color: #1a73e8;
}
</style>
    <title>Document</title>
</head>
<body>
<header>
        <div id="header">
            <div id="header_logo">
                <a href="4.0_home_page.php"> <img src="logo.png" alt="#">MoneyManager</a>
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
                        <div id='open_popup_header_2'>
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
                            </div>
                        <div id="open_popup_header_4">     
                        <?php //--------------------------------------phân quyền admin
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
                            <a href="#"><div id="body_in"> <i class="fas fa-user-plus"></i></i> Thêm một tài khoản khác</div></a>
                        </div> -->
                         <?php
                        if(isset($_SESSION['Name_login'])){

                            echo '<div id="log_out">
                                        <a href="LogOutPage.php">Đăng xuất tài khoản của bạn</a>
                                    </div>';
                        }
                        if(!isset($_SESSION['Name_login'])){

                            echo '<div id="log_out" disabled>
                                        <a href="2.0_login.php">Đăng nhập </a>
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
                <?php //--------------------------------------phân quyền admin
                            if(isset($_SESSION['Name_login'])){ 
                                
                                require 'conn_page.php'; //kết nối database

                                mysqli_set_charset($conn,'UTF8');
                            
                                
                                $sql = "SELECT * from users where Name_login  = '{$_SESSION['Name_login']}'";
                                $result = $conn->query($sql);
                                if($result ->num_rows > 0){
                                    $row = $result->fetch_assoc();

                                    $pos = $row["position"];
                                    if($pos == 'admin'){
                                        echo ' <a href="5.0_page_admin.php"><li id="left_second"><i class="fa fa-cloud"></i>Dữ liệu và Sao lưu</li></a>';
                                    }
                                    else{
                                        echo ' <a href="#"><li id="left_second"><i class="fa fa-cloud"></i>Dữ liệu và Sao lưu</li></a>';
                                    }
                                }

                            }
                        ?>
                <!-- <a href="page_admin.php"><li id="left_second"><i class='fa fa-cloud'></i>Dữ liệu và Sao lưu</li></a> -->
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
        <div id="main_1">
            <div id="main_header">
                <div id="img_main">
                    <a href="#"><img src="acc.png" alt="#"></a>
                </div>
                <div id="inTro">
                    <h2>Xin chào bạn</h2>
                <p>Quản lý thông tin, quyền riêng tư và bảo mật để tài khoản hoạt động hiệu quả cho bạn.<a href="#">Tìm hiểu thêm</a></p>
                </div>
            </div>
            <section>
                <div id="main_top">
                    <div id="col_1">
                        <div id="tab_1">
                            <div id="tab_2">
                                <a href="#">
                                    <div id="tab_Top">
                                        <h3>Quyền riêng tư và cá nhân hóa</h3>
                                        <p>Xem dữ liệu trong Tài khoản của bạn và chọn hoạt động sẽ được lưu để cá nhân hóa trải nghiệm của bạn</p>
                                    </div>
                                    <div id="tab_bt">
                                        <img src="https://www.gstatic.com/identity/boq/accountsettingsmobile/dataandpersonalization_icon_96x96_cdb6dff2e31ed6745ece4662231bfd48.png" alt="#">
                                    </div>
                                    <div>
                                        <li id="ipet_1" role="presentation"></li>
                                    </div>
                                    <div id="main_bt">
                                        Quản lý dữ liệu và quyền riêng tư của bạn      
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>     
                    <div id="col_1">
                        <div id="tab_1">
                            <div id="tab_2">
                                <a href="#">
                                    <div id="tab_Top">
                                        <h3>Chúng tôi có các mục đề xuất bảo mật cho bạn</h3>
                                        <p>Công cụ Kiểm tra bảo mật tìm thấy một số hành động đề xuất cho bạn</p>
                                    </div>
                                    <div id="tab_bt">
                                        <img src="https://www.gstatic.com/identity/boq/accountsettingsmobile/securitycheckup_yellow_96x96_8a13298be6a17ecf51cdf9baad9c74f1.png" alt="#">
                                    </div>
                                    <div>
                                        <li id="ipet_2" role="presentation"></li>
                                    </div>
                                    <div id="main_bt">
                                        Bảo vệ tài khoản của bạn      
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>   
                    <div id="col_1">
                        <div id="tab_1">
                            <div id="tab_2">
                                <a href="#">
                                    <div id="tab_Top">
                                        <h3>Bộ nhớ tài khoản</h3>
                                        <p>Dữ liệu tài khoản của bạn được chia sẻ trên các dịch vụ của chúng tôi nhằm giúp trải nghiệm tốt hơn</p>
                                    </div>
                                    <div id="tab_bt">
                                        <img src="https://www.gstatic.com/identity/boq/accountsettingsmobile/googleonestorage_spot_72x72_33aff7baa37268ce05827c5c1d6752f0.png" alt="#">
                                    </div>
                                    <div>
                                        <li id="ipet_3" role="presentation"></li>
                                    </div>
                                    <div id="main_bt">
                                        Quản lý bộ nhớ và danh sách ghi nhớ của bạn      
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> 
                    <div id="col_1">
                        <div id="tab_1">
                            <div id="tab_2">
                                <a href="#">
                                    <div id="tab_Top">
                                        <h3>Thực hiện Kiểm tra quyền riêng tư</h3>
                                        <p>Hướng dẫn từng bước này giúp bạn chọn các tùy chọn cài đặt quyền riêng tư phù hợp với mình</p>
                                    </div>
                                    <div id="tab_bt">
                                        <img src="https://www.gstatic.com/identity/boq/accountsettingsmobile/privacycheckup_initial_96x96_5f16cdca1edf5b4ceeeda2fc293fd5a0.png" alt="#">
                                    </div>
                                    <div>
                                        <li id="ipet_4" role="presentation"></li>
                                    </div>
                                    <div id="main_bt">
                                        Bắt đầu nào     
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div id="m_bt">
                    <div id="col_2">
                        <div id="pub">
                            <h3>Bạn đang tìm thông tin khác?</h3>
                        </div>
                        <div id="pub_1">
                            <a href="#"><h3><i class='fas fa-user-circle'></i>Tìm kiếm trong tài khoản của bạn</h3></a>
                            <a href="#"><h3><i class='fas fa-user-circle'></i>Xem các tùy chọn trợ giúp</h3></a>
                            <a href="#"><h3><i class='fas fa-user-circle'></i>Phản hồi</h3></a>
                        </div>
                    </div>
                </div>
                <div id="btm">
                <h2>
                    Chỉ bạn mới thấy được các tùy chọn cài đặt của mình. Có thể bạn cũng nên xem lại các tùy chọn cài đặt của mình, Tìm kiếm hoặc các dịch vụ mà bạn sử dụng thường xuyên nhất.Chúng tôi giữ bí mật và bảo vệ an toàn dữ liệu của bạn.
                    <a href="#">Tìm hiểu thêm</a>
                </h2>
                </div>
            </section>
</body>
</html>