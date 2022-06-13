
function hashchange(){

    
    $('a.nav-link').removeClass("active");
        $('.os-padding a.nav-link[href="' + location.hash + '"]').addClass("active");
        // $('li.nav-item.active').attr("class","nav-item");
       
      
  }

listen('hash-change',hashchange);