       
$(function() {
    "use strict";

	   //pie
            $("span.pie").peity("pie",{
                width: 120,
                height: 120 
            });
        
        //donut

          $("span.donut").peity("donut",{
                width: 120,
                height: 120 
            });

         // line
         $('.peity-line').each(function() {
            $(this).peity("line", $(this).data());
         });

         // bar
          $('.peity-bar').each(function() {
            $(this).peity("bar", $(this).data());
         });
         
   });