$(document).ready(function () {

   $("#myCarousel").carousel({"interval": false,
                              "pause": false,
                              "wrap": true });

   //$("#myCarousel").css("border", "20px solid black");
   $("#myCarousel").click(function () {
      //alert("Hoi");
      $(this).carousel("prev");
   });


   $("[data-toggle='tooltip']").tooltip({"delay": {"show": 100, "hide": 100},
                                         "html": true,
                                         "title": "Veel plezier met gebruiken van <b>deze</b> site" });  //css({"border": "20px solid pink"});
});