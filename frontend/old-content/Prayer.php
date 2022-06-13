<?php
include '../config/config.php';
include BASEPATH.'/pages/layout/header.php';
include BASEPATH.'/pages/layout/sidebar.php';
include BASEPATH.'/pages/layout/nav.php';
//die();
?>

<div class="content-wrapper" style="min-height: 901px;"> 


<div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="innerPage-box">
                                    <h3 class="innerPage-head">
                                        Prayers
                                         
                                        <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                                    </h3>
                                     
                                    <form role="form"  class="form-horizontal" id="subscribeForm" method="POST" action="https://wlor.wildcrimeassist.in/wlors/section" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="nON9yBt9rJJUgIy2ukkaHuoLjWYVOCq5bqPbyRj9">
                                        <input type="hidden" name="section11" value="section11">
                                        <div class="form-row">
                                          <div class="form-row">
                                              
                                              <div class="form-group col-md-12 enforcementagency_dep">
                                                <label class="inner-label">
                                                   What agency will the seized samples be sent for forensic examination?
                                                                                                  </label>
                                                    <select class="form-control  inner-textfield " id="agency_name" name="agency_name" >
                                                      <option value="">Please Select</option>
                                                      <option value="Wildlife Institute of India, Dehradun" >Wildlife Institute of India, Dehradun</option>
                                                      <option value="Zoological Survey of India, Kolkata" >Zoological Survey of India, Kolkata</option>
                                                      <option value="Botanical Survey of India, Kolkata" >Botanical Survey of India, Kolkata</option>
                                                      <option value="Centre for Cellular & Molecular Biology, Hyderabad" >Centre for Cellular & Molecular Biology, Hyderabad</option>
                                                      <option value="Other" >Other</option>
                                                    </select>
                                                  </div>
                                                  <div class="form-group col-md-12 otherval" style="display:none">
                                                  <input type="text" class="form-control inner-textfield"  id="agency_name_other" name="agency_name_other"  value="">
                                                  </div>
                                              </div>    
                                             <div class="form-group col-md-12">
                                        <div class="form-row">
                                           <label class="inner-label required">
                                               What are the prayers you are making to the court?
                                                
                                           </label>
                                            <div class="form-row">
                                              <div class="form-group col-md-6">
                                                 <label class="checkbox-holder">
                                                                                                          <input type="checkbox" name="RunAwayFromTown" class="accusedHabitual" value="Permission to continue investigation of the case" checked>
                                                                                                          Permission to continue investigation of the case 
                                                      
                                                  <span class="checkbox-checkmark"></span>
                                                 </label>
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label class="checkbox-holder">
                                                                                                          <input type="checkbox" name="RunAwayFromState" id="" class="accusedHabitual" value="Reject application for bail" checked>
                                                                                                           Reject application for bail
                                                       
                                                 <span class="checkbox-checkmark"></span>
                                                  </label>
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label class="checkbox-holder">
                                                                                                             <input type="checkbox" name="InfluenceWitnesses" id="" class="accusedHabitual" value="Examination of seized evidence" checked>
                                                                                                           Examination of seized evidence
                                                       
                                                 <span class="checkbox-checkmark"></span>
                                                  </label>
                                              </div>
                                                  <div class="form-group col-md-6">
                                                  <label class="checkbox-holder">
                                                                                                              <input type="checkbox" name="Belong_to_a_nomadic_tribe" id="" class="accusedHabitual" value="Belong to a nomadic tribe" checked>
                                                                                                           
                                                      Judicial Custody for 14 days  
                                                       
                                                 <span class="checkbox-checkmark"></span>
                                                  </label>
                                              </div>

                                                  <div class="form-group col-md-6">
                                                  <label class="checkbox-holder">
                                                                                                              <input type="checkbox" name="Gave_false_address_during_arrest" id="" class="accusedHabitual" value="Release of live animals in their habitat">
                                                                                                           Release of live animals in their habitat 
                                                       
                                                 <span class="checkbox-checkmark"></span>
                                                 <div class="hint" style="padding:10px">
                                                     (If species native to the state are seized and are healthy, you may pray for their release in the wild)
                                                      
                                                 </div>
                                                  </label>
                                                          
                                              </div>
                                                <div class="form-group col-md-6">
                                                  <label class="checkbox-holder">
                                                                                                              <input type="checkbox" name="Destruction_of_perishable_articles" id="" class="accusedHabitual" value="Belong to a nomadic tribe">
                                                                                                          
                                                      Destruction of perishable articles 
                                                       
                                                 <span class="checkbox-checkmark"></span>
                                                  </label>
                                              </div>
                                                  <div class="form-group col-md-6">
                                                  <label class="checkbox-holder">
                                                                                                              <input type="checkbox" name="Permission_to_send_seized" id="" class="accusedHabitual" value="Release of live animals in their habitat" checked>
                                                                                                           
                                                      Permission to send seized animal articles for forensic examination
                                                       
                                                 <span class="checkbox-checkmark"></span>
                                                  </label>
                                              </div>
                                              </div>
                                            </div>
                                                <a href="https://wlor.wildcrimeassist.in/wlors/section10" class="listinBtn pull-left">Previous</a> 
                                                <a href="./Review-Section-Details.php" id="btnCheck" class="listinBtn">Review and Submit</a>
                                            </form>   
                                        </div>
                                </div>



                            </div> 
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>


<div class="control-sidebar-bg"></div>
</div>


<?php
include BASEPATH.'pages/layout/footer.php';
?>