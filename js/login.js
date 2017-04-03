$(document).ready(function () {
   var btn_login = document.getElementById("btn_login");

   var xhr = new XMLHttpRequest();

   xhr.onreadystatechange = function () {
      //alert(xhr.status + " | " + xhr.readyState );
      if ( xhr.status == 200 && xhr.readyState == 4) {
         //alert(xhr.responseText);
         if (xhr.responseText.trim() == "student") {
            window.location.href = "index.php?content=student_home";
         } else if (xhr.responseText.trim() == "admin") {
            window.location.href = "index.php?content=admin_home";            
         } else if (xhr.responseText.trim() == "root") {
            window.location.href = "index.php?content=root_home";            
         } else if (xhr.responseText.trim() == "docent") {
            window.location.href = "index.php?content=docent_home";            
         } else if (xhr.responseText.trim() == "bpvco") {
            window.location.href = "index.php?content=bpvco_home";            
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
         } else if ( xhr.responseText == "error_activate") {
            document.getElementById("error_activate").style.display = "block";
            setTimeout(function () {
             window.location.href = "index.php?content=login";               
            }, 3000);
         }
      }
   }

   btn_login.onclick =  function () {
      var stdNumber = document.getElementById("inputStdNumber").value;
      var password = document.getElementById("inputPassword").value;
      
      xhr.open("GET", "login_form_data.php?stdNumber=" + stdNumber + "&password=" + password, true);
      xhr.send()
      return false;
   }

   $("[data-toggle='popover']").popover({"trigger": "hover",
                                         "title": "Inloginformatie",
                                         "content": "<span style='font-weight: bold; font-style:italic;'>Studenten:</span> log in met je studentnummer<br>" +
                                                    "<span style='font-weight: bold; font-style:italic;'>Docenten:</span> log in met je lettercode afkorting",
                                         "html": true});
});