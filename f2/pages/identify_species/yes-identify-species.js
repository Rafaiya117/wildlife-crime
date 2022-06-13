route['yes-identify-species'] = function (){

    };

    route['action-yes-identify-species'] = function(){


        function species_validation(tmp_species){
        
             console.log(tmp_species, tmp_species.name.length);
             
             if(tmp_species.name.length < 4){
                  console.error('name not found');
                  return false;
             }
             // tmp_withness['witness_name']
        
             // return false;
        
             return true;
        
        }
        
        
             if(_.isUndefined(user_input.input_species)){
                  user_input.input_species = [];
             }
        
             var tmp_species = take_all_inputs_value();
        
             console.log('', tmp_species);
             if(_.isEmpty(tmp_species) === false && species_validation(tmp_species)=== true){
                  user_input.input_species.push(tmp_species);
             }else{
                  console.error('some error');
             }
             
             // goto #input-disposal-information
              window.location.hash = 'input-rescue-information';
             //window.location.hash = 'yes-identify-species';
        
        }; 