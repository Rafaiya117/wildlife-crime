route['input-offender-profile'] = function (){

    // $("#offender").click(function() {
    //     window.location.reload();
    // });
    };

    route['action-input-offender-profile'] = function(){


        function offender_validation(tmp_offender){
        
             console.log(tmp_offender, tmp_offender.offender_name.length);
             
             if(tmp_offender.offender_name.length < 4){
                  console.error('name not found');
                  return false;
             }
             // tmp_withness['witness_name']
        
             // return false;
        
             return true;
        
        }
        
        
             if(_.isUndefined(user_input.input_offender)){
                  user_input.input_offender = [];
             }
        
             var tmp_offender = take_all_inputs_value();
        
             console.log('', tmp_offender);
             if(_.isEmpty(tmp_offender) === false && offender_validation(tmp_offender)=== true){
                  user_input.input_offender.push(tmp_offender);
             }else{
                  console.error('some error');
             }
             
             // goto #input-disposal-information
              window.location.hash = 'input-witness-information';
           //  window.location.hash = 'input-offender-profile';
        
        }; 