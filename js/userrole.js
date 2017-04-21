// Maak een nieuw XMLHttpRequest object
var xhr = new XMLHttpRequest();

// Wacht tot de pagina geladen is...
$(document).ready(function () {

// Koppel een luisterevent toe aan het xhr-object, laat deze een anonieme functie triggeren
  xhr.onreadystatechange = function () {

     // Als de readystate gelijk is aan 4 en de status 200 dan krijgen we een responsetext
     if ( xhr.readyState == 4 && xhr.status == 200) {
        // We zetten de JSON-string responseText om naar een Javascript object.
        var data = JSON.parse(xhr.responseText);
        // We halen de statustekst uit het array met shift(). Deze method haalt het eerste element uit het array
        var message = data.shift();
        // We geven op welke velden we willen weergeven in de tabel.
        var fieldnames = ["id", "firstName", "infix", "lastName", "activate"];
       // We selecteren de table body op basis van zijn id
        var tbody = document.getElementById("bpv_records_data");
        // Als de statustekst van de pagina succes_records_found is dan...
        if ( message == "succes_records_found") {
           // Doorlopen we het data object. Dit object bestaat weer uit andere objecten.
           // Elk object bestaat uit een record uit de users database.
           for ( var i=0; i<data.length; i++) {
              // Iedere for ronde is een object (een record uit de database)
              var tr = document.createElement("tr");
              // Iedere for ronde wordt er een td gemaakt met inhoud.
              for ( var j=0; j < fieldnames.length; j++) {
                 var td = document.createElement("td");
                 var text = document.createTextNode(data[i][fieldnames[j]]);
                 td.appendChild(text);
                 tr.appendChild(td);
                 //console.log(data);
              }
              // Maak een array met alle optionteksten erin...
              var optionText = ["student", 
                                "docent", 
                                "admin", 
                                "bpvco", 
                                "root"];

              // Maak aan het einde van de rij een td...
              var td = document.createElement("td");

              // Maak een select tag...
              var select = document.createElement("select");
              select.setAttribute("class", "form-control");

              select.addEventListener("change", updateStatus);
              select.userrole = data[i].userrole;
              for (var n=0; n < optionText.length; n++) {
                  // maak een option tag..
                  var option = document.createElement("option");

                  // Voeg een attribuut value toe aan ieder option tag...
                  option.setAttribute("value", optionText[n])

                  // Als de optionvalue uit de database matched met de optionvalue die gemaakt wordt
                  // Voeg dan het attribuut selected toe...
                  if ( data[i].userrole == optionText[n] ) {
                    option.setAttribute("selected", true);
                  }

                  // Maak wat tekst voor in de option tag...
                  var text = document.createTextNode(optionText[n]);

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

  xhr.open("POST", "userrole_show_users_data.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
});

function updateStatus (evt) {
  var status = evt.target.options[evt.target.options.selectedIndex].value;
  xhr.open("POST", "bpv_show_companies_data_update.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("status=" + status + "&urlCompany=" + evt.target.urlCompany);
}