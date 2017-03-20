$(document).ready(function () {
   var btn_login = document.getElementById("btn_login");

   var xhr = new XMLHttpRequest();

   xhr.onreadystatechange = function () {
      alert(xhr.status + " | " + xhr.readyState );
      if ( xhr.status == 200 && xhr.readyState == 4) {
         alert(xhr.responseText);
         if (xhr.responseText.trim() == "student") {
            window.location.href = "index.php?content=student_home";
         } else if ( xhr.responseText == "error_id") {
            document.getElementById("error_id").style.display = "block";
            setTimeout(function () {
             window.location.href = "index.php?content=login";               
            }, 3000);
         } else if ( xhr.responseText == "error_pw") {
            document.getElementById("error_pw").style.display = "block";
            setTimeout(function () {
             window.location.href = "index.php?content=login";               
            }, 3000);
         }
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