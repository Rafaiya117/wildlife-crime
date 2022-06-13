

<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;"> 
<section class="content">
<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <div class="innerPage-box">
                <h3 class="innerPage-head" id="other">
                    <?php echo trans("other", 'en'); ?>
                    <br>
                    <?php echo trans("other", 'bn'); ?>
                </h3>
                <form role="form" id="commentForm" class="inputs-p10 " method="POST" action="./review-section-details.php" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="w52l5fMv7jKUxRVpIaYdOEXgEPaKOnhSpzRedRTW">
                    <input type="hidden" name="confession_add" value="">
                    <input type="hidden" name="section5" value="section5">
                    <input type="hidden" name="accuseCounter" id='number' value="0">
                    <div class="form-row">
                        <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                        <div class="input_fields_wrap">
                            <div class="form-group col-md-12">
                                <label class="inner-label" id="in1">
                                    <?php echo trans("in1", 'en'); ?>
                                    <br>
                                    <?php echo trans("in1", 'bn'); ?>
                                </label>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="seizedAnimal[]" class="seizedAnimal" value="Animal_article"> Scanning Image <a href='#' data-toggle="modal" data-target="#animal_article">&nbsp;<i class=""></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="Trophy"> Risk assessment <a href='#' data-toggle="modal" data-target="#trophy_article">&nbsp;<i class=""></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="Live animal"> Random check <a href='#' data-toggle="modal" data-target="#liveanimal_article">&nbsp;<i class=""></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="meat"> Sniffer Dog <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class=""></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="meat"> Third-party information <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class=""></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="meat"> Physical-information <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class=""></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="meat"> Others-specify <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class=""></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="inner-label" id="in2">
                                <?php echo trans("in2", 'en'); ?>
                                    <br>
                                    <?php echo trans("in2", 'bn'); ?>
                                </label>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="" class="" value="">Maritime <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="" id="" class="" value="">Rail <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="" id="" class="" value=""> Road<a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="checkbox-holder">
                                            <input type="checkbox" name="" id="" class="" value=""> Air <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                            <span class="checkbox-checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="inner-label" id="in3">
                                    <?php echo trans("in3", 'en'); ?>
                                    <br>
                                    <?php echo trans("in3", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label class="checkbox-holder">
                                                <input type="checkbox" name="" class="" value=""> No concealment <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                <span class="checkbox-checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="checkbox-holder">
                                                <input type="checkbox" name="" id="" class="" value=""> Postal parcel <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                <span class="checkbox-checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="checkbox-holder">
                                                <input type="checkbox" name="" id="" class="" value=""> Luggage<a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                <span class="checkbox-checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="checkbox-holder">
                                                <input type="checkbox" name="" id="" class="" value=""> Carry on body <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                <span class="checkbox-checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="checkbox-holder">
                                                <input type="checkbox" name="" id="" class="" value=""> Other specify <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                <span class="checkbox-checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div id="seized_image_preview"></div>
                                    </div>
                                    <div class="form-group col-md-12 seizedarticlesupload">
                                        <label class="inner-label required" id="in4">
                                        <?php echo trans("in4", 'en'); ?>
                                    <br>
                                    <?php echo trans("in4", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield datepick" id="" name="date0" required value="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div id="seized_image_preview"></div>
                                    </div>
                                    <div class="form-group col-md-12 seizedarticlesupload">
                                        <label class="inner-label required" id="in5">
                                        <?php echo trans("in5", 'en'); ?>
                                    <br>
                                    <?php echo trans("in5", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="" name="" required value="">

                                    </div>
                                    <div class="form-group col-md-12">
                                        <div id="seized_image_preview"></div>
                                    </div>
                                    <div class="form-group col-md-12 seizedarticlesupload">
                                        <label class="inner-label required" id="in6">
                                        <?php echo trans("in6", 'en'); ?>
                                    <br>
                                    <?php echo trans("in6", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield datepick" id="" name="" required value="">

                                    </div>
                                    <div class="form-group col-md-12">
                                        <p style="margin:0 0 5px">
                                            <i class="" aria-hidden="true"></i>
                                            <label class="inner-label" id="in7"><?php echo trans("in7", 'en'); ?>
                                    <br>
                                    <?php echo trans("in7", 'bn'); ?><span class="requiredstar">*</span></label>
                                        </p>
                                        <select name="state" style="height:45px;color:#009472 !important" class="form-control  required">
                                            <option value="">No cites permit</option>
                                            <option value="fake cites permit">Fake Cities Permit</option>
                                            <option value="noc">Absence of No Objection Certificate (NoC) from FD</option>
                                            <option value="fake noc">Fake NOC</option>
                                            <option value="undecleared">Undecleared/Misdecleared</option>
                                            <option value="illegal">Illegal Entry</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                    <h3><strong id="pelan"><?php echo trans("pelan", 'en'); ?>
                                    <br>
                                    <?php echo trans("pelan", 'bn'); ?></strong></h3>
                                    <label for="imprisonment"><strong>Imprisonment</strong></label>
                                    <input type="month" id="imprisonment" name="imprisonment">
                                    <label for="fine"><strong>Fine</strong></label>
                                    <input id="fine" type="number" name="fine" value="0">
                                    <div class="form-group col-md-12">
                                        <div id="seized_image_preview"></div>
                                    </div>
                                    <div class="form-group col-md-12 seizedarticlesupload">
                                        <label class="inner-label required" id="in8">
                                        <?php echo trans("in8", 'en'); ?>
                                    <br>
                                    <?php echo trans("in8", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="" name="" value="">
                                    </div>

                                </div>
                                <div class="col-md-14">
                                    <label class="inner-label" id="addmore">
                                    <?php echo trans("addmore", 'en'); ?>
                                    <br>
                                    <?php echo trans("addmore", 'bn'); ?>
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
</section>
</div>

<div class="control-sidebar-bg"></div>
</div>




