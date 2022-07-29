document.addEventListener('DOMContentLoaded',function()
{
    // ----------------------------------------------------------------------------Điền > 0 ký tự => hiện viền dưới của username input
    document.querySelector('#username').style.borderBottom = "3px solid #474a59";
    document.querySelector('#username').onchange = function()
    {
        if(document.querySelector('#username').value.length > 5) 
        {
            document.querySelector('#username').style.borderBottom = "3px solid #a4abb0";
        }
        else
        {
            document.querySelector('#username').style.borderBottom = "3px solid #474a59";
        }
    }
     // ----------------------------------------------------------------------------Điền > 0 ký tự => hiện viền dưới của full name
    document.querySelector('#fullname').style.borderBottom = "3px solid #474a59";
    document.querySelector('#fullname').onchange = function()
    {
        if(document.querySelector('#fullname').value.length > 10)
        {
            document.querySelector('#fullname').style.borderBottom = "3px solid #a4abb0";
        }
        else
        {
            document.querySelector('#fullname').style.borderBottom = "3px solid #474a59";
        }
    }
    // ----------------------------------------------------------------------------Điền > 0 ký tự => hiện viền dưới của Age input
    document.querySelector('#phone').style.borderBottom = "3px solid #474a59";
    document.querySelector('#phone').onchange = function()
    {
        if(document.querySelector('#phone').value.length > 8) 
        {
            document.querySelector('#phone').style.borderBottom = "3px solid #a4abb0";
        }
        else
        {
            document.querySelector('#phone').style.borderBottom = "3px solid #474a59";
            alert(`Số điện thoại phải có 9 chữ số`);
        }
    }
    // ----------------------------------------------------------------------------Điền > 0 ký tự => hiện viền dưới của email input
    document.querySelector('#email').style.borderBottom = "3px solid #474a59";
    document.querySelector('#email').onchange = function()
    {
        if(document.querySelector('#email').value.length > 15) 
        {
            document.querySelector('#email').style.borderBottom = "3px solid #a4abb0";
        }
        else
        {
            document.querySelector('#email').style.borderBottom = "3px solid #474a59";
        }
    }
    // -----------------------------------------------------Điềm đủ ký tự trong password => hiện border của ID_card
    document.querySelector('#card').style.borderBottom = "3px solid #474a59";
    document.querySelector('#card').onchange = function()
    {
        if(document.querySelector('#card').value.length > 11) 
        {
            document.querySelector('#card').style.borderBottom = "3px solid #a4abb0";
        }
        else
        {
            document.querySelector('#card').style.borderBottom = "3px solid #474a59";
            alert(`Card phải có 12 chữ số`);
        }
    }

    // -----------------------------------------------------Điềm đủ ký tự trong password => hiện border của password
    
    document.querySelector('#password').style.borderBottom = "3px solid #474a59";
    
    document.querySelector('#password').onchange = function()
    {
        if(document.querySelector('#password').value.length < 4)
        {
            document.querySelector('#password').style.borderBottom = "3px solid #a4abb0";
            alert("Mật khẩu của bạn phải dài tối thiểu 4 ký tự!");
            document.querySelector('#password').value = "";            
        }
        if(document.querySelector('#password').value.length == 0)
        {
            document.querySelector('#submit').disabled = true;
            document.querySelector('#submit').style.color = "#606873";
            document.querySelector('#password').style.borderBottom = "3px solid #474a59";
        }
        else
        {
            document.querySelector('#password').style.borderBottom = "3px solid #a4abb0";
        }
    }
    // -----------------------------------------------------Điềm đủ ký tự trong password => hiện Submit & border của password2
    document.querySelector('#submit').disabled = true;
    document.querySelector('#submit').style.color = "#606873";
    document.querySelector('#re_password').style.borderBottom = "3px solid #474a59";
    
    document.querySelector('#re_password').onchange = function()
    {
        if(document.querySelector('#password').value != document.querySelector('#re_password').value)
        {
            alert("2 mật khẩu không trùng khớp");//Thông báo error
            document.querySelector('#re_password').value = "";
        }
        if(document.querySelector('#re_password').value.length == 0)
        {
            document.querySelector('#re_password').style.borderBottom = "3px solid #474a59";//giữ nguyên màu viền dưới
            document.querySelector('#submit').disabled = true;
            document.querySelector('#submit').style.color = "#606873";
        }
        else
        {
            document.querySelector('#submit').disabled = false;//Submit on
            document.querySelector('#submit').style.color = "#a4abb0";//Đổi màu submit
            document.querySelector('#password2').style.borderBottom = "3px solid #a4abb0";//Đổi màu viền dưới
        }
    }
});
