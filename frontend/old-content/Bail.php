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
                                        Bail
                                      <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                                    </h3>
                                      
                                   
                                    <form role="form"  class="form-horizontal" id="subscribeForm" method="POST" action="https://wlor.wildcrimeassist.in/wlors/section" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="nON9yBt9rJJUgIy2ukkaHuoLjWYVOCq5bqPbyRj9">
                                        <input type="hidden" name="section10" value="section10">
                                        <input type="hidden" name="accuse_count" value="eyJpdiI6IlZDQ1U4U2lvWFdyYjlzXC9Rd3JOeEJnPT0iLCJ2YWx1ZSI6IjhyaGl2RnhHVG9pNExzVGJ3dnlpbDY0dlR4SWlhNUNmeDBzZytmM1N3MU09IiwibWFjIjoiYmFiZTFlNzc3M2U5YzkyMWMwYTE5YTgzMGVkZjA3YzM4ZmQxZjI4NzY0MGY1NDRkNWJkMGE4ODNjMTU5YjBmMyJ9">
                                        <div class="form-group col-md-12">
                                            <label class="inner-label">
                                                Give a brief description of the magnitude / scale on which the accused were operating.
                                                                                            <div class="hint">
                                                (Provide details of inter state trade of articles/ wild animal, indication of it being an organized crime with many players, chain of custody of animal articles)
                                                                                            </div>
                                            </label>
                                            <textarea class="form-control  inner-textfield"  placeholder="That the arrested persons submitted in their statements that they had procured the Scheduled animal and birds from XYZ area and were about to send them to ABC area for further transit. It is also clear from examination of their mobile phones that they are part of a highly organized criminal organization that traffics wildlife across borders. The authenticity of this information needs to be verified and the criminal chain operating throughout its transit needs to be thoroughly investigated.That the arrested persons are part of an organized wildlife trafficking group smuggling parakeets and other wildlife contrabands. Enlarging the arrested persons are this point of time will allow them to alert all such links thereby eliminating all chances of their apprehension.
                                                       " maxlength="50000" name="accusedOperating"></textarea>
                                        </div>
                                        <input type="hidden" id="totalcnt" value="1"> 
                                                                                    <input type="hidden" id="accusedinxs_1" value="0"> 
                                            <div class="form-group col-md-12">
                                                <label class="inner-label" style="background:#00b1af !Important;color:#fff;"> Bail for tgtyhyhyhy                                                </label>
                                                <label class="inner-label required">
                                                    Is this second or subsequent offence by the accused under WLPA?.
                                                                                                    <div class="hint">
                                                    (Meaning of a second or subsequent offence is that the accused should have been convicted before - If only a POR/Complaint was filed against him, mention that he has other proceedings ongoing against him for similar crimes)
                                                     
                                                </div>
                                                </label>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="subsequent_0" id="" required class="subsequent_0" value="Yes" >Yes
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="subsequent_0" id="" required class="subsequent_0" value="No" >No
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 subsequentDescription_0" >
                                                <label class="inner-label required">
                                                    Give details in brief.
                                                     
                                                </label>
                                                <textarea   class="form-control  inner-textfield subsequentOffence_0" maxlength="150" name="subsequentOffence_0" ></textarea>
                                            </div>
                                        <div class="form-group col-md-12 uploadFile_0" >
<!--                                                <label class="inner-label required">
                                                    Upload a copy of order convicting the accused-->
                                                     
<!--                                                </label>-->
                                                <label class="inner-label required">
                                                   Do you have copy of order convicting the accused?
                                                                                                  </label>
                                               
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                     <label class="radioBtnHolder">
                                                          <input type="radio" name="convicting_res_0" arrid="0"  class="convicting_res convicting_res_0" value="Yes" >Yes
                                                      <span class="checkmark"></span>
                                                     </label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                      <label class="radioBtnHolder">
                                                          <input type="radio" name="convicting_res_0" arrid="0"  class="invalid convicting_res convicting_res_0" value="No" >No<br>
                                                          <span class="checkmark"></span>
                                                      </label>
                                                      <span class="text-danger invalid-msg"></span>
                                                  </div>
                                                </div>
                                                <div class="form-row convictingdiv_0 ">
<!--                                                <input type="file" id="uploadFile_" name="uploadFile_[]" multiple  class="form-control  inner-textfield" >-->
                                                <input type="hidden" id="uploadcnt_" value="" >
                                                </div>
                                            </div>
                                            <div class="convictingdiv_0 subsequentDescription_0"> 
                                                                                            <div class="form-group col-md-12">
                                                    <div id="image_preview_0"></div>
                                                </div>
                                                                                              </div>
                                              <div class="form-group col-md-12 subsequentDescription_0 convictingdiv_0 date_0" >
                                                <label class="inner-label required">
                                                    Choose Date of Document
                                                                                                    </label>
                                                <input type="text" class="form-control inner-textfield datepick"  id="date_0" name="date_0"  value="" >
                                                 <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                            </div> 
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Is the accused a habitual offender? 
                                                                                                    <div class="hint">
                                                    Habitual offender is one who has been implicated in other cases under Wild Life Act, 1972 before
                                                                                                    </div>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="accusedHabitualoffender_0" required class="accusedHabitualoffender_0" value="Yes" >Yes
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="accusedHabitualoffender_0" required class="accusedHabitualoffender_0" value="No" >No
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Is the accused likely to
                                                                                                    </label>
                                                <div class="form-row">
                                                    <fieldset id="cbgroup0">
                                                    <div class="form-group col-md-6">
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox"   name="RunAwayFromTown_0[]" id="RunAwayFromTown_0" class="accusedHabitual_0" value="Run away from town"  >
                                                            Run away from town 
                                                                                                                        <span class="checkbox-checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="RunAwayFromTown_0[]" id="RunAwayFromTown_0" class="accusedHabitual_0" value="Run away from State/ Country"    >
                                                            Run away from State/ Country 
                                                                                                                        <span class="checkbox-checkmark"></span>
                                                        </label>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox"  name="RunAwayFromTown_0[]" id="RunAwayFromTown_0" class="accusedHabitual_0" value="Influence witnesses in his favour"  >
                                                            Influence witnesses in his favour
                                                                                                                        <span class="checkbox-checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox"   name="RunAwayFromTown_0[]" id="RunAwayFromTown_0" class="accusedHabitual_0" value="Belong to a nomadic tribe"  >
                                                            Belong to a nomadic tribe 
                                                                                                                        <span class="checkbox-checkmark"></span>
                                                        </label>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox"  name="RunAwayFromTown_0[]" id="RunAwayFromTown_0" class="accusedHabitual_0" value="Gave false address during arrest"  >
                                                            Gave false address during arrest  
                                                                                                                        <span class="checkbox-checkmark"></span>
                                                        </label>
                                                    </div>
                                                    
                                                                                                        <div class="form-group col-md-6">
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox"  name="RunAwayFromTown_0[]" id="RunAwayFromTown_0" class="accusedHabitual_0" value="Is politically well connected"  >
                                                            Is politically well connected 
                                                                                                                        <span class="checkbox-checkmark"></span>
                                                        </label>
                                                    </div>
                                                  </fieldset>
                                                </div>
                                            </div>
                                                                                    <a href="https://wlor.wildcrimeassist.in/wlors/section9" class="listinBtn pull-left">Previous</a>
                                            <input type="submit" id="listinBtnsbt" class="listinBtn" value="Next" name="submit" title="Next" style="margin-top:5px;">
                                        </div>
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