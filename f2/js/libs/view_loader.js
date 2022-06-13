


function viewLoader(event, page_name){
    // console.log('view loader!!!', e, page_name);
    if(_.contains(template_list, page_name)){
        
        var content = $('#pg_'+page_name).html();
        // console.log('#pg_'+page_name,  ' pachice', $tmp);
        $('#js_main_container').html(content);

    }


}






listen('hash-change', viewLoader);



