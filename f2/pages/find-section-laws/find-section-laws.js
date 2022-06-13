route['input-find-section-laws'] = function (){

 
    };

    route['action-find-section-laws'] = function(){


        function law_validation(tmp_law){
        
            //  console.log(tmp_rescue, tmp_rescue.species_name.length);
             
            //  if(tmp_sample.species_name.length < 4){
            //       console.error('name not found');
            //       return false;
            //  }
    
             // tmp_withness['witness_name']
        
             // return false;
        
             return true;
        
        }
        
        
             if(_.isUndefined(user_input.input_law)){
                  user_input.input_law = [];
             }
        
             var tmp_law = take_all_inputs_value();
        
             console.log('', tmp_law);
             if(_.isEmpty(tmp_law) === false && law_validation(tmp_law)=== true){
                  user_input.input_law.push(tmp_law);
             }else{
                  console.error('some error');
             }
             
             // goto #input-disposal-information
             window.location.hash = 'review-section';
            // window.location.hash = 'find-section-laws';
        
        }; 
    
    