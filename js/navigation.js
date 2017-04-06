$(document).ready(function () {

   xhrNav = new XMLHttpRequest();
   xhrNav.onreadystatechange = function () {
      if ( xhrNav.status == 200 && xhrNav.readyState == 4) {
         //alert(xhrNav.responseText);
         $("#navbar [href='./index.php?content=" + xhrNav.responseText + "']").css("background-color", "rgb(238, 238, 238)");
         
      }
   }

   xhrNav.open("POST", "navigation.php", true);
   xhrNav.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhrNav.send();
});