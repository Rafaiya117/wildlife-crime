route['bail'] = function (){

    // $("#collection").click(function() {
    //     window.location.reload();
    // });
    };

    route['action-bail'] = function(){


        function bail_validation(tmp_sample){
        
            //  console.log(tmp_bail, tmp_bail.species_name.length);
             
            //  if(tmp_sample.species_name.length < 4){
            //       console.error('name not found');
            //       return false;
            //  }
             // tmp_withness['witness_name']
        
             // return false;
        
             return true;
        
        }
        
        
             if(_.isUndefined(user_input.input_bail)){
                  user_input.input_bail = [];
             }
        
             var tmp_bail = take_all_inputs_value();
        
             console.log('', tmp_bail);
             if(_.isEmpty(tmp_bail) === false && sample_validation(tmp_bail)=== true){
                  user_input.input_bail.push(tmp_bail);
             }else{
                  console.error('some error');
             }
             
             // goto #input-disposal-information
            //  window.location.hash = 'other-details';
             window.location.hash = 'bail';
        
        }; 