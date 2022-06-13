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
                                        Record information about the Seizure List
                                     <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                                    </h3>
                                              
                                    <form role="form" name="myForm"  class="form-horizontal" method="POST" action="https://wlor.wildcrimeassist.in/wlors/section" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="nON9yBt9rJJUgIy2ukkaHuoLjWYVOCq5bqPbyRj9">
                                        <input type="hidden" name="section8" value="section8">
                                        <input type="hidden" name="speciesFind" value="">
                                        <div class="form-row">

                                            <!--<div class="form-group col-md-12">
                                                <label class="inner-label required">Provide details of the animal articles/ trophies/ meat/ live animals found in the possession of  the detained person.</label>
                                                <select class="form-control identifyspecies inner-textfield"  required name="provideDetailSpecie" >
                                                    <option  value="" >Select Species </option>
                                                    <option  value=""  > | </option>
                                                </select>
                                            </div>-->
                                            <div class="form-group col-md-12">
<!--                                                <label class="inner-label required">
                                                    Upload photos of seized articles-->
                                                    <!--</label>-->
                                                <label class="inner-label required">
                                                   Do you have photos of seized articles?
                                                </label>
                                               
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="seized_articles" required="" class="seized_articles" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="seized_articles" required="" class="seized_articles invalid" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                      <span class="text-danger hidden invalid-msg"></span>
                                                  </div>
                                                </div>
<!--                                                <div class="form-row seizedarticlesupload" style="display:none">
                                                 <input type="file" id="seizedarticles" class="form-control  inner-textfield"    name="seizedarticles[]" multiple >
                                                <input type="hidden" id="seizedarticlesupload" value="">
                                                    
                                                 <input type="file" id="seizedarticles" class="form-control  inner-textfield" name="seizedarticles[]" multiple >
                                                <input type="hidden" id="seizedarticlesupload" value="">
                                                   </div>-->
                                                </div>
                                                 <div class="form-group col-md-12 seizedarticlesupload" >
                                                        <div id="seized_image_preview"></div>
                                                    </div>
                                                      <div class="form-group col-md-12 seizedarticlesupload" >
                                                <label class="inner-label required">
                                                    Choose Date of Document
                                                 </label>
                                                <input type="text" class="form-control inner-textfield datepick"  id="date0" name="date0" required value="" >
                                                 <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                            </div> 
                                                 <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    In case of live animals, “Where were the seized live animals sent?” 
                                                </label>
                                                <textarea type="text" required class="form-control  inner-textfield" placeholder="Handed over to the officials of Rescue Centre/Zoo vide Handing Over – Taking Over note dated 12.12.1234" name="liveAnimals" maxlength="375" ></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                               
                                                <label class="inner-label ">
                                                Do you have handover-takeover letter?
                                                </label>
                                               
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="handoverLetter"  class="handoverLetter" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="handoverLetter" required="" class="handoverLetter" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                  </div>
                                                </div>
                                                <div class="form-row handoverLetterupload" >
                                                
                                                <input type="hidden" id="HandoverLettercnt" value="0">
                                                </div>
                                            </div>
                                                <div class="form-group col-md-12 handoverLetterupload" >
                                                        <div id="hand_image_preview"></div>
                                                    </div>
                                             <div class="form-group col-md-12 handoverLetterupload" >
                                            <label class="inner-label required">
                                                    Choose Date of Document
                                                 </label>
                                                <input type="text" required class="form-control inner-textfield datepick"  id="date_1" name="date_1"  value="" >
                                                 <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                            </div> 
                                                                                        
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    What were the steps taken by the search team to ensure proper conduction of search and seizure?
                                              </label>
                                                <textarea  rows="3" cols="30" class="form-control required inner-textfield" required placeholder="That the search team removed the cloth cover and discovered a partitioned iron cage containing Scheduled animals and birds. The search team conducted a thorough search of the area and in addition to the Scheduled species, also seized one mobile phone with IMEI Number 8888888888, one country made gun, one iron cage measuring 4ftx3ft, Voter ID card of Accused No 1 and a nylon net used to transport the scheduled birds. 
                                                          " name="searcTerm"   ></textarea>
                                            </div>
                                          
                                            <div class="form-group col-md-12 wrapperdiv">
                                            <label class="inner-label required">
                                                Provide details of items seized and sealed?
                                                                                            <div class="hint">
                                                (Please add all items in seizure list here)
                                          </div></label>
                                            <div class="row">
                                                
                                                  <div class=" col-md-12 m-b-25 attr">
                                                    <input type='text' placeholder="Name of item seized" class='form-control required inner-textfield'  required  value="Tiger | Panthera tigris | Live(Suspected)"   readonly="">
                                                    <input type='text' placeholder="Quantity seized in weight/number" class='form-control required inner-textfield'  required  value="1"   readonly="">
                                                    <input type='text' placeholder="Provide the description of the seized article - including dimensions, IMEI number etc" class='form-control required inner-textfield'  value="2"   readonly="">
                                                   </div>
                                              </div>
                                             </div>
                                            <div class="pull-left">
                                            <p>
                                                <button class="add_fields" style="margin-left: -6px;">
                                                    <img src='../images/add-fields.png'>Add More Fields                                                 </button></p>
                                                <div class="hint">
                                                Enter all items seized during search in this list including weapons, documents, biological evidence, etc.
                                          </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Was the seizure list prepared on the spot?
                                            </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="seizurespot" required class="seizurespot" value="Yes" >Yes
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="seizurespot" required class="seizurespot" value="No" >No
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12" id="seizureList">
                                                <label class="inner-label required">
                                                    Where was seizure list prepared?
                                             </label>
                                                <input type="text" class="form-control  inner-textfield seizureList"  name="seizureList" value="">
                                            </div>
                                            <div class="form-group col-md-12" id="spot">
                                                <label class="inner-label required">
                                                    Why was it not prepared on the spot?
                                             </label>
                                                <input type="text" class="form-control  inner-textfield spot" max="150"  placeholder="The seizure list could not be prepared on the spot because a crowd gathered at the crime scene which disabled the officers from writing documents at the crime scene." name="spot" value="">
                                            </div> 
                                            <div class="form-group col-md-8">
<!--                                                <label class="inner-label required">
                                                    Upload seizure list as annexure -->
                                                    <!--                                                <div class="hint">
                                                    (Seizure list should contain common name, scientific name, Schedule and Entry in Schedule of species seized. It should be signed by the IO, accused and witnesses)-->
                                                    <!--                                                </div>
                                                </label>-->
                                                <label class="inner-label required">
                                                   Do you have the seizure list as annexure?
                                                </label>
                                               
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="seizurespot_upload" required="" class="seizurespot_upload" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="seizurespot_upload" required="" class="seizurespot_upload invalid" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                      <span class="hidden text-danger invalid-msg"></span>
                                                  </div>
                                                </div>
<!--                                                <div class="form-row seizurespot_uploadfile" style="display:none">
                                                                                                <input type="file" id="uploadFile" class="form-control  inner-textfield"    name="uploadFile[]" multiple >
                                                
                                                                                                <input type="file" id="uploadFile" class="form-control  inner-textfield" name="uploadFile[]" multiple >
                                                                                                <input type="hidden" id="uploadFilesec" value="">
                                                </div>-->
                                            </div>
                                            <div class="form-group col-md-1"></div>
                                            <div class="form-group col-md-3" >
                                                <a class="listLink" data-fancybox href="https://wlor.wildcrimeassist.in/images/document/seizure.jpg">
                                                <image src="https://wlor.wildcrimeassist.in/images/document/seizure.jpg" class="img-thumbnail" style="height:250px;"/>
                                                </a>
                        
                                            </div>
                                            <div class="form-group col-md-12 seizurespot_uploadfile" >
                                                        <div id="image_preview"></div>
                                                    </div>
                                                                                            
                                             <div class="form-group col-md-12 seizurespot_uploadfile" >
                                                <label class="inner-label required">
                                                    Choose Date of Document
                                               </label>
                                                <input type="text" class="form-control inner-textfield datepick"  id="date_2" name="date_2" required value="" >
                                                 <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                            </div>
                                            <div class="form-group col-md-12" > 
                                              <a href="https://wlor.wildcrimeassist.in/wlors/accusesection7" class="listinBtn pull-left">Previous</a>
                                             <a href="./Select.php" class="listinBtn pull-left">Next</a>
                                                                                     
                                            </div> 
                                        </div>
                                    </form>   

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