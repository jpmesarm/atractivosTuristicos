jQuery(document).ready(function($){
    jQuery(document).scroll(function() {
            if ($(jQuery(document).scroll).scrollTop() > 650) {
                $("#menuPrincipal").addClass("bgSiteMenu");   
                $("#logotipo").addClass("logo1");   
                $("#logotipo").removeClass("logo2"); 
            }
            else {
                $("#menuPrincipal").removeClass("bgSiteMenu");
                $("#logotipo").removeClass("logo1");
                $("#logotipo").addClass("logo2");  
            }
        });
  });


