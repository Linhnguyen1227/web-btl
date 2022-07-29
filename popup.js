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