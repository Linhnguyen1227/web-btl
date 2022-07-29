document.addEventListener('DOMContentLoaded',function()
{
    // ----------------------------------------------------------------------------Điềm đủ ký tự => hiện Submit
    document.querySelector('#submit').disabled = true;
    document.querySelector('#submit').style.color = "#606873";
    document.querySelector('#password').style.borderBottom = "3px solid #474a59";
    document.querySelector('#password').onkeyup = function()
    {
        if(document.querySelector('#password').value.length > 0 && document.querySelector('#name').value.length > 0)
        {
            document.querySelector('#submit').disabled = false;
            document.querySelector('#submit').style.color = "#a4abb0";
            document.querySelector('#password').style.borderBottom = "3px solid #a4abb0";
        }
        else
        {
            document.querySelector('#submit').disabled = true;
            document.querySelector('#submit').style.color = "#606873";
            document.querySelector('#password').style.borderBottom = "3px solid #474a59";
        }
    }
    // ----------------------------------------------------------------------------Điền > 0 ký tự => hiện viền dưới
    document.querySelector('#name').style.borderBottom = "3px solid #474a59";
    document.querySelector('#name').onchange = function()
    {
        if(document.querySelector('#name').value.length > 0)
        {
            document.querySelector('#name').style.borderBottom = "3px solid #a4abb0";
        }
        else
        {
            document.querySelector('#name').style.borderBottom = "3px solid #474a59";
        }
    }
});
