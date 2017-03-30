$(document).ready(function () {
   //alert("Hoi dit is een test");


   /* maak een xhr object
      xhr.open()
      xhr.send()
      xhr.onreadystatechange 
   */

  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
     if ( xhr.readyState == 4 && xhr.status == 200) {
        //alert(xhr.responseText);
     }
  }

  xhr.open("POST", "bpv_show_companies_data.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
});