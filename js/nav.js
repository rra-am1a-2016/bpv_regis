$(document).ready(function () {
   var lis = $("[class='nav navbar-nav']").children();
   console.log(lis);
   
   $("[class='nav navbar-nav']").children().click(function () {
      alert("Hoi");
   });

   $("[class='nav navbar-nav']").children("[class='active']").css({"border": "20px solid pink"});
});