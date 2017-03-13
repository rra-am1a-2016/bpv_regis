// Maak een handvat op de button
var btn = document.getElementById("btn_regis");

// Maak xmlhttprequest object
var xmlHttp = new XMLHttpRequest();

// Check of er antwoord is gekomen van de server
xmlHttp.onreadystatechange = function () {    
    //alert(xmlHttp.status + " | " + xmlHttp.readyState);
    // Als de pagina is gevonden en de status is goed...
    if (xmlHttp.status == 200 && xmlHttp.readyState == 4) {
      // Geef dan de tekst op data.php weer
      //alert("Responsetekst: " + xmlHttp.responseText);
      if ( xmlHttp.responseText.trim() == "succes") {
        // Toon de groene alert
        document.getElementById("alert_is_activated").style.display = "block";
        
        // Stuur mij door na 4 seconden.
        setTimeout(function () {
          window.location.href = "index.php?content=login";
        }, 4000);
      }
      
    }         
};  

btn.onclick = function () {
  // Pak het juiste id van het input tag
  var stdNumber = document.getElementById("leerlingnummer").value;
  var url = "data.php?stdNumber=" + stdNumber;
  console.log(url);
  xmlHttp.open("GET", url, true);
  xmlHttp.send();
  return false;
}
