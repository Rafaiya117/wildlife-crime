route['prayer'] = function (){

    // $("#collection").click(function() {
    //     window.location.reload();
    // });
    };

    route['action-prayer'] = function(){


        function prayer_validation(tmp_prayer){
        
             console.log(tmp_prayer, tmp_prayer.prayer_note.length);
             
             if(tmp_prayer.prayer_note.length < 20){
                  console.error(' not accepted');
                  return false;
             }
             // tmp_withness['witness_name']
        
             // return false;
        
             return true;
        
        }
        
        
             if(_.isUndefined(user_input.input_prayer)){
                  user_input.input_prayer = [];
             }
        
             var tmp_prayer = take_all_inputs_value();
        
             console.log('', tmp_prayer);
             if(_.isEmpty(tmp_prayer) === false && prayer_validation(tmp_prayer)=== true){
                  user_input.input_prayer.push(tmp_prayer);
             }else{
                  console.error('some error');
             }
             
             // goto #input-disposal-information
             // window.location.hash = 'input-disposal-information';
             window.location.hash = 'prayer';
        
        }; 