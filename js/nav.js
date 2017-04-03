$(document).ready(function () {
   // Selecter alle li in de ul
   var lis = $("[class='nav navbar-nav']").children();
   
   $("[class='nav navbar-nav']").children().click(function () {
      $("[class='nav navbar-nav']").children("[class='active']").removeClass("active");
      $(this).addClass("active");
   });
});