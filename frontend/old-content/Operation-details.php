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
                            <h3 class="innerPage-head">Record Details about the Operation
                                                                <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                            </h3>
                                                                                    <form role="form" name="myForm" id="subscribeForm" onsubmit="required()" class="form-horizontal" method="POST" action="https://wlor.wildcrimeassist.in/wlors/section" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="nON9yBt9rJJUgIy2ukkaHuoLjWYVOCq5bqPbyRj9">
                                <input type="hidden" name="section7" value="section7">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required">
                                             What date did you start the operation?
                                                                                    </label>
                                        <input type="text" class="form-control inner-textfield datepick" required="" id="startDate" name="startDate" value="">
                                        <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                    </div>
                                    <div class="form-group col-md-12 customTimepicker">
                                    <label class="inner-label required">
                                        What time did you start the operation?
                                                                            </label>
                                    <div class="time_pick"><input type="text" id="startTime" class="form-control inner-textfield timepicker" required="" name="startTime" value=""><div class="timepicker_wrap " style="display: none;"><div class="arrow_top"></div><div class="time"><div class="prev action-next"></div><div class="ti_tx"><input type="text" class="timepicki-input" readonly=""></div><div class="next action-prev"></div></div><div class="mins"><div class="prev action-next"></div><div class="mi_tx"><input type="text" class="timepicki-input" readonly=""></div><div class="next action-prev"></div></div><div class="meridian"><div class="prev action-next"></div><div class="mer_tx"><input type="text" class="timepicki-input" readonly=""></div><div class="next action-prev"></div></div></div></div>
                                     <i class="fa fa-clock-o" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required">
                                            What date did you end the operation? 
                                                                                    </label>
                                        <input type="text" class="form-control inner-textfield datepick" required="" id="endDate" name="endDate" value="">
                                        <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                    </div> 
                                    <div class="form-group col-md-12 customTimepicker">
                                    <label class="inner-label required">
                                        What time did you end the operation?
                                                                            </label>
                                    <div class="time_pick"><input type="text" id="endTime" required="" class="form-control inner-textfield timepicker" name="endTime" value=""><div class="timepicker_wrap "><div class="arrow_top"></div><div class="time"><div class="prev action-next"></div><div class="ti_tx"><input type="text" class="timepicki-input" readonly=""></div><div class="next action-prev"></div></div><div class="mins"><div class="prev action-next"></div><div class="mi_tx"><input type="text" class="timepicki-input" readonly=""></div><div class="next action-prev"></div></div><div class="meridian"><div class="prev action-next"></div><div class="mer_tx"><input type="text" class="timepicki-input" readonly=""></div><div class="next action-prev"></div></div></div></div>
                                     <i class="fa fa-clock-o" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                    </div>
                                    <div class="form-group col-md-12 ">
                                    <label class="inner-label required">
                                        Exact location of operation with GPS co-ordinates
                                                                                </label>
                                        <div id="locationField">
                                        <input type="text" required="" class="form-control inner-textfield" onfocus="geolocate()" id="autocomplete" name="location" value="">
                                    </div>
                                    </div>
                                    <div class="form-group col-md-12">
<!--                                       <label class="inner-label required">
                                        Upload a copy of sketch map-->
                                        <!--                                    </label> -->
                                       <label class="inner-label required">
                                           Do you have copy of sketch map?
                                                                                  </label>
                                       
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                             <label class="radioBtnHolder">
                                                  <input type="radio" name="sketch_mapfile" required="" class="sketch_mapfile" value="Yes">Yes
                                              <span class="checkmark"></span>
                                             </label>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label class="radioBtnHolder">
                                                  <input type="radio" name="sketch_mapfile" required="" class="sketch_mapfile invalid" value="No">No<br>
                                                  <span class="checkmark"></span>
                                              </label>
                                              <span class="text-danger invalid-msg"></span>
                                          </div>
                                        </div>
                                    </div>
                                    
                                      <div class="form-group col-md-1 sketch_mapupload"></div>
                                    <div class="form-group col-md-3 sketch_mapupload">
                                        <a class="listLink" data-fancybox="" href="https://wlor.wildcrimeassist.in/images/document/exactlocation.jpg">
                                        <img src="https://wlor.wildcrimeassist.in/images/document/exactlocation.jpg" class="img-thumbnail" style="height:250px;">
                                        </a>
                                    </div>
                                      
                                    <!-- FOR SCATCH MAMP IMAGE -----> 
                                                                            <div class="form-group col-md-12 sketch_mapupload">
                                            <div id="image_preview"></div>
                     
                                        </div>
                                                                        <div class="form-group col-md-12 sketch_mapupload">
                                        <label class="inner-label required">
                                            Choose Date of Document
                                                                                    </label>
                                        <input type="text" class="form-control inner-textfield datepick" required="" id="date2" name="date2" value="">
                                        <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                    </div> 
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required">
                                            Provide a brief description of the events at the crime scene.
                                                                                    </label>
                                        <textarea class="form-control inner-textfield" required="" placeholder="The search team saw 02 suspicious persons outside the premises of ‘XYZ building’ standing with a box kind of a structure covered with a white cloth. The 02 persons were intercepted and the search team disclosed their identity. On disclosure of the identity of the search team the 02 suspects tried to run away but they were nabbed with the box kind of a structure covered with white cloth." name="description"></textarea>
                                    </div>
                                     <div class="form-group col-md-12 ">
<!--                                         <label class="inner-label required">
                                             Upload a copy of panchnama/mahazar-->
                                          <!--                                         </label>-->
                                         <label class="inner-label required">
                                           Do you have copy of panchnama/mahazar ?
                                                                                  </label>
                                       
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                             <label class="radioBtnHolder">
                                                  <input type="radio" name="panchnama_filereq" required="" class="panchnama_filereq" value="Yes">Yes
                                              <span class="checkmark"></span>
                                             </label>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label class="radioBtnHolder">
                                                  <input type="radio" name="panchnama_filereq" required="" class="panchnama_filereq invalid" value="No">No<br>
                                                  <span class="checkmark"></span>
                                              </label>
                                              <span class="text-danger hidden invalid-msg"></span>
                                          </div>
                                        </div>
<!--                                         <div class="form-row panchnama_fileupload" style="display:none">
                                                                                                 <input type="file" class="form-control inner-textfield"  id="panchNama" name="panchNama[]" multiple accept="image/gif, image/jpeg, image/png,.pdf,.doc,.docx,application/msword"> 
                                                                                                 <input type="file" class="form-control inner-textfield" id="panchNama" name="panchNama[]" multiple accept="image/gif, image/jpeg, image/png,.pdf,.doc,.docx,application/msword"> 
                                                                                          <input type="hidden" id="panchNamacnt" value="0">
                                         </div>-->
                                     </div>
                                     <!-- FOR PanchnamaMAMP IMAGE -----> 
                                                                            <div class="form-group col-md-12 panchnama_fileupload">
                                            <div id="panchNama_previews"></div>
                                        </div>
                                                                        <div class="form-group col-md-12 panchnama_fileupload">
                                        <label class="inner-label required">
                                            Choose Date of Document
                                                                                    </label>
                                        <input type="text" class="form-control inner-textfield datepick" required="" id="date3" name="date3" value="">
                                        <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                    </div>   
                                    <div class="form-group col-md-12">
                                    <label class="inner-label required">
                                        Did the search team offer themselves for search?
                                                                            </label>
                                    <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                       <label class="radioBtnHolder">
                                            <input type="radio" name="searchTeam" id="" required="" class="" value="Yes">Yes
                                        <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="searchTeam" id="" required="" class="" value="No">No
                                       <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                    <label class="inner-label required">
                                        Did the detainee have any permit/ license from the responsible authorities in support of their actions/ possession?
                                                                            </label>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label class="radioBtnHolder">
                                            <input type="radio" name="detainee" id="" required="" class="detainee" value="Yes">Yes
                                        <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="detainee" id="" required="" class="detainee" value="No">No
                                       <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-12" id="detaineeDescription">
                                        <label class="inner-label required">
                                            Provide a brief description of their actions/ possession.
                                                                                    </label>
                                        <textarea class="form-control inner-textfield detaineeDescription" placeholder="The accused persons were granted a permit from the Chief Wildlife Warden for entry into the sanctuary upto December 2018, but were found illegally entering the Protected Area in May, 2019, beyond the period for which the permit had been granted." name="detaineeDescription"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                    <label class="inner-label required">
                                    Where were the accused persons brought after seizure/detection?
                                                                            </label>
                                    <div class="form-row">
                                        <input type="text" required="" class="form-control inner-textfield" id="" name="accusedPersons" value="">

                                    </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                    <label class="inner-label required">
                                        Did the accused confess to the crime?
                                                                            </label>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label class="radioBtnHolder">
                                            <input type="radio" name="accusedConfess" required="" id="" class="accusedConfess" value="Yes">Yes
                                        <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="accusedConfess" required="" id="" class="accusedConfess" value="No">No
                                       <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- FOR ACCUSED CONFESS YES CASE --> 
                                    <div class="form-group col-md-12 accusedConfession accusedConfessionYes">
                                        <label class="inner-label" style="background:#00b1af !Important;color:#fff;">
                                            Please select the accused person's who confessed ? 
                                                                                    </label>
                                        <input type="hidden" name="accuse_count" value="eyJpdiI6IjMrcmxNdzlWdzZEVm5QM3B6eVRjM2c9PSIsInZhbHVlIjoiSktXeldNZjJLZ0hoTXN5S09SRHU5dDQ1VXkwbURtWVgwMVF3YmdOSjI4cz0iLCJtYWMiOiJmODc1OGNlY2E3YWQ1OWRjYWMwZTM1YWYxNmFkNmZmMGJhMGU0YWMzOTY2ZDE1OTE5ODIzOTc4MjMxZDU1ZWRmIn0=">
                                                                                <div class="form-group col-md-12">
                                          <label class="checkbox-holder">
                                              <input type="checkbox" name="accused_0" id="accused_0" class="accused_0 acccheckbox" value="tgtyhyhyhy"> tgtyhyhyhy                                              <span class="checkbox-checkmark"></span>
                                          </label>
                                        </div>
                                                                            </div>
                                    
                                    <!-- FOR ACCUSED CONFESS NO CASE -->    
                                    <div class="form-group col-md-12 accusedConfessNo accNo" style="display:none">
                                    <label class="inner-label required">
                                        Did you record the accused person's statement?
                                                                            </label>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label class="radioBtnHolder">
                                                                                        <input type="radio" name="accusedPerStatement" id="" class="accusedPerStatement" value="Yes">Yes
                                        <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="accusedPerStatement" id="" class="accusedPerStatement" value="No">No
                                       <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div>
                                    </div>
                                    <input type="hidden" id="totalaccusedNumber" value="1">
                                                                        <div class="form-group col-md-12 accusedPerStatemenBlock accusedPerStatementyES">
                                    
                                    <label class="checkbox-holder">
                                            <input type="checkbox" idval="0" name="accused_statement_0" id="accused_statement_0" class="accused_statement_0 accused accusedchk" value="yes"> tgtyhyhyhy                                            <span class="checkbox-checkmark"></span> 
                                        
                                    </label>
                                                                             <!--span class="inner-label"> Skip <input type="checkbox"  name="accused_0" class="accused" id="0" value="yes"></span -->  
                                   
                                        <label class="inner-label required accusedPerstat_0 accusedPer_0" style="display:none">
                                           Do you have copy of the person's statement?
                                                                                  </label>
                                                                                <div class="form-row accusedPerstat_0 accusedPer_0" style="display:none">
                                          <div class="form-group col-md-6">
                                             <label class="radioBtnHolder">
                                                  <input type="radio" idval="0" name="personalstatementreq_0" class="personalstatementreqchk personalstatementreq_0" value="Yes">Yes
                                              <span class="checkmark"></span>
                                             </label>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label class="radioBtnHolder">
                                                  <input type="radio" idval="0" name="personalstatementreq_0" class="personalstatementreqchk personalstatementreq_0" value="No">No<br>
                                                  <span class="checkmark"></span>
                                              </label>
                                          </div>
                                        </div>
                                             
<!--                                    <div class="form-row accuseduploadfrm_ accusedupload_0 accusedPerstat_" >-->
<!--                                    <input type="file" class="form-control inner-textfield preStatementFilefiles" id="preStatementFile_" name="preStatementFile_[]" multiple>-->
                                    <input type="hidden" id="cntpreStatementFile_0" value="0"> 
<!--                                    </div>-->
                                     <!-- FOR PRE-STATEMENT IMAGE -----> 
                                    <div class="accuseduploadfrm_0"> 
                                                                            <div class="form-group col-md-12 accusedPerstat_0" style="display:none">
                                            <div id="preStatementPreview_preview_0"></div>
                                        </div>
                                                                        </div>      
                                    <div class="form-group col-md-12 accuseduploadfrm_0 accusedPerstatdate_0 accusedPerstat_0" style="display:none">
                                        <label class="inner-label  accusedPer_0">
                                            Choose Date of Document
                                                                                    </label>
                                        <input type="text" class="form-control inner-textfield datepick personalstatementreqchkdate" id="date_0" name="date_0" value="">
                                        <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                    </div>   
                                    </div>
                                      <a href="https://wlor.wildcrimeassist.in/wlors/section6" class="listinBtn pull-left">Previous</a>
                                      <a href="./Description-Confess.php" class="listinBtn pull-left">Next</a>
                                    
                                       
                                </div></form>
                        </div>
                    </div> 
                </div>
            </div>

<div class="control-sidebar-bg"></div>
</div>


<?php
include BASEPATH.'pages/layout/footer.php';
?>