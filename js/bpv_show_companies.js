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
        var data = JSON.parse(xhr.responseText);
        //console.log(data);
        var message = data.shift();
        //console.log(message);
        var fieldnames = ["nameCompany", "address", "city", "nameContact", "mobilePhoneNumber", "urlCompany"];
        console.log(fieldnames[0]);
        var tbody = document.getElementById("bpv_records_data");
        if ( message == "succes_records_found") {
           for ( var i=0; i<data.length; i++) {
              var tr = document.createElement("tr");
              for ( var j=0; j < fieldnames.length; j++) {
                 var td = document.createElement("td");
                 var text = document.createTextNode(data[i][fieldnames[j]]);
                 td.appendChild(text);
                 tr.appendChild(td);
                 console.log(data);
              }
              tbody.appendChild(tr);
           }           
        } else if ( message == "no_records_found") {
           
        }

     }
  }

  xhr.open("POST", "bpv_show_companies_data.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
});