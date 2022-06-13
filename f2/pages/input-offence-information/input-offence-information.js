route['input-offence-information'] = function (){
    // $('#myLink').submit(function() {
    //     $.post('input-offence-information.php', $('#myLink').serialize(), function(data) {
    //         if(data == '1') {
    //             window.location.reload();
    //         }
    //     });
    //     return false;
    // });
};

route['action-input-offence-information'] = function(){


    function offence_validation(tmp_offence){

     //    console.log(tmp_offence, tmp_offence.case_no.length);
        
     //    if(tmp_offence.case_no.length < 4){
     //         console.error('case no not found');
     //         return false;
     //    }
        // tmp_withness['witness_name']
   
        // return false;
   
        return true;
   
   }
   
   
        if(_.isUndefined(user_input.input_offence)){
             user_input.input_offence = [];
        }
   
        var tmp_offence = take_all_inputs_value();
   
        console.log('', tmp_offence);
        if(_.isEmpty(tmp_offence) === false && offence_validation(tmp_offence)=== true){
             user_input.input_offence.push(tmp_offence);
        }else{
             console.error('some error');
        }
        
        // goto #input-disposal-information
        window.location.hash = 'input-officer-information';
      //  window.location.hash = 'input-offence-information';
   
    }; 