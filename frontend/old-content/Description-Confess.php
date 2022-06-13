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
                                Description of the Confessions
                                                                <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                            </h3>
    <form role="form" name="myForm" onsubmit="required()" class="form-horizontal" method="POST" action="https://wlor.wildcrimeassist.in/wlors/section" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="nON9yBt9rJJUgIy2ukkaHuoLjWYVOCq5bqPbyRj9">
                                <input type="hidden" name="accusesection7" value="accusesection7">
                                <input type="hidden" id="totalaccuArr" value="1">
                                <input type="hidden" name="accuse_count" value="eyJpdiI6IjhLb0NBeVJrd21sWmN2ZzExQXdKRVE9PSIsInZhbHVlIjoiT0lEczNnaTZGSDQzU2RLR0FcL0hSRlhyKytrMGNXcExKYTIycG1OT3RlWnM9IiwibWFjIjoiNTFkZjM2MzU5ZWJhZTcwYzM2Nzk5YzMxYWFhN2U0M2MxNzViMmQ4MjY2N2JlZjg3NTAzNzZlNDU4YmQwYmJjNCJ9">
                                <div class="form-row">
                                    <!-- FOR ACCUSED CONFESS YES CASE -->
                                                                        <input type="hidden" id="accusesinx_0" value="0">
                                                                        <div class="form-group col-md-12 " >
                                        <label class="inner-label" style="background:#00b1af !Important;color:#fff;"> 
                                            Accused 1                                                  
                                        </label>
                                        <input type="text" class="form-control inner-textfield "name="accused_0" value="tgtyhyhyhy" readonly="">
                                        <label class="inner-label ">
                                            Provide a brief description of the confession.
                                                                                    
                                        </label>
                                        <textarea class="form-control inner-textfield confessionBriefDescriptionInput" required="" placeholder="That he had been selling parakeets openly in the market for the past 15 years. He also confessed that he would source them from persons from a village in North Karnataka and sell them at a big profit at the pet shop." maxlength="" name="confessionBriefDescription_0"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required">
                                            Who was the confession made to?
                                                                                    <div class="hint">
                                            (Confession can be recorded only by ACF and above)
                                                                                    </div>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-8 ">
                                        <label class="inner-label required">
                                            Name of the officer
                                                                                    </label>
                                        <div class="form-row">
                                            <input type="text"  class="form-control inner-textfield" required id="" name="accusedConfessOfficer_0" value="">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="inner-label required">
                                            Designation of the officer
                                                                                    </label>
                                        <div class="form-row">
                                            <input type="text"  class="form-control inner-textfield" required id="" name="accusedConfessOfficerDesc_0" value="">  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1" >
                                    </div>
                                    <div class="form-group col-md-3 " >
                                        <a class="listLink" data-fancybox href="https://wlor.wildcrimeassist.in/images/document/confessionMade.png">
                                        <image src="https://wlor.wildcrimeassist.in/images/document/confessionMade.png" class="img-thumbnail" style="height:250px;margin-top:-147px;"/>
                                        </a>
                                    </div>
                                    <div class="form-group col-md-12">
                                    <label class="inner-label required">
                                        Did the accused sign the confession statement?
                                                                                <div class="hint">
                                            (Ensure there is a different confession statement for each accused)
                                                                                    </div>
                                    </label>   
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label class="radioBtnHolder">
                                           <input type="radio" name="confession_0" id="confession_0" required  value="Yes" >Yes
                                        <span class="checkmark"></span>
                                       </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="radioBtnHolder">
                                            <input type="radio" name="confession_0" id="confession_0" required value="No" >No
                                       <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="confession_0" style="display:none" >
                                    <div class="form-group col-md-12">
<!--                                        <label class="inner-label required">
                                            Upload a copy of the statement -->
                                            <!--                                        </label>-->
                                        <label class="inner-label required">
                                           Do you have copy of the statement ?
                                                                                  </label>
                                       
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                             <label class="radioBtnHolder">
                                                  <input type="radio" name="copy_statement_0" idattr="0"   class="copy_statement copy_statement_0" value="Yes" >Yes
                                              <span class="checkmark"></span>
                                             </label>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label class="radioBtnHolder">
                                                  <input type="radio" name="copy_statement_0" idattr="0"  class="copy_statement copy_statement_0" value="No" >No<br>
                                                  <span class="checkmark"></span>
                                              </label>
                                          </div>
                                        </div>
<!--                                        <div class="form-row divcopystatement" style="display:none">
                                                                                                <input type="file"  class="form-control inner-textfield" id="" name="" multiple> 
                                                                                                 <input type="file" class="form-control inner-textfield" id="" name=""  multiple>  
                                                                                         
                                        </div>-->
                                    </div>
                                    <!-- FOR statement IMAGE -----> 
                                    <div class="form-group col-md-12 divcopystatement0" >
                                                                            <div class="form-group col-md-12">
                                            <div id="image_previews_0"></div>
                                        </div>
                                                                        </div>    
                                    <div class="form-group col-md-12 divcopystatement0" >
                                        <label class="inner-label required">
                                            Choose Date of Document
                                                                                    </label>
                                        <input type="text" class="form-control inner-textfield datepick date4Input" id="date_0" name="date_0" value="">
                                        <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                    </div> 
                                </div>
                                                                        <!-- FOR ACCUSED CONFESS NO CASE -->    
                                    <a href="https://wlor.wildcrimeassist.in/wlors/section7" class="listinBtn pull-left">Previous</a>
                                    <a href="./Seizure-list.php" class="listinBtn pull-left">Next</a>
                                    
                                    </form>   
                                </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
<!-- ./wrapper -->

<?php
include BASEPATH.'pages/layout/footer.php';
?>