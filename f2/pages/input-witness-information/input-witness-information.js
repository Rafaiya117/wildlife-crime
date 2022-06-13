route['input-witness-information'] = function () {

     


};

route['action-input-witness-information'] = function(){


function withness_validation(tmp_withness){

     console.log(tmp_withness, tmp_withness.witness_name.length);
     
     if(tmp_withness.witness_name.length < 4){
          console.error('witheness name not found');
          return false;
     }
     // tmp_withness['witness_name']

     // return false;

     return true;

}


     if(_.isUndefined(user_input.input_withness)){
     
          user_input.input_withness = [];

     }

     var tmp_withness = take_all_inputs_value();

     console.log('it worked', tmp_withness);
     if(_.isEmpty(tmp_withness) === false && withness_validation(tmp_withness)=== true){
          user_input.input_withness.push(tmp_withness);
     }else{
          console.error('some error');
     }
     
     // goto #input-disposal-information
      window.location.hash = 'input-disposal-information';
    // window.location.hash = 'input-witness-information';

}; 