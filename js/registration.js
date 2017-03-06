var btn = document.getElementById("btn_regis");
    
    btn.onclick = function () {
      var stdNumber = document.getElementById("leerlingnummer").value;
      ///console.log("Leerlingnummer: " + llnumber);
      alert("Leerlingnummer: " + stdNumber);
      // Opdracht maak een xmlhttprequest object. Maak contact met data.php. 
      // gebruik de methods send en open.
      var xmlHttp = new XMLHttpRequest();

      xmlHttp.onreadystatechange = function () {
         if (xmlHttp.status == 200 && xmlHttp.readyState == 4) {
            alert(xmlHttp.responseText);
            console.log(xmlHttp.responseText);
         }         
      };

      xmlHttp.open("GET", "./data.php?stdNumber=" + stdNumber, true);
      xmlHttp.send();
}