document.addEventListener('DOMContentLoaded',function(){
     function demgiamdan(){
         soGiay --;
         if(soGiay>0){
             document.querySelector('#soGiay').innerHTML = soGiay
         }
         else{
             document.location="4.0_home_page.php"
         }
     }
});