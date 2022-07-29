document.addEventListener('DOMContentLoaded',function(){
//------------------------------------------------------điền đầy đủ kí tự của name hoặc bỏ trống thì thông báo

    document.querySelector('#update_name').onchange = function(){
        if(document.querySelector('#update_name').value.length > 0 )
            {
                document.querySelector("#submit_update").disabled = false;
            }
            else{
                document.querySelector("#submit_update").disabled = true;
                alert(`Vui lòng không được bỏ trống tên của bạn`);
            }
    }
//----------------------------------------------------điền đầy đủ kí tự của card hoặc bỏ trống thì thông báo
    document.querySelector('#update_card').onchange = function(){
        if(document.querySelector('#update_card').value.length > 11 )
            {
                document.querySelector("#submit_update").disabled = false;
            }
            else{
                document.querySelector("#submit_update").disabled = true;
                alert(`Bạn phải điền đủ 12 số căn cước của bạn`);
            }
    }
//----------------------------------------------------điền đầy đủ kí tự của phone number hoặc bỏ trống thì thông báo
    document.querySelector('#update_phone').onchange = function(){
        if(document.querySelector('#update_phone').value.length > 8 )
            {
                document.querySelector("#submit_update").disabled = false;
            }
            else{
                document.querySelector("#submit_update").disabled = true;
                alert(`Vui lòng điền đủ số điện thoại`);
            }
    }
//---------------------------------------------------
    document.querySelector('#update_mail').onchange = function(){
        if(document.querySelector('#update_mail').value.length > 0 )
            {
                document.querySelector("#submit_update").disabled = false;
            }
            else{
                document.querySelector("#submit_update").disabled = true;
                alert(`Vui lòng không được bỏ trống email  của bạn`);
            }
    }
});