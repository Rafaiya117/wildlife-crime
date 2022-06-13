

<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;"> 
<div class="content">
<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <div class="innerPage-box">
                <h3 class="innerPage-head" id="offenceinfo">
                    <?php echo trans("offenceinfo", 'en'); ?>
                    <br>
                    <?php echo trans("offenceinfo", 'bn'); ?>
                </h3>
                <form role="form" id="commentForm" class="inputs-p10 " method="POST" action="./input-officer-information.php" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="w52l5fMv7jKUxRVpIaYdOEXgEPaKOnhSpzRedRTW">
                    <input type="hidden" name="confession_add" value="">
                    <input type="hidden" name="section5" value="section5">
                    <input type="hidden" name="accuseCounter" id='number' value="0">
                    <div class="form-row">
                        <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                        <div class="input_fields_wrap">
                            <div class="form-group col-md-12">
                                <label class="inner-label required" id="case">
                                    <?php echo trans("case", 'en'); ?>
                                    <br>
                                    <?php echo trans("case", 'bn'); ?>
                                </label>
                                <input type="hidden" name="manageid[]" value="0">
                                <input type="text" class="form-control inner-textfield" name="accused_0" required value="">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="inner-label required" id="date">
                                    <?php echo trans("date", 'en'); ?>
                                    <br>
                                    <?php echo trans("date", 'bn'); ?>
                                </label>
                                <input type="text" class="form-control inner-textfield datepick" id="date0" name="date0" required value="">
                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                            </div>
                            <div class="textbox-holder">
                                <div class="form-group col-md-12">
                                    <p style="margin:0 0 5px">
                                        <i class="" aria-hidden="true"></i>
                                        <label class="inner-label"><?php echo trans("district", 'en'); ?>
                                            <br>
                                            <?php echo trans("district", 'bn'); ?><span class="requiredstar" id="district">*</span></label>
                                    </p>
                                    <select name="state" style="height:45px;color:#009472 !important" class="form-control  required">
                                        <option value=""><?php echo trans("district", 'en'); ?>
                                            <br>
                                            <?php echo trans("district", 'bn'); ?>
                                        </option>
                                        <option value="Chittangong">Chittangong</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Maymansingh">Maymansingh</option>
                                        <option value="Sundarbn">Sundarban</option>
                                        <option value="Barishal">Barishal</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <p style="margin:0 0 5px">
                                        <i class="" aria-hidden="true"></i>
                                        <label class="inner-label"> <?php echo trans("upzilla", 'en'); ?>
                                            <br>
                                            <?php echo trans("upzilla", 'bn'); ?><span class="requiredstar" id="upzilla">*</span></label>
                                    </p>
                                    <select name="state" style="height:45px;color:#009472 !important" class="form-control  required">
                                        <option value=""> <?php echo trans("upzilla", 'en'); ?>
                                            <br>
                                            <?php echo trans("upzilla", 'bn'); ?>
                                        </option>
                                        <option value="Solosohor">Solosohor</option>
                                        <option value="Kapasiya">Kapasiya</option>
                                        <option value="Maymansingh">Maymansingh</option>
                                        <option value="Sundarbn">Sundarban</option>
                                        <option value="Barishal">Barishal</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <p style="margin:0 0 5px">
                                        <i class="" aria-hidden="true"></i>
                                        <label class="inner-label"><?php echo trans("station", 'en'); ?>
                                            <br>
                                            <?php echo trans("station", 'bn'); ?><span class="requiredstar" id="station">*</span></label>
                                    </p>
                                    <select name="state" style="height:45px;color:#009472 !important" class="form-control  required">
                                        <option value=""><?php echo trans("station", 'en'); ?>
                                            <br>
                                            <?php echo trans("station", 'bn'); ?>
                                        </option>
                                        <option value="Chittangong">Chittangong</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Comilla">Comilla</option>
                                        <option value="Barishal">Barishal</option>
                                    </select>
                                    <div class="form-group col-md-12">
                                        <div id="seized_image_preview"></div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="gps">
                                            <?php echo trans("gps", 'en'); ?>
                                            <br>
                                            <?php echo trans("gps", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="" name="" required value="long"><br>
                                        <input type="text" class="form-control inner-textfield" id="" name="" required value="lat">

                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="detection">
                                        <?php echo trans("detection", 'en'); ?>
                                            <br>
                                            <?php echo trans("detection", 'bn'); ?>
                                            <div class="hint">
                                                (Provide details of how you found out about the offence - intelligence/informants, patrolling, or some other method.)
                                            </div>
                                        </label>
                                        <input list="information" rows="3" cols="30" class="form-control inner-textfield" required placeholder=" ­­­­­­" name="information">
                                        <datalist id="information">
                                            <option value="illegal"></option>
                                            <option value="legal"></option>
                                        </datalist>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="action">
                                        
                                            <div class="hint">
                                            </div>
                                        </label>
                                        <input list="select" rows="3" cols="30" class="form-control inner-textfield" required placeholder="" name="select">
                                        <datalist id="select">
                                            <option value="jail"></option>
                                            <option value="under-arrest"></option>
                                        </datalist>
                                    </div>
                                    <div class="col-md-14">
                                        <label class="inner-label" id="add">
                                        <?php echo trans("add", 'en'); ?>
                                            <br>
                                            <?php echo trans("add", 'bn'); ?>

                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="optradio" required="" id="add_more_yes" class="part" value="Yes">Yes
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="optradio" required id="add_more_no" class="whole" value="No">No
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                <a href="" class="listinBtn pull-left">Previous</a>
                                <!--<a href="" class="listinBtn" data-toggle="modal" data-target="#AddMoreSpeciesAlert">Next1</a>-->
                                <input type="submit" class="listinBtn" value="Next" name="submit" title="Next">
                            </div>
                                            </form>
                                            
                                        </div> 
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




