route['input-disposal-information'] = function (){

    // $("#offender").click(function() {
    //     window.location.reload();
    // });
    };

    route['action-input-disposal-information'] = function(){


        function disposal_validation(tmp_offender){
        
             console.log(tmp_disposal, tmp_disposal.species_name.length);
             
             if(tmp_disposal.species_name.length < 4){
                  console.error('name not found');
                  return false;
             }
             // tmp_withness['witness_name']
        
             // return false;
        
             return true;
        
        }
        
        
             if(_.isUndefined(user_input.input_disposal)){
                  user_input.input_disposal = [];
             }
        
             var tmp_disposal = take_all_inputs_value();
        
             console.log('oishi', tmp_disposal);
             if(_.isEmpty(tmp_disposal) === false && disposal_validation(tmp_disposal)=== true){
                  user_input.input_disposal.push(tmp_disposal);
             }else{
                  console.error('some error');
             }
             
             // goto #input-disposal-information
              window.location.hash = 'input-seizure-list';
            // window.location.hash = 'input-disposal-information';
        
        }; 