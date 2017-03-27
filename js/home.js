$(document).ready(function () {

   $("#myCarousel").carousel({"interval": 1000,
                              "pause": false,
                              "wrap": true });

   //$("#myCarousel").css("border", "20px solid black");
   $("#myCarousel").click(function () {
      //alert("Hoi");
      $(this).carousel("prev");
   });
});