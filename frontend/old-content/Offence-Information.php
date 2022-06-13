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
                                     Record Information about the Offence
                                 <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                                 </h3>
                                     <form role="form"  class="form-horizontal" method="POST"  action="https://wlor.wildcrimeassist.in/wlors/section" enctype="multipart/form-data">
                                     <input type="hidden" name="_token" value="jpxoTQEzItenT55Oi5UFS4MRBNCiAevu2FYH45zi">
                                     <input type="hidden" name="section6" value="section6">
                                     <input type="hidden" name="czContainer_czMore_txtCount" value="">
                                     <div class="form-row btnAdd">
                                         <div class="form-group col-md-12">
                                             <label class="inner-label required">
                                             How was offence detected?
                                                                                              <div class="hint">
                                                 (Provide details of how you found out about the offence - intelligence/informants, patrolling, or some other method.)
                                                                                              </div>
                                             </label>
                                             <textarea  rows="3" cols="30" class="form-control inner-textfield" required placeholder="Intelligence was received on 12.12.1234 ­­­­­­­­­­­that two persons were about to deal in Scheduled birds, specifically parakeets on 12.12.1234 afternoon."  name="information"  >fmmrfvmgrfvkmkmgv</textarea>

                                         </div>
                                         <div class="form-group col-md-12">
                                             <label class="inner-label required">
                                                 Name of the investigating officer
                                                                                              </label>
                                            
                                             <input type="text" class="form-control inner-textfield" id="officer_team" required name="officer_team" value="rfrgtrgtrgtrg" >
                                         </div>
                                         <div class="form-group col-md-12 wrapperdiv">
                                                                                         
                                            <div>
                                                                                           <label class="inner-label required">
                                                Name of the team members
                                                                                             <div class="hint">
                                                 (Do not name more than 3 officers who will appear in the court as witnesses)
                                                                                              </div>
                                             </label>
                                                                                           <input type="text" class="form-control inner-textfield" id="officer_name"  required name="officerName[]"   value="gttrgtrgrtg" ><a href="javascript:void(0);" data_id="0"  class="remove_field" id="remove_field_0"><img src="../images/remove_fields.png">Remove Field</a>
                                             </div>
                                            
                                            
                                                                                  </div>
                                         <p><button class="add_fields" style="margin-left: -6px;"><img src='../images/add-fields.png'>Add More Fields</button></p>
                                         
                                         
                                         <div class="form-group col-md-12">
                                                <label class="inner-label">
                                                    Were there independent witnesses?
                                                                                                    <div class="hint">
                                                    (Not more than two independent witnesses are recommended.)
                                                                                                    </div></label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="witnessesRadio" required=""  class="witnessesRadio"  value="Yes">Yes
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="witnessesRadio" required=""  class="witnessesRadio" checked value="No">No
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                         <!-- IN CASE OF SELECT NO OPTION -->
                                         <div class="form-group col-md-12 witnessBoxnocase" style="display:block">
                                            <div class="form-group col-md-12">
                                              <label class="inner-label required">
                                                  Why were there no independent witnesses?
                                                                                                </label>
                                                <!--input type="text" placeholder="There were no independent witnesses as the crime occurred inside a Protected Area" class="form-control inner-textfield" id="no_withness" name="no_withness" value="" -->
                                          </div>
                                         </div>
                                         <div class="form-group col-md-12 witnessBoxnocase" style="display:block">
                                            <div class="form-group col-md-12">
                                                <div class="col-md-12">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="independent_witnesses" class="independent_witnesses"  value="No independent witnesses were available">No independent witnesses were available
                                                                                                           
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="independent_witnesses" class="independent_witnesses" checked value="People were unwilling to be independent witnesses therefore, all witnesses are departmental?">People were unwilling to be independent witnesses therefore, all witnesses are departmental
                                                                                                                <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="independent_witnesses"  class="independent_witnesses" value="Other">Other reason
                                                                                                                 <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <!--select class="form-control  inner-textfield independent_witnesses" id="independent_witnesses" name="independent_witnesses">
                                                  <option value="">Please Select</option>
                                                  <option value="No independent witnesses were available" >No independent witnesses were available</option>
                                                  <option value="People were unwilling to be independent witnesses therefore, all witnesses are departmental?" selected="">People were unwilling to be independent witnesses therefore, all witnesses are departmental?</option>
                                                  <option value="Other" >Other</option>
                                                </select-->
                                          </div>
                                         </div>
                                          <div class="form-group col-md-12 otherval" style="display:none">
                                            <input type="text" class="form-control inner-textfield "   id="independent_witnesses_other" name="independent_witnesses_other" value="">
                                          </div>
                                          <div class="form-group col-md-12 witnessesdiv witnessBox" >
                                           
                                            <div class="row">
                                                                                            <div class=" col-md-12 m-b-25"><input type='text' class='form-control witnessesName  inner-textfield ' placeholder="Name of independent witness"    value=""  name='witnessesName[]'>&nbsp;<textarea type="text" class="form-control witnessAddress inner-textfield"  id="witnessAddress" placeholder="Address of independent witness"  name="witnessAddress[]" ></textarea><a href="javascript:void(0);" data_id="0"  class="removeon_field" id="removeon_field_0"><img src="../images/remove_fields.png">Remove Field</a></div>
                                                                                          </div>
                                             </div>
                                            <p><button class="addon_fields witnessBox" style="margin-left: -6px;"><img src='../images/add-fields.png'>Add More Fields</button></p>
                                       
                                               <a href="https://wlor.wildcrimeassist.in/wlors/section5" class="listinBtn pull-left">Previous</a>
                                               <a href="./Operation-details.php" class="listinBtn pull-left">Next</a>
                                        
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
<!-- ./wrapper -->

<?php
include BASEPATH.'pages/layout/footer.php';
?>