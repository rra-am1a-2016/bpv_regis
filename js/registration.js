// Maak een handvat op de button
var btn = document.getElementById("btn_regis");

// Maak xmlhttprequest object
var xmlHttp = new XMLHttpRequest();

// Check of er antwoord is gekomen van de server
xmlHttp.onreadystatechange = function () {    
    alert(xmlHttp.status + " | " + xmlHttp.readyState + xmlHttp.statusText);
    // Als de pagina is gevonden en de status is goed...
    if (xmlHttp.status == 200 && xmlHttp.readyState == 4) {
      // Geef dan de tekst op data.php weer
     // alert("Responsetekst: " + xmlHttp.responseText);
      //console.log(xmlHttp.responseText);
      var url = "http://localhost/2016-2017/am1a/Blok%203/Web/bpvregis/mail.php?stdNumber=" + xmlHttp.responseText;
      //console.log(url);
      xmlHttp.open("GET", url, true);
      xmlHttp.send();
    }         
};  

btn.onclick = function () {
  // Pak het juiste id van het input tag
  var stdNumber = document.getElementById("leerlingnummer").value;
  var url = "http://localhost/2016-2017/am1a/Blok%203/Web/bpvregis/data.php?stdNumber=" + stdNumber;
  console.log(url);
  xmlHttp.open("GET", url, true);
  xmlHttp.send();
}
