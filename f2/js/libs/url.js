var route = {};
function hash_uri_mapping(){
    var hash = decodeURI(location.hash.substring(1));
    
    fire('hash-change', hash);

    if(route.hasOwnProperty(hash) === true){
        route[hash](hash.split('/'));
        
        return;
    }

    var contrl = hash.split('/')[0];
    if(route.hasOwnProperty(contrl) === true){
        route[contrl](hash.split('/'));
        return;
    }
}
window.addEventListener('hashchange', hash_uri_mapping, false);

$(document).ready(function(){


    
    listen('hash-change',function(e, hash){
        if(_.isEmpty(hash)){
            window.location.hash = 'dashboard';
        }
        
    });
    hash_uri_mapping();  
    
});
