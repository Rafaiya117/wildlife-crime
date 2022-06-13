<?php
include '../config/config.php';
include BASEPATH.'/pages/layout/header.php';
include BASEPATH.'/pages/layout/sidebar.php';
include BASEPATH.'/pages/layout/nav.php';
//die();
?>
  
 
  <div class="box-body">
                        <div class="row">
                         
                            <div class="col-md-12">
                            <div class="innerPage-box">
                                <h3 class="innerPage-head">
                                    Arrest Procedure
                                 <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                                </h3>
                                     
                                    <form role="form"  class="form-horizontal" id="subscribeForm" method="POST" action="https://wlor.wildcrimeassist.in/wlors/section" enctype="multipart/form-data">
                                        <div class="form-row">
                                          <div class="form-group col-md-12">
                                               <label class="inner-label required">
                                                   Was the offence detected by an enforcement agency other than the Forest Department?
                                                                                                   </label>
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="enforcementagency" required="" class="enforcementagency" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="enforcementagency" required="" class="enforcementagency" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                  </div>
                                                  <div class="form-group col-md-12 enforcementagency_dep" style="display:none">
                                                    <select class="form-control  inner-textfield " id="enforcementagency_dep" name="enforcementagency_dep">
                                                      <option value="">Please Select</option>
                                                      <option value="Police" >Police</option>
                                                      <option value="Central Industrial Security Force (CISF)" >Central Industrial Security Force (CISF)</option>
                                                      <option value="Border Security Force (BSF)" >Border Security Force (BSF)</option>
                                                      <option value="Sashastra Seema Bal (SSB)" >Sashastra Seema Bal (SSB)</option>
                                                      <option value="Railway Protection Force (RPF)" >Railway Protection Force (RPF)</option>
                                                      <option value="Indo-Tibetan Border Police (ITPB)" >Indo-Tibetan Border Police (ITPB)</option>
                                                      <option value="Government Railway Police (GRP)" >Government Railway Police (GRP)</option>
                                                      <option value="Postal Department" >Postal Department</option>
                                                      <option value="Assam Rifles" >Assam Rifles</option>
                                                      <option value="Customs" >Customs</option>
                                                      <option value="Other" >Other</option>
                                                    </select>
                                                  </div>
                                                  <div class="form-group col-md-12 otherval" style="display:none">
                                                  <input type="text" class="form-control inner-textfield"  id="enforcementagency_dep_other" name="enforcementagency_dep_other" value="">
                                                  </div>
                                                  </div>
                                           </div>
                                          </div>
                                          <div class="form-group col-md-12 enforcementagency_dep" style="display:none">
<!--                                                 <label class="inner-label required">
                                                     Upload primary witness statements of enforcement agency officers.-->
                                                     <!--                                                </label>-->
                                                <label class="inner-label required">
                                                   Upload primary witness statements of the detecting enforcement agency's officer(s)
                                                                                                      
                                               </label>
                                               
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="witness_statementsupload"  class="witness_statementsupload" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="witness_statementsupload"  class="witness_statementsupload" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                  </div>
                                                </div>
<!--                                                <div class="form-row witness_statementsuploaddiv" style="display:none">
                                                                                                 <input type="file"  id="witness_statements" name="witness_statements[]"    class="form-control  inner-textfield"  >
                                                                                                  <input type="file" id="witness_statements" name="witness_statements[]" class="form-control  inner-textfield uploadFiles" >
                                                                                                  <input type="hidden" id="witness_statementscnt" value="" >
                                                 for document only   
                                                 </div>                                                                                       -->
                                             </div>
                                            <div class="form-group col-md-12 enforcementagency_dep witness_statementsuploaddiv" style="display:none">
                                                <div class="form-group col-md-12">
                                                    <div id="witness_statements_12"></div>
                                                </div>
                                                                                        </div>
                                            <div class="form-group col-md-12 enforcementagency_dep witness_statementsuploaddiv" style="display:none">
                                                <label class="inner-label required">
                                                     Choose Date of primary witness statements
                                                </label>
                                            <input type="text" class="form-control inner-textfield datepick handoverLettersDocumentInput"  id="primary_witness_statements_date" name="primary_witness_statements_date" value="">
                                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                             </div>
                                            <div class="form-group col-md-12 enforcementagency_dep" style="display:none">
<!--                                                 <label class="inner-label required">
                                                     Upload the handover/takeover document and receipt from the enforcement agency.-->
                                                     <!--                                                </label>-->
                                                <label class="inner-label required">
                                                   Do you have handover/takeover document and receipt from the enforcement agency?
                                                </label>
                                               
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="takeover_statementsupload"  class="takeover_statementsupload" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="takeover_statementsupload"  class="takeover_statementsupload" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                  </div>
                                                </div>
<!--                                                <div class="takeover_statementsdiv" style="display:none">
                                                                                                 <input type="file"  id="takeover_statements" name="takeover_statements[]"    class="form-control  inner-textfield"  >
                                                                                                  <input type="file" id="takeover_statements" name="takeover_statements[]" class="form-control  inner-textfield uploadFiles" >
                                                                                                  <input type="hidden" id="takeover_statementscnt" value="" >
                                                 for document only   
                                                </div>-->
                                             </div>
                                            <div class="form-group col-md-12 enforcementagency_dep takeover_statementsdiv" style="display:none">
                                              <div class="form-group col-md-12">
                                                    <div id="takeover_statements_13"></div>
                                                </div>
                                                  </div>
                                            <div class="form-group col-md-12  enforcementagency_dep takeover_statementsdiv" style="display:none">
                                                <label class="inner-label required">
                                                     Choose Date of handover/takeover
                                                </label>
                                                <input type="text" class="form-control inner-textfield datepick handoverLettersDocumentInput"  id="handover_takeover_date" name="handover_takeover_date" value="">
                                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                             </div>
                                            <div class="form-group col-md-12 enforcementagency_dep" style="display:none">
                                               <label class="inner-label required">
                                                   Was the case diary entry procured from the enforcement agency making the arrest
                                             </label>
                                                                                           
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="casediary"  class="casediary" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="casediary"  class="casediary" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                  </div>
                                                </div>
                                                 
                                            </div>
                                            <div class="form-group col-md-12  enforcementagency_dep casediaryupload casediaryuploaddiv" >
                                                     <label class="inner-label required">
                                                   Do you have case diary entry?
                                            </label>
                                                 
                                                  <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                       <label class="radioBtnHolder">
                                                            <input type="radio" name="casediaryuploadres"  class="casediaryuploadres" value="Yes" >Yes
                                                        <span class="checkmark"></span>
                                                       </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="casediaryuploadres"  class="casediaryuploadres invalid" value="No" >No<br>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="hidden text-danger invalid-msg"></span>
                                                    </div>
                                                  </div>   
                                                     
                                                     <!--                                                <div class="casediaryuploaddiv casediaryupload_div" style="display:none">    
                                                                                                     <input type="file" id="casediary_statements" attr="here"  name="casediary_statements[]"    class="form-control  inner-textfield"  >
                                                                                                      <input type="file"  id="casediary_statements"  name="casediary_statements[]" class="form-control  inner-textfield uploadFiles" >
                                                                                                      for document only   
                                                   <input type="hidden"  id="casediary_statementscnt" value="0" >
                                                 </div>-->
                                             </div>
                                             
                                             <div class="form-group col-md-12 casediaryupload enforcementagency_dep casediaryuploaddiv casediaryupload_div" >
                                                <div class="form-group col-md-12">
                                                    <div id="casediary_statements_13"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 casediaryupload enforcementagency_dep casediaryuploaddiv casediaryupload_div" style="display:block">
                                                <label class="inner-label required">
                                                Choose date of case diary entry
                                            </label>
                                                <input type="text" class="form-control inner-textfield datepick handoverLettersDocumentInput"  id="casediary_date" name="casediary_date" value="">
                                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                             </div>
                                            <div class="form-group col-md-12 enforcementagency_dep" style="display:none">
                                               <label class="inner-label required">
                                                   Did the enforcement agency conduct a spot panchnama ?
                                                </label>
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="panchnama"  class="panchnama" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="panchnama"  class="panchnama" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                  </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-group col-md-12 enforcementagency_dep panchnamaupload" style="display:none">
                                            <label class="inner-label required panchnamaupload" >
                                                   Do you have copy of spot panchnama ?
                                               </label>
                                                 
                                                  <div class="form-row enforcementagency_dep panchnamaupload" style="display:none">
                                                    <div class="form-group col-md-6">
                                                       <label class="radioBtnHolder">
                                                            <input type="radio" name="panchnamauploadres"  class="panchnamauploadres" value="Yes" >Yes
                                                        <span class="checkmark"></span>
                                                       </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="panchnamauploadres"  class="panchnamauploadres invalid" value="No" >No<br>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="hidden invalid-msg text-danger"></span>
                                                    </div>
                                                  </div>   
                                                     <!--                                                <div class="panchnama_statementsdiv">    
                                                                                                 <input type="file" id="panchnama_statements"  name="panchnama_statements[]"    class="form-control  inner-textfield"  >
                                                                                                  <input type="file"  id="panchnama_statements"  name="panchnama_statements[]" class="form-control  inner-textfield uploadFiles" >
                                                                                                  <input type="hidden"  id="panchnama_statementscnt" value="" >
                                                 for document only   
                                                 </div>-->
                                             </div>
                                             <div class="form-group col-md-12 panchnama_statementsdiv panchnamaupload enforcementagency_dep" style="display:none">
                                              <div class="form-group col-md-12">
                                                    <div id="panchnama_statements_13"></div>
                                                </div>
                                             </div>
                                            <div class="form-group col-md-12 panchnama_statementsdiv panchnamaupload enforcementagency_dep" style="display:none">
                                                <label class="inner-label required">
                                                     Choose Date of panchnama
                                             </label>
                                                <input type="text" class="form-control inner-textfield datepick handoverLettersDocumentInput" id="panchnama_date" name="panchnama_date" value="">
                                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                             </div>
                                            <div class="form-group col-md-12 enforcementagency_dep" style="display:none">
                                               <label class="inner-label required">
                                                   Did a re-seizure take place ?
                                            </label>
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="reseizure"  class="reseizure" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="reseizure"  class="reseizure" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 enforcementagency_dep reseizureupload" style="display:none">
                                                <label class="inner-label required reseizureupload" >
                                                   Do you have copy of re-seizure?
                                                </label>
                                                 
                                                  <div class="form-row reseizureupload">
                                                    <div class="form-group col-md-6">
                                                       <label class="radioBtnHolder">
                                                            <input type="radio" name="reseizureuploadres"  class="reseizureuploadres" value="Yes" >Yes
                                                        <span class="checkmark"></span>
                                                       </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="reseizureuploadres"  class="reseizureuploadres invalid" value="No" >No<br>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="hidden invalid-msg text-danger"></span>
                                                    </div>
                                                  </div>
                                                     <!--                                                 <div class="reseizureuploadresdiv">   
                                                                                                 <input type="file" id="reseizure_statements"  name="reseizure_statements[]"    class="form-control  inner-textfield"  >
                                                                                                  <input type="file"  id="reseizure_statements"  name="reseizure_statements[]" class="form-control  inner-textfield uploadFiles" >
                                                                                                  for document only   
                                                <input type="hidden"  id="reseizure_statementscnt" value="0" >
                                                </div>-->
                                             </div>
                                             <div class="form-group col-md-12 reseizureupload enforcementagency_dep reseizureuploadresdiv" style="display:none">
                                                <div class="form-group col-md-12">
                                                    <div id="reseizure_statements_13"></div>
                                                </div>
                                             </div>
                                            <div class="form-group col-md-12 reseizureupload enforcementagency_dep reseizureuploadresdiv" style="display:none">
                                                <label class="inner-label required">
                                                     Choose Date of re-seizure
                                                </label>
                                                <input type="text" class="form-control inner-textfield datepick handoverLettersDocumentInput" id="reseizure_date" name="reseizure_date" value="">
                                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                             </div>                  
                                        <input type="hidden" name="_token" value="nON9yBt9rJJUgIy2ukkaHuoLjWYVOCq5bqPbyRj9">
                                         <input type="hidden" name="section9" value="section9">
                                         <input type="hidden" name="accuse_count"  value="eyJpdiI6ImpRdDJWU0VtU3diUU1NV1AwNzFjYVE9PSIsInZhbHVlIjoiTml2XC94U3NrSXBzS05hZkRYeE9qb2ZVTG1yOGVvXC91QjRUeTJJcFwvUllHWT0iLCJtYWMiOiI2ZmZlYzFkZTE3ZWU3NjU1Y2I1MDk2OTkwZGZlY2VjOTMzMTRkMGMxZmMyN2YwNzE4YzVlYzU0MjVkNTMyMDFkIn0=">
                                         <input type="hidden"  id="accusecount_inx" value="1">
                                                                                  <input type="hidden"  id="accscntinx_0" value="0">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="inner-label" style="background:#00b1af !Important;color:#fff;"> Arrested Person 1</label>
                                                 <label class="inner-label required">
                                                     Which of the accused persons were arrested?
                                                </label>
                                                  <input type="text" readonly="" class="form-control  inner-textfield" name="arrestedPerson_0" required value="tgtyhyhyhy">
                                             </div>
                                            <div class="form-group col-md-12" >
                                                 <label class="inner-label required">
                                                     Choose Date of Arrest
                                                 </label>
                                                <input type="text" class="form-control inner-textfield datepick handoverLettersDocumentInput" required="" id="arrestDate_0" name="arrestDate_0" value="">
                                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                             </div>
                                            <div class="form-group col-md-12 customTimepicker">
                                                 <label class="inner-label required">
                                                     What was the time of arrest?
                                                    <div class="hint">
                                                         Arrest should be atleast 3-4 hours after time of search and seizure
                                                     </div>
                                                 </label>
                                                 <input type="text"  id="arrestedTime0" class="form-control  inner-textfield timepicker" name="arrestedTime_0" required value="">
                                                 <i class="fa fa-clock-o" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                             </div>
                                             <div class="form-group col-md-8">

                                                <label class="inner-label required">
                                                   Do you have copy of arrest and personal search memo?
                                                </label>
                                               
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="searchmemo_upload_0" idattr="0" required="" class="searchmemo_upload searchmemo_upload_0" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="searchmemo_upload_0" idattr="0" required="" class="searchmemo_upload invalid searchmemo_upload_0" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                      <span class="hidden invalid-msg text-danger"></span>
                                                  </div>
                                                </div>
<!--                                                <div class="searchmemo_uploaddiv_" style="display:block">
                                                                                                 <input type="file"  id="serchmemo_" name="serchmemo_[]" multiple   class="form-control  inner-textfield"  >
                                                                                                  <input type="file" id="serchmemo_" name="serchmemo_[]" multiple  class="form-control  inner-textfield uploadFiles" >
                                                                                                  <input type="hidden" id="searchmemo_uploadcnt_" value="" >
                                                 for document only   
                                                </div>-->
                                             </div>
                                            <div class="form-group col-md-1"></div>
                                             <div class="form-group col-md-3" >
                                                <a class="listLink" data-fancybox href="https://wlor.wildcrimeassist.in/images/document/searchmemo.jpg">
                                                <image src="https://wlor.wildcrimeassist.in/images/document/searchmemo.jpg" class="img-thumbnail" style="height:250px;"/>
                                                </a>
                                            </div>
                                            <div class="form-group col-md-12 searchmemo_uploaddiv_0" >
                                                                                             <div class="form-group col-md-12">
                                                    <div id="serchmemo_image_previews_0"></div>
                                                </div>
                                            </div> 
                                            
                                             <div class="form-group col-md-8 searchmemo_uploaddiv_0" >
                                                 <label class="inner-label required">
                                                     Choose Date of Document 
                                                </label>
                                                <input type="text" class="form-control inner-textfield datepick handoverLettersDocumentInput"  id="memoDate_0" name="memoDate_0" value="">
                                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                             </div>
                                            
                                              <div class="form-group col-md-12">
                                            <label class="inner-label required">
                                                Was medical examination conducted
                                             <div class="hint">
                                                    (Provide name of the hospital where medical examination of the accused was conducted.)
                                            </div>
                                        </label> 
                                    </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                               <label class="radioBtnHolder">
                                                    <input type="radio" name="wasMedicalConduct_0" required class="wasMedicalConduct_0 wasMedical" value="Yes" >Yes
                                                <span class="checkmark"></span>
                                               </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="wasMedicalConduct_0" required class="wasMedicalConduct_0 wasMedical" value="No" >No</br>
                                               <span class="questionTip MedicalMsg" style="display:none;font-weight:bold;font-size:20px">[Cannot proceed if medical examination has not been conducted.]</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            </div>
                           
                                            <div class="form-group col-md-12" >
                                                <div class="row">
                                                <div class="col-md-3">
                                                <a class="listLink" data-fancybox="gallery" href="https://wlor.wildcrimeassist.in/images/document/enclosures06.jpg">
                                                <image src="https://wlor.wildcrimeassist.in/images/document/enclosures06.jpg" class="img-thumbnail" style="height:200px;"/>
                                                </a>
                                                </div>
                                                </div>    
                        
                                            </div>
                                            
                                             <div class="form-group col-md-12">
                                                 <label class="inner-label required">
                                                 Provide name of the hospital where medical examination of the accused was conducted.
                                             </label>
                                                 
                                                 <input type="text" class="form-control  inner-textfield" required name="hospital_0" value="">
                                                 &nbsp;
                                                 
                                                 
                                                  
                                                  <div class="hospitaldocupload_0">
                                                 <!--                                                 <input type="file" class="form-control  inner-textfield"   id="uploadFile_" name="uploadFile_[]" multiple>-->
                                             <input type="hidden" id="uploadFilecnt_0" value="0">
                                                 </div>
                                             </div>
                                            <div class="form-group col-md-12 hospitaldocupload_0">
                                                <div class="form-group col-md-12">
                                                    <div id="image_preview_0"></div>
                                                </div>
                                            </div>
                                            
                                        <div class="form-group col-md-12">
<!--                                                 <label class="inner-label required">
                                                     Upload Medical Report-->
                                                     <!--                                                 </label>-->
                                                 <label class="inner-label required">
                                                 Do you have the request for medical examination and copy of medical reports?
                                            </label>
                                                 
                                                  <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                       <label class="radioBtnHolder">
                                                            <input type="radio" name="medicaluploadFiledoc_0" attrid="0" required="" class="medicaluploadFiledoc medicaluploadFiledoc_0" value="Yes" >Yes
                                                        <span class="checkmark"></span>
                                                       </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="medicaluploadFiledoc_0" required="" attrid="0" class="medicaluploadFiledoc medicaluploadFiledoc_0 invalid" value="No" >No<br>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="hidden invalid-msg text-danger"></span>
                                                    </div>
                                                  </div>
                                                <div class="medicaluploadFilediv_0">
                                                    <a class="listLink" data-fancybox="gallery" href="https://wlor.wildcrimeassist.in/images/document/medical-report.jpg">
                                                    <image src="https://wlor.wildcrimeassist.in/images/document/medical-report.jpg" class="img-thumbnail" style="height:200px;"/>
                                                    </a>
                                                </div>
                                            </div>
                                                 <div class="medicaluploadFilediv_0" >
                                                 <!--                                                 <input type="file" class="form-control  inner-textfield "   id="medicaluploadFile_" name="medicaluploadFile_[]" multiple>-->
                                                <input type="hidden" id="medicaluploadFilecnt_0" value="0">
                                                 </div>
                                             </div>
                                        <div class="form-group col-md-12 medicaluploadFilediv_0" >
                                                <div class="form-group col-md-12">
                                                    <div id="image_preview1_0"></div>
                                                </div>
                                             </div> 
                                        <div class="form-group col-md-12 medicaluploadFilediv_0" id="medicalExaminationDocument" >
                                        <label class="inner-label required">
                                            Choose Date of Document 
                                          </label>
                                        <input type="text" class="form-control inner-textfield datepick medicalExaminationDocumentInput" required id="date0" name="date0" value="">
                                        <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                        </div> 
                                        <!--START IMAGE UPLOAD BLOCK -->
                                        <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Document used to verify accused person.
                                            </label>
                                                
                                                <select required class="form-control  inner-textfield " id="Add_0_documentSelect"  name="otherID_0">
                                                    <option value="">Please Select</option>
                                                    <option value="Aadhar_License" >Aadhar</option>
                                                    <option value="Driving_License" >Driving License</option>
                                                    <option value="Passport" >Passport</option>
                                                    <option value="Ration_Card" >Ration Card</option>
                                                    <option value="PAN_Card" >PAN Card</option>
                                                    <option value="other_ID" >Other ID</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 otherIDName_0" id = "Add_0_otherIDName" >
                                                <label class="inner-label required">
                                                    Other ID Name
                                                                                                    </label>
                                                <input type="text" class="form-control inner-textfield "  name="OtherIDName_0" value="" >
                                            </div> 
                                            <div class="form-group col-md-12 uploadedDocumentDiv" id = "Add_0_uploadedDocumentDiv" style='display:block'>
<!--                                                <label class="inner-label required">
                                                   Upload picture of ID/Document.-->
                                                    <!--                                                </label>-->
                                                <label class="inner-label required">
                                                     Do you have picture of ID/Document?
                                                 </label>
                                                 
                                                  <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                       <label class="radioBtnHolder">
                                                            <input type="radio" name="Add_0_uploadFilechk" attrid="0" class="Add_0_uploadFilechkdoc Add_0_uploadFilechk add_uploadFile_res" value="Yes"  required>Yes
                                                        <span class="checkmark"></span>
                                                       </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="Add_0_uploadFilechk" attrid="0" class="invalid Add_0_uploadFilechkdoc Add_0_uploadFilechk add_uploadFile_res" value="No"  required>No<br>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="hidden invalid-msg text-danger"></span>
                                                    </div>
                                                  </div>
                                                  <div class="form-row Add_0_uploadFilechkdiv"  >
                                                <!--                                                <input type="file" class="form-control inner-textfield " id="Add__uploadFile"  name="Add__uploadFile[]" multiple >-->
                                                </div> 
                                            </div>
                                             <div class="form-group col-md-12 Add_0_uploadFilechkdiv" >
                                                     <div class="form-group col-md-12">
                                                        <div id="image_previewdockuse_0"></div>
                                                    </div>
                                              </div>
                                            <!--END IMAGE UPLOAD BLOCK-->
                                            <div class="form-group col-md-12">
                                            <label class="inner-label required">
                                                Were the accused persons kept in police custody overnight?
                                          </label>
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                               <label class="radioBtnHolder">
                                                    <input type="radio" name="accusedPersonsCustody_0" idattr="0" required class="accusedPersonsCustodyrdbtn accusedPersonsCustody_0" value="Yes" >Yes
                                                <span class="checkmark"></span>
                                               </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="accusedPersonsCustody_0" idattr="0" required class="accusedPersonsCustodyrdbtn accusedPersonsCustody_0" value="No" >No
                                               <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            </div>
                                            </div>
                                            
                                            <div class="form-group col-md-12 Files_0 " >
<!--                                                 <label class="inner-label required">
                                                     Upload handover and takeover letters-->
                                                     <!--                                                </label>-->
                                                <label class="inner-label required">
                                                     Do you have handover and takeover letters?
                                                </label>
                                                 
                                                  <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                       <label class="radioBtnHolder">
                                                            <input type="radio" name="takeover_letters_0" attrid="0"  class="takeover_letters_0doc takeover_letters_0 takeover_lettersupload" value="Yes" >Yes
                                                        <span class="checkmark"></span>
                                                       </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="takeover_letters_0"  attrid="0" class="invalid takeover_letters_0doc takeover_letters_0 takeover_lettersupload" value="No" >No<br>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="hidden invalid-msg text-danger"></span>
                                                    </div>
                                                  </div>
                                                  <div class="takeover_letters_0div" >
                                                    <!--                                                     <input type="file"  id="uploadFiles_" name="uploadFiless_[]" multiple  class="form-control  inner-textfield" >-->
                                                                                                         <!-- for document only -->  
                                                  </div>
                                                
                                              </div>
                                            <div class="form-group col-md-12  Files_0 takeover_letters_0div" >
                                                    <div class="form-group col-md-12 1accusedPersonsCustodyDesc">

                                                    <div id="image_previews_0"></div>
                                                   
                                                </div>
                                             </div>
                                            <div class="form-group  Files_0 takeover_letters_0div col-md-12 arrestdate_0" ">
                                             <label class="inner-label required">
                                                 Choose Date of Document
                                             </label>
                                                <input type="text" class="form-control inner-textfield datepick handoverLettersDocumentInput"  id="date_100" name="date_100" value="">
                                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>   
                                            </div>  
                                            <div class="form-group col-md-12 pc_0" >
                                                <!-- for police station name only --> 
                                                <label class="inner-label required">
                                                    What is the name of the police station?
                                                </label>
                                                <input type="text" class="form-control  inner-textfield" id="police_station_0"  name="police_station_0" value="">
                                            </div>
                                            
                                            
                                           <a href="https://wlor.wildcrimeassist.in/wlors/section8" class="listinBtn pull-left">Previous</a>  
                                          <input type="submit" class="listinBtn BtnSubmit" id="listinBtnsbt" value="Next" title="Next" name="submit">  
                                          <input type="button" class="listinBtn BtnDemo" style="display:none" value="Next1" title="Next" name="submitDemo">  
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