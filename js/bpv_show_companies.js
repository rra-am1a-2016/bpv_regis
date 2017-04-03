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
              // Maak een array met alle optionteksten erin...
              var optionText = ["nog geen contact", 
                                "contact gezocht", 
                                "contact bevestigd bedrijf", 
                                "uitgenodigd voor gesprek", 
                                "sollicitatiegesprek gehad", 
                                "afgewezen", 
                                "aangenomen"];

              // Maak aan het einde van de rij een td...
              var td = document.createElement("td");

              // Maak een select tag...
              var select = document.createElement("select");

              for (var j=0; j < optionText.length; j++) {
                  // maak een option tag..
                  var option = document.createElement("option");

                  // Maak wat tekst voor in de option tag...
                  var text = document.createTextNode(optionText[j]);

                  // Voeg tekst toe in de option...
                  option.appendChild(text);

                  // Stop de option tag in de select tag...
                  select.appendChild(option);
              }

              // Stop de td in de select tag...
              td.appendChild(select);
              
              // Voeg de td tag toe aan de tr...
              tr.appendChild(td);

              // Voeg de tr toe aan de table body...
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