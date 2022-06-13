<?php
include '../config/config.php';
include BASEPATH.'/pages/layout/header.php';
include BASEPATH.'/pages/layout/sidebar.php';
include BASEPATH.'/pages/layout/nav.php';
//die();
?>




 
<!---->

<div class="content-wrapper" style="min-height: 901px;"> 
      
      <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="innerPage-box">
                                    <h3 class="innerPage-head">
                                        Species Details
                                       <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                                         </h3>
                                     <form role="form"  class="form-horizontal" id="subscribeForm21" method="POST" action="./Section-Laws.php" enctype="multipart/form-data">
                                      
                                        <input type="hidden" name="_token" value="ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8">
                                         <div class="row speciesDetails">
                                           <div class="col-md-12">
                                                
                                               <label class="radioBtnHolder">
                                                <input type="radio" name="optradio" id="input-part" class="part"  value="1164" required >&nbsp;
                                                <input type="hidden" name="find_species" value="find_species">
                                                <input type="hidden" name="species_id" value="1164">
                                                <input type="hidden" name="schedule" value="I">
                                                <input type="hidden" name="part" value="I">
                                                <input type="hidden" name="species_find" value="1164">
                                                <span class="checkmark"></span>
                                               </label>
                                             </div> 
                                             
                                             <input type="hidden" name="definition" value="trophy,trophy,trophy,trophy" >
                                           <div class="col-md-4">
                                               
                                               <a data-fancybox href="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5d36e7648e2ca.png"><img src="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5d36e7648e2ca.png" class="img-responsive speciesimg" alt="" style="height:70px    width: 50px;"></a> 
                                                                                         </div>
                                            <div class="col-md-8">
                                               <div class="row m-b-20">
                                                    <div class="col-md-6"><strong>Name:</strong></div>
                                                    <div class="col-md-6">Tiger </div>
                                                </div>
                                                <div class="row m-b-20">
                                                    <div class="col-md-6"><strong>Scientific Name:</strong></div>
                                                    <div class="col-md-6">Panthera tigris</div>
                                                </div>
                                                <div class="row m-b-20">
                                                    <div class="col-md-6"><strong>Schedule/Part/Entry:</strong></div>
                                                    <div class="col-md-6">I/I/39</div>
                                                </div>
                                                <div class="row m-b-20">
                                                    <div class="col-md-6"><strong>IUCN:</strong></div>
                                                    <div class="col-md-6">EN</div>
                                                </div>
											</div>

											<div class="col-md-12">
                                                <div class="row m-b-20 tarde-label-wrapper">
                                                    <div class="col-xs-2"><strong><label><span style="color:red;">*</span>Part seized</strong></div>
                                                    <div class="col-xs-2">&nbsp;</div>
                                                    <div class="col-xs-2"><strong><label><span style="color:red;">*</span>  Quantity</strong></div>
                                                    <div class="col-xs-2"><strong><label>  Dimensions</strong></div>
                                                    <div class="col-xs-2"><strong><label>  Suspected</strong></div>
                                                    
                                                </div>
                                                 <div class="field_wrapper tarde-field-wrapper">
                                                    <div class="row m-b-20">
                                                        <div class="col-xs-2"><select name="trade[]" class="inputs-p10" id="species" required>
                                                            <option value="">Select part seized</option>
                                                             <option value="Bone" name="Bone_0" >Bone </option>
                                                              <option value="Canine" name="Canine_0" >Canine </option>
                                                              <option value="Claws" name="Claws_0" >Claws </option>
                                                              <option value="Skin" name="Skin_0" >Skin </option>
                                                              <option value="other_0" name="other_0">Other</option>
                                                        </select></div>
                                                        <div class="col-xs-2"><input type="text" name="trade_other[]" value="" class="trade-form-control other_0" style="display:none;"/><input type="hidden" name="other_0" id="other_0_id" value="0"/></div>
                                                        <div class="col-xs-2"><input type="text" required name="quantity[]" value="" class="trade-form-control"/></div>
                                                        <div class="col-xs-2"><input type="text" name="dimension[]" value="" class="trade-form-control"/></div>
                                                        <div class="col-xs-2"><input type="checkbox" id="Suspected" name="suspected[0]"  class="trade-form-control" style="margin-top:-1px;margin-left:-20px;"/></div>
                                                    </div>
                                                </div>    
                                             <div><a href="javascript:void(0);" class="add_button add-field-img" title="Add field"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>                                                       
                                       </div>         
                                     <div class="row nextpre-btns-holders">
                                        <div id="commondata"> </div>
                                        <a href="./Identify.php" class="listinBtn pull-left">Previous</a>
                                           <input type="submit" id="btn_submit_10" value="Find applicable law and section" class="listinBtn"  />
                                        </form>        
                                        </div>                                                                                         
                                </div>
                               <p style="font-size:14px; font-weight:bold;display: inline;margin-top:30px;">Note* - Select "suspected" if you are unsure of the species you have seized.</p>
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

