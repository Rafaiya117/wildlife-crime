route.test1 = (par)=>{
    console.log('boom.. boom 1 ');
};

route.test2 = (par)=>{
    console.log('boom.. boom 2 ');
};


route.pickup = (par)=>{
    console.log('pickup ');
};




$(document).ready(function(){
    listen('d_species', hash_uri_mapping);


    
});