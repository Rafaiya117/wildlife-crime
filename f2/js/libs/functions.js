function fire(event_name, data){
    $(window).trigger(event_name, data);
}

function listen(event_name, callback){
    $(window).on(event_name, callback);
}

var user_input = {};

function take_all_inputs_value(){
     var input_json = {};

     $('#js_main_container input').each(function(id, ele){
          input_json[ele.id] = $(ele).val();
     });

     $('#js_main_container select').each(function(id, ele){
          input_json[ele.id] = $(ele).val();
     });

     $('#js_main_container input[type=checkbox]').each(function(id, ele){
          
          input_json[ele.id] = $(ele).prop('checked');
     });

     $('#js_main_container textarea').each(function(id, ele){
          input_json[ele.id] = $(ele).val();
     });

     return input_json;

}