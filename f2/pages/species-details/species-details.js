route['species-details'] = function (){

function modal2(){
    var selectvalue = $('input[name=optradio]:checked','#modal2'.val());
    if(selectvalue=="Yes"){
    
    window.open('https://wcs.softlh.com/wildlife-crime/f2/#modal2','_self');
    return true;
    
    }
    
    return false;
    
    };
};