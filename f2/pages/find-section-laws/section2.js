route['find-section-laws'] = function (){
   
   
   $(document).ready(function(){
        $('.seizedAnimal').click(function(){
            if($(this).prop("checked") == true){
                var countchecked = $('.seizedAnimal:checked').length;
                if(countchecked>0){
                   $("#accusedHoldDiv").show();
                }
                
                var countchecked = $('.seizedAnimal:checked').length;
 
                if(countchecked>0){
                   $("#transportAreaDiv").show();
                }
                
            }
            else if($(this).prop("checked") == false){
                var countunchecked = $('.seizedAnimal:checked').length;
                if(countunchecked==0){
                    $("#accusedHoldDiv").hide();
                    
                }
            }
        });
        $(".accusedHold").change(function () {
                    var accusedHold = $('.accusedHold:checked').val();
                    //alert(headtail);
                    if (accusedHold == "Yes") {
                        $("#accusedProductDiv").show();
                    }
                    if (accusedHold == "No") {
                        $("#accusedProductDiv").show();
                       $(".msgAccuseHold").show();
                       setTimeout(function() {
                        $('.msgAccuseHold').fadeOut('fast');
                        }, 5000);
                    }
                });
                
        $('.accusedProduct').click(function(){
            if($(this).prop("checked") == true){
                var product = $(this).val();
                if(product=="hunting"){
                  $(".huntingMsg").show();
                  $(".huntingMsg").show();
                    setTimeout(function() {
                    $('.huntingMsg').fadeOut('fast');
                    }, 5000);
                   // $(".accusedProduct").removeAttr("disabled");
                }
                if(product=="trade"){
                  $(".tradeMsg").show();
                  $(".tradeMsg").show();
                    setTimeout(function() {
                    $('.tradeMsg').fadeOut('fast');
                    }, 5000);
                   // $(".accusedProduct").removeAttr("disabled");
                }
                if(product=="possession"){
                  $(".possessionMsg").show();
                  $(".possessionMsg").show();
                    setTimeout(function() {
                    $('.possessionMsg').fadeOut('fast');
                    }, 5000);
                  //  $(".accusedProduct").removeAttr("disabled");
                }
                if(product=="abetment"){
                  $(".abetmentMsg").show();
                  $(".abetmentMsg").show();
                    setTimeout(function() {
                    $('.abetmentMsg').fadeOut('fast');
                    }, 5000);
                    if($('.accusedProduct:checked').length<=1)
                    {   alert('please select one more offence.');
                        return false;
                    }
                }
                
                var countchecked = $('.seizedAnimal:checked').length;
 
                if(countchecked>0){
                   $("#transportAreaDiv").show();
                }
            }
            else if($(this).prop("checked") == false){
                var countunchecked = $('.accusedProduct:checked').length;
                if(countunchecked==0){
                    $("#transportAreaDiv").hide();
                    
                }
            }
        });        
        
        $(".transportArea").change(function () {
                    var transportArea = $('.transportArea:checked').val();
                    if (transportArea == "Yes") {
                        $("#protectedAreaDiv").show();
                        $(".transportOneTwoMsg").show();
                        setTimeout(function() {
                        $('.transportOneTwoMsg').fadeOut('fast');
                        }, 5000);
                    }
                    if (transportArea == "No") {
                       $("#protectedAreaDiv").show();
                      }
                });
        
        $(".protectedArea").change(function () {
                    var protectedArea = $('.protectedArea:checked').val();
                    //alert(protectedArea);
                    if (protectedArea == "Yes") {
                        $("#permissionprotectedAreaDiv").show();
                        
                        if($(".permissionprotectedArea").is(":checked") && $(".permissionprotectedArea:checked").val() == "No"){
                          $("#CoreTigerReserveDiv").show();
                          
                          if($(".CoreTigerReserve").is(":checked")){
                            $("#fireCausedDiv").show();
                            
                            if($(".fireCaused").is(":checked")){
                              $("#protectedWeapon").show();
                              
                              if($(".protectedWeapon").is(":checked")){
                                $("#repeatOffenderDiv").show();
                              }  
                            }
                              
                          }  
                        }else if($(".permissionprotectedArea").is(":checked") && $(".permissionprotectedArea:checked").val() == "Yes"){
                          $("#permissionPossessionDiv").show();
                          
                          if($(".permissionPossession").is(":checked")){
                            $("#fireCausedDiv").show();
                            
                            if($(".fireCaused").is(":checked")){
                              $("#protectedWeapon").show();
                              
                              if($(".protectedWeapon").is(":checked")){
                                $("#repeatOffenderDiv").show();
                              }  
                            }
                              
                          }  
                        }
                        
                    }
                    if (protectedArea == "No") {
                        
                       //alert('hi');
                       $("#permissionprotectedAreaDiv").hide();
                       
                       
                       /// addded to hide extra divs
                       $("#permissionPossessionDiv").hide();
                       $("#CoreTigerReserveDiv").hide();
                       $("#protectedWeapon").hide();                       
                       $("#fireCausedDiv").hide();
                       $("#repeatOffenderDiv").hide();
                       
                       
                       
                    }
                });
                
                
         $(".permissionprotectedArea").change(function () {
                    var permissionprotectedArea = $('.permissionprotectedArea:checked').val();
                    //alert(headtail);
                    if (permissionprotectedArea == "Yes") {
                        $("#permissionPossessionDiv").show();
                        $("#CoreTigerReserveDiv").hide();
                    }
                    if (permissionprotectedArea == "No") {
                       //alert('sdfsdf'); 
                       $(".permissionprotectedAreaMsg").show();
                        setTimeout(function() {
                        $('.permissionprotectedAreaMsg').fadeOut('fast');
                        }, 5000);
                       $("#permissionPossessionDiv").hide();
                       $("#CoreTigerReserveDiv").show();
                       //$("#fireCausedDiv").show();
                       
                       
                    }
                });   
                
                $(".CoreTigerReserve").change(function () {
                    var CoreTigerReserve = $('.CoreTigerReserve:checked').val();
                    //alert(CoreTigerReserve);
                    if (CoreTigerReserve == "Yes") {
                        $("#fireCausedDiv").show();
                        $(".coreTigerReserveMsg").show();
                        setTimeout(function() {
                        $('.coreTigerReserveMsg').fadeOut('fast');
                        }, 5000);
                        //$("#CoreTigerReserveDiv").hide();
                        
                    }
                    if (CoreTigerReserve == "No") {
                        //alert('hi');
                        $("#fireCausedDiv").show();
                       //$("#permissionPossessionDiv").hide();
                       //$("#CoreTigerReserveDiv").show();
                       
                       
                    }
                });
                
               $(".permissionPossession").change(function () {
                    var permissionPossession = $('.permissionPossession:checked').val();
                    //alert(headtail);
                    if (permissionPossession == "Yes") {
                        $("#fireCausedDiv").show();
                        
                    }
                    if (permissionPossession == "No") {
                        
                        
                       //$("#permissionprotectedAreaDiv").hide();
                       //$("#CoreTigerReserveDiv").show();
                       $("#fireCausedDiv").show();
                       $(".permissionPossessionMsg").show();
                        setTimeout(function() {
                        $('.permissionPossessionMsg').fadeOut('fast');
                        }, 5000);
                       
                       
                    }
                }); 
                
                
                $(".fireCaused").change(function () {
                    var fireCaused = $('.fireCaused:checked').val();
                    if (fireCaused == "Yes") {
                        $("#protectedWeapon").show();
                         $(".fireCausedMsg").show();
                        setTimeout(function() {
                        $('.fireCausedMsg').fadeOut('fast');
                        }, 5000);
                        
                    }
                    if (fireCaused == "No") {
                       $("#protectedWeapon").show();
                       
                    }
                }); 
                
                
                $(".protectedWeapon").change(function () {
                    var protectedWeapon = $('.protectedWeapon:checked').val();
                    if (protectedWeapon == "Yes") {
                        $("#armsActDiv").show();
                        $(".protectedWeaponMsg").show();
                        $("#repeatOffenderDiv").show();
                        setTimeout(function() {
                        $('.protectedWeaponMsg').fadeOut('fast');
                        }, 5000);
                        
                    }
                    if (protectedWeapon == "No") {
                       $("#armsActDiv").show();
                       $("#repeatOffenderDiv").show();
                       
                    }
                }); 
                
                $(".armsAct").change(function () {
                    var armsAct = $('.armsAct:checked').val();
                    if (armsAct == "Yes") {
                        $("#ownLicenceDiv").show();
                        $(".armsActMsg").show();
                        setTimeout(function() {
                        $('.armsActMsg').fadeOut('fast');
                        }, 5000);
                    }
                    if (armsAct == "No") {
                       $("#repeatOffenderDiv").hide();
                       $("#ownLicenceDiv").hide();
                       $("#repeatOffenderDiv").show();
                       
                       
                    }
                });
                
                
                $(".ownLicence").change(function () {
                    var ownLicence = $('.ownLicence:checked').val();
                   if (ownLicence == "Yes") {
                      $(".ownLicenceMsg").show();
                        setTimeout(function() {
                        $('.ownLicenceMsg').fadeOut('fast');
                        }, 5000);
                   }
                    if (ownLicence == "No") {
                     $("#repeatOffenderDiv").show();
                       
                    }
                });
                
                $(".repeatOffender").change(function () {
                    var repeatOffender = $('.repeatOffender:checked').val();
                   if (repeatOffender == "Yes") {
                      $(".repeatOffenderMsg").show();
                        setTimeout(function() {
                        $('.repeatOffenderMsg').fadeOut('fast');
                        }, 5000);
                   }
//                    if (ownLicence == "No") {
//                     $("#repeatOffenderDiv").show();
//                       
//                    }
                });
                
                
                
                
/*************************schedule 3rd & 4th*********************/
        
       $('.seizedArticle').click(function(){
            if($(this).prop("checked") == true){
                var countchecked = $('.seizedArticle:checked').length;
                if(countchecked>0){
                   $("#accusedHoldDivThreeFour").show();
                }
                
                var countchecked = $('.accusedProductThreeFour:checked').length;
                if(countchecked>0){
                   $("#offenceProtectedAreaDivThreeFour").show();
                }
            }
            else if($(this).prop("checked") == false){
                var countunchecked = $('.seizedArticle:checked').length;
                if(countunchecked==0){
                    $("#accusedHoldDivThreeFour").hide();
                    
                }
            }
        });  
        $(".accusedHoldThreeFour").change(function () {
                    var accusedHoldThreeFour = $('.accusedHoldThreeFour:checked').val();
                    if (accusedHoldThreeFour == "Yes") {
                        $("#accusedProductDivThreeFour").show();
                    }
                    if (accusedHoldThreeFour == "No") {
                     $("#accusedProductDivThreeFour").show();
                     $(".msgAccuseHold_ThreeFour").show();
                     setTimeout(function() {
                        $('.msgAccuseHold_ThreeFour').fadeOut('fast');
                        }, 5000);  
                    }
                });
        $('.accusedProductThreeFour').click(function(){
            if($(this).prop("checked") == true){
                 var product = $(this).val();
                if(product=="hunting"){
                  $(".huntingMsgThreeFour").show();
                  $(".huntingMsgThreeFour").show();
                    setTimeout(function() {
                    $('.huntingMsgThreeFour').fadeOut('fast');
                    }, 5000);
                }
                if(product=="trade"){
                  $(".tradeMsgThreeFour").show();
                  $(".tradeMsgThreeFour").show();
                    setTimeout(function() {
                    $('.tradeMsgThreeFour').fadeOut('fast');
                    }, 5000);
                }
                if(product=="possession"){
                  $(".possessionMsgThreeFour").show();
                  $(".possessionMsgThreeFour").show();
                    setTimeout(function() {
                    $('.possessionMsgThreeFour').fadeOut('fast');
                    }, 5000);
                }
                if(product=="abetment"){
                  $(".abetmentMsgThreeFour").show();
                  $(".abetmentMsgThreeFour").show();
                    setTimeout(function() {
                    $('.abetmentMsgThreeFour').fadeOut('fast');
                    }, 5000);
                }
                var countchecked = $('.accusedProductThreeFour:checked').length;
                if(countchecked>0){
                   $("#offenceProtectedAreaDivThreeFour").show();
                }
            }
            else if($(this).prop("checked") == false){
                var countunchecked = $('.accusedProductThreeFour:checked').length;
                if(countunchecked==0){
                   $("#offenceProtectedAreaDivThreeFour").hide();
                    
                }
            }
        });
        
        $(".transportAreaThreeFour").change(function () {
                    var transportAreaThreeFour = $('.transportAreaThreeFour:checked').val();
                    if (transportAreaThreeFour == "Yes") {
                        $("#offenceProtectedAreaDivThreeFour").show();
                        $(".transportMsg").show();
                        setTimeout(function() {
                        $('.transportMsg').fadeOut('fast');
                        }, 5000);
                    }
                    if (transportAreaThreeFour == "No") {
                   $("#offenceProtectedAreaDivThreeFour").show();
                    }
                });
        
          $(".offenceProtectedAreaThreeFour").change(function () {
                    var offenceProtectedAreaThreeFour = $('.offenceProtectedAreaThreeFour:checked').val();
                    if (offenceProtectedAreaThreeFour == "Yes") {
                        $("#permissionProtectedAreaDivThreeFour").show();
                        
                        if($(".offenceProtectedAreaThreeFour").is(":checked")){
                            $("#fireCausedDiv").show();
                            
                            if($(".permissionProtectedAreaThreeFour").is(":checked") && $("input:radio[name=permissionProtectedAreaThreeFour]:checked").val() == "Yes"){
                              $("#appropriatepermitsDivThreeFour").show();
                              
                              if($(".appropriatepermitsThreeFour").is(":checked") || $(".tigerReserveThreeFour").is(":checked")){
                                 $("#destructionDivThreeFour").show();
                                 
                                 if($(".destructionThreeFour").is(":checked")){
                                    $("#fireProtectedAreaDivThreeFour").show();
                                    
                                    if($(".fireProtectedAreaThreeFour").is(":checked")){
                                        $("#accusedWeaponDivThreeFour").show();
                                        
                                        if($(".accusedWeaponThreeFour").is(":checked")){
                                            $("#repeatOffenderDivThreeFour").show();
                                         }
                                     }
                                 }
                                 
                              }
                              
                                
                            }else if($(".permissionProtectedAreaThreeFour").is(":checked") && $("input:radio[name=permissionProtectedAreaThreeFour]:checked").val() == "No"){
                               $("#tigerReserveDivThreeFour").show();
                            
                               if($(".appropriatepermitsThreeFour").is(":checked") || $(".tigerReserveThreeFour").is(":checked")){
                                 $("#destructionDivThreeFour").show();
                                 
                                 if($(".destructionThreeFour").is(":checked")){
                                    $("#fireProtectedAreaDivThreeFour").show();
                                    
                                    if($(".fireProtectedAreaThreeFour").is(":checked")){
                                        $("#accusedWeaponDivThreeFour").show();
                                        
                                        if($(".accusedWeaponThreeFour").is(":checked")){
                                            $("#repeatOffenderDivThreeFour").show();
                                         }
                                        
                                     }
                                 }
                               } 
                            }
                              
                          }  
                    }
                    if (offenceProtectedAreaThreeFour == "No") {
                        $("#permissionProtectedAreaDivThreeFour").hide();
                        
                        $("#tigerReserveDivThreeFour").hide();
                        $("#permissionProtectedAreaDivThreeFour").hide();
                        $("#destructionDivThreeFour").hide();
                        $("#fireProtectedAreaDivThreeFour").hide();
                        $("#accusedWeaponDivThreeFour").hide();
                        $("#repeatOffenderDivThreeFour").hide();
                        
                    }
                });
                
                
                $(".permissionProtectedAreaThreeFour").change(function () {
                    var permissionProtectedAreaThreeFour = $('.permissionProtectedAreaThreeFour:checked').val();
                    $(".tigerReserveThreeFourMsg").hide();
                    if (permissionProtectedAreaThreeFour == "Yes") {
                        $("#appropriatepermitsDivThreeFour").show();
                        $("#tigerReserveDivThreeFour").hide();
                    }
                    if (permissionProtectedAreaThreeFour == "No") {
                         $("#appropriatepermitsDivThreeFour").hide();
                         $("#tigerReserveDivThreeFour").show();
                         $(".permissionProtectedArea_ThreeFour").hide();
                         setTimeout(function() {
                        $('.permissionProtectedArea_ThreeFour').fadeOut('fast');
                        }, 5000);  
                    }
                });
                
                $(".appropriatepermitsThreeFour").change(function () {
                    var appropriatepermitsThreeFour = $('.appropriatepermitsThreeFour:checked').val();
                    if (appropriatepermitsThreeFour == "Yes") {
                       // $("#appropriatepermitsDivThreeFour").show();
                       $('#destructionDivThreeFour').show();
                    }
                    if (appropriatepermitsThreeFour == "No") {
                    $(".appropriatePermitsMsg").show();
                    setTimeout(function() {
                        $('.appropriatePermitsMsg').fadeOut('fast');
                        }, 5000);  
                        $('#destructionDivThreeFour').show();
                        //$('#tigerReserveDivThreeFour').show();
                    }
                });
                
                
                 $(".tigerReserveThreeFour").change(function () {
                    var tigerReserveThreeFour = $('.tigerReserveThreeFour:checked').val(); 
                    if(tigerReserveThreeFour=="Yes"){
                       $('#destructionDivThreeFour').show();
                       $('.tigerReserveThreeFourMsg').show();
                       setTimeout(function() {
                        $('.tigerReserveThreeFourMsg').fadeOut('fast');
                        }, 5000); 
                       
                    }
                      if(tigerReserveThreeFour=="No"){
                          $('#destructionDivThreeFour').show();
                      }
                 });
                 
                
                $(".destructionThreeFour").change(function () {
                    var destructionThreeFour = $('.destructionThreeFour:checked').val();
                    if (destructionThreeFour == "Yes") {
                        $("#fireProtectedAreaDivThreeFour").show();
                        $('.msgAccuseHold_ThreeFour').show();
                        $('.firemsgAccuseHold_ThreeFour').hide();
                       setTimeout(function() {
                        $('.msgAccuseHold_ThreeFour').fadeOut('fast');
                        }, 5000); 
                    }
                    if (destructionThreeFour == "No") {
                    $("#fireProtectedAreaDivThreeFour").show();
                    
                    }
                });
                $(".fireProtectedAreaThreeFour").change(function () {
                    var fireProtectedAreaThreeFour = $('.fireProtectedAreaThreeFour:checked').val();
                    if (fireProtectedAreaThreeFour == "Yes") {
                        $("#accusedWeaponDivThreeFour").show();
                        $('.firemsgAccuseHold_ThreeFour').show();
                       setTimeout(function() {
                        $('.firemsgAccuseHold_ThreeFour').fadeOut('fast');
                        }, 5000); 
                        
                    }
                    if (fireProtectedAreaThreeFour == "No") {
                    $("#accusedWeaponDivThreeFour").show();
                    
                    }
                });
                $(".accusedWeaponThreeFour").change(function () {
                    var accusedWeaponThreeFour = $('.accusedWeaponThreeFour:checked').val();
                    if (accusedWeaponThreeFour == "Yes") {
                        $("#repeatOffenderDivThreeFour").show();
                        $('.msgaccusedWeaponThreeFour').show();
                       setTimeout(function() {
                        $('.msgaccusedWeaponThreeFour').fadeOut('fast');
                        }, 5000);
                    }
                    if (accusedWeaponThreeFour == "No") {
                    $("#repeatOffenderDivThreeFour").show();
                    
                    }
                });
                $(".armsActsThreeFour").change(function () {
                    var armsActsThreeFour = $('.armsActsThreeFour:checked').val();
                    if (armsActsThreeFour == "Yes") {
                        $("#ownLicenseDivThreeFour").show();
                         $("#repeatOffenderDivThreeFour").hide();
                    }
                    if (armsActsThreeFour == "No") {
                    $("#repeatOffenderDivThreeFour").show();
                    $("#ownLicenseDivThreeFour").hide();
                    
                    }
                });
                $(".ownLicenseThreeFour").change(function () {
                    var ownLicenseThreeFour = $('.ownLicenseThreeFour:checked').val();
                    if (ownLicenseThreeFour == "Yes") {
                        $(".msgAccuseHold_ThreeFour").show();
                        setTimeout(function() {
                        $('.msgAccuseHold_ThreeFour').fadeOut('fast');
                        }, 5000);
                       // $("#ownLicenseDivThreeFour").show();
                         //$("#repeatOffenderDivThreeFour").hide();
                    }
                    if (ownLicenseThreeFour == "No") {
                    $("#repeatOffenderDivThreeFour").show();
                    
                    }
                });
               $(".repeatOffenderThreeFour").change(function () {
                    var repeatOffenderThreeFour = $('.repeatOffenderThreeFour:checked').val();
                   if (repeatOffenderThreeFour == "Yes") {
                      $(".msgrepeatOffender_ThreeFour").show();
                        setTimeout(function() {
                        $('.msgrepeatOffender_ThreeFour').fadeOut('fast');
                        }, 5000);
                   }
//                    if (ownLicence == "No") {
//                     $("#repeatOffenderDiv").show();
//                       
//                    }
                }); 
                
                
        
        
    });
};

// route['action-find-section-laws'] = function(){


//     function law_validation(tmp_law){
    
//         //  console.log(tmp_rescue, tmp_rescue.species_name.length);
         
//         //  if(tmp_sample.species_name.length < 4){
//         //       console.error('name not found');
//         //       return false;
//         //  }

//          // tmp_withness['witness_name']
    
//          // return false;
    
//          return true;
    
//     }
    
    
//          if(_.isUndefined(user_input.input_law)){
//               user_input.input_law = [];
//          }
    
//          var tmp_law = take_all_inputs_value();
    
//          console.log('', tmp_law);
//          if(_.isEmpty(tmp_law) === false && law_validation(tmp_law)=== true){
//               user_input.input_law.push(tmp_law);
//          }else{
//               console.error('some error');
//          }
         
//          // goto #input-disposal-information
//           window.location.hash = 'review-section';
//         // window.location.hash = 'find-section-laws';
    
//     }; 
