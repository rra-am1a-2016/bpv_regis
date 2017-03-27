$(document).ready(function () {
   var btn = document.getElementById("btn_bpv");

   var xhr = new XMLHttpRequest();

   xhr.onreadystatechange = function () {
      alert(xhr.status +  " | " + xhr.readyState);
      if (xhr.status == 200 && xhr.readyState == 4) {
         alert(xhr.responseText);
         if (xhr.responseText == "succes_record_saved") {
            document.getElementById("succes_record_saved").style.display = "block";
            setTimeout(function () {
               window.location.href = "index.php?content=home";
            }, 3000);
         } else if (xhr.responseText == "error_record_not_saved") {
            document.getElementById("error_record_not_saved").style.display = "block";
            setTimeout(function () {
               window.location.href = "index.php?content=home";
            }, 3000);            
         } else if (xhr.responseText == "error_company_exists") {
            document.getElementById("error_company_exists").style.display = "block";
            setTimeout(function () {
               window.location.href = "index.php?content=bpv_record";
            }, 3000);            
         }         
      }
   }

   btn.onclick = function () {
      var formData = {"nameCompany": document.getElementById("nameCompany").value,
                      "phoneNumberCompany": document.getElementById("phoneNumberCompany").value,
                      "nameContact": document.getElementById("nameContact").value,
                      "mobilePhoneNumber": document.getElementById("mobilePhoneNumber").value,
                      "address": document.getElementById("address").value,
                      "addressNumber": document.getElementById("addressNumber").value,
                      "city": document.getElementById("city").value,
                      "postalCode": document.getElementById("postalCode").value,
                      "urlCompany": document.getElementById("urlCompany").value,
                      "emailContact": document.getElementById("emailContact").value,
                      "description": document.getElementById("description").value};

      var sendJSONData = JSON.stringify(formData);

      xhr.open("GET", "bpv_record_data.php?jsonstr=" + sendJSONData, true);
      xhr.send();

      return false;
   };





});