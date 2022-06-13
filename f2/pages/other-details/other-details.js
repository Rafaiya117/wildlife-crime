route['other-details'] = function (){

    // $("#details").click(function() {
    //     window.location.reload();
    // });
    };


    route['action-other-details'] = function(){


        function other_validation(tmp_other){
        
            //  console.log(tmp_other, tmp_other.offender_name.length);
             
            //  if(tmp_offender.offender_name.length < 4){
            //       console.error('name not found');
            //       return false;
            //  }
             // tmp_withness['witness_name']
        
             // return false;
        
             return true;
        
        }
        
        
             if(_.isUndefined(user_input.input_other)){
                  user_input.input_other = [];
             }
        
             var tmp_other = take_all_inputs_value();
        
             console.log('', tmp_other);
             if(_.isEmpty(tmp_other) === false && other_validation(tmp_other)=== true){
                  user_input.input_other.push(tmp_other);
             }else{
                  console.error('some error');
             }
             
             // goto #input-disposal-information
              window.location.hash = 'review-section-details';
           //  window.location.hash = 'other-details';
        
        }; 