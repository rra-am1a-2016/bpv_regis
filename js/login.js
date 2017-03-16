$(document).ready(function () {
   var btn_login = document.getElementById("btn_login");

   var xhr = new XMLHttpRequest();

   xhr.onreadystatechange = function () {
      alert(xhr.status + " | " + xhr.readyState );
      if ( xhr.status == 200 && xhr.readyState == 4) {
         alert(xhr.responseText);
      }
   }

   btn_login.onclick =  function () {
      var stdNumber = document.getElementById("inputStdNumber").value;
      var password = document.getElementById("inputPassword").value;
      
      xhr.open("GET", "login_form_date.php?stdNumber=" + stdNumber + "&password=" + password, true);
      xhr.send()
      return false;
   }
});