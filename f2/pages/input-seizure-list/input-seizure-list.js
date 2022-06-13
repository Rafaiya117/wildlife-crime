route['input-seizure-list'] = function (){
    // $('#myLink').submit(function() {
    //     $.post('input-offence-information.php', $('#myLink').serialize(), function(data) {
    //         if(data == '1') {
    //             window.location.reload();
    //         }
    //     });
    //     return false;
    // });
};

route['action-input-seizure-list'] = function(){


    function seizure_validation(tmp_seizure){

     //    console.log(tmp_offence, tmp_offence.case_no.length);
        
     //    if(tmp_offence.case_no.length < 4){
     //         console.error('case no not found');
     //         return false;
     //    }
        // tmp_withness['witness_name']
   
        // return false;
   
        return true;
   
   }
   
   
        if(_.isUndefined(user_input.input_seizure)){
             user_input.input_seizure = [];
        }
   
        var tmp_seizure = take_all_inputs_value();
   
        console.log('', tmp_seizure);
        if(_.isEmpty(tmp_seizure) === false && seizure_validation(tmp_seizure)=== true){
             user_input.input_seizure.push(tmp_seizure);
        }else{
             console.error('some error');
        }
        
        // goto #input-disposal-information
        window.location.hash = 'input-sample-collection';
      //  window.location.hash = 'input-seizure-list';
   
    }; 