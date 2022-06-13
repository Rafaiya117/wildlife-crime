route['input-officer-information'] = function () {

     


};

route['action-input-officer-information'] = function(){


function officer_validation(tmp_officer){

     console.log(tmp_officer, tmp_officer.officer_name.length);
     
     if(tmp_officer.officer_name.length < 4){
          console.error('name not found');
          return false;
     }
     // tmp_withness['witness_name']

     // return false;

     return true;

}


     if(_.isUndefined(user_input.input_officer)){
          user_input.input_officer = [];
     }

     var tmp_officer = take_all_inputs_value();

     console.log('', tmp_officer);
     if(_.isEmpty(tmp_officer) === false && officer_validation(tmp_officer)=== true){
          user_input.input_officer.push(tmp_officer);
     }else{
          console.error('some error');
     }
     
     // goto #input-disposal-information
      window.location.hash = 'input-offender-profile';
    // window.location.hash = 'input-officer-information';

}; 