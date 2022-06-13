route['input-sample-collection'] = function (){

    // $("#collection").click(function() {
    //     window.location.reload();
    // });
    };

    route['action-input-sample-collection'] = function(){


        function sample_validation(tmp_sample){
        
             console.log(tmp_sample, tmp_sample.species_name.length);
             
             if(tmp_sample.species_name.length < 4){
                  console.error('name not found');
                  return false;
             }
             // tmp_withness['witness_name']
        
             // return false;
        
             return true;
        
        }
        
        
             if(_.isUndefined(user_input.input_sample)){
                  user_input.input_sample = [];
             }
        
             var tmp_sample = take_all_inputs_value();
        
             console.log('', tmp_sample);
             if(_.isEmpty(tmp_sample) === false && sample_validation(tmp_sample)=== true){
                  user_input.input_sample.push(tmp_sample);
             }else{
                  console.error('some error');
             }
             
             // goto #input-disposal-information
              window.location.hash = 'other-details';
            // window.location.hash = 'input-sample-collection';
        
        }; 