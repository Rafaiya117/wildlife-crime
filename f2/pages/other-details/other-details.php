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
                        <form role="form" id="commentForm" class="inputs-p10 " method="POST" action="#review-section-details" enctype="multipart/form-data">
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
                                                    <input type="checkbox" name="seizedAnimal[]" class="seizedAnimal" value="" id="seizedAnimal[]"> Scanning Image/ছবি স্ক্যান করে <a href='#'>&nbsp;<i class=""></i></a>
                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedAnimal[]" id="seizedAnimal[]" class="seizedAnimal" value=""> Risk assessment/ঝুকি মূল্যায়ন <a href='#'>&nbsp;<i class=""></i></a>
                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedAnimal[]" id="seizedAnimal[]" class="seizedAnimal" value=""> Random check/এলোমেলোভাবে চেক <a href='#'>&nbsp;<i class=""></i></a>
                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedAnimal[]" id="seizedAnimal[]" class="seizedAnimal" value=""> Sniffer Dog/স্নিফার ডগ <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class=""></i></a>

                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedAnimal[]" id="seizedAnimal[]" class="seizedAnimal" value=""> Third-party information/তৃতীয় পক্ষের তথ্য <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class=""></i></a>

                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedAnimal[]" id="seizedAnimal[]" class="seizedAnimal" value=""> Physical-information/শারীরিক-তথ্য <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class=""></i></a>

                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedAnimal[]" id="seizedAnimal[]" class="seizedAnimal" value="meat"> Others-specify/অন্যান্য-উল্লেখ করুন <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class=""></i></a>

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
                                                    <input type="checkbox" name="transport_mode" class="" value="">Maritime/সামুদ্রিক <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>

                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="transport_mode" id="transport_mode" class="" value="">Rail/রেলপথ <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>

                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="transport_mode" id="transport_mode" class="" value=""> Road/রাস্তা<a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>

                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="transport_mode" id="transport_mode" class="" value=""> Air/আকাশ পথে <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>

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
                                                        <input type="checkbox" name="hide_method" class="" value="" id="hide_method"> No concealment/আড়াল না করে <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                        <span class="checkbox-checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="checkbox-holder">
                                                        <input type="checkbox" name="hide_method" id="hide_method" class="" value=""> Postal parcel/ডাক পার্সেল <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>

                                                        <span class="checkbox-checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="checkbox-holder">
                                                        <input type="checkbox" name="hide_method" id="hide_method" class="" value=""> Luggage/লটবহর<a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>

                                                        <span class="checkbox-checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="checkbox-holder">
                                                        <input type="checkbox" name="hide_method" id="hide_method" class="" value=""> Carry on body/শরীরে করে<a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>

                                                        <span class="checkbox-checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="checkbox-holder">
                                                        <input type="checkbox" name="hide_method" id="hide_method" class="" value=""> Other specify/অন্যান্য <a href='#' data-toggle="modal" data-target="">&nbsp;<i class="fa fa-info-circle"></i></a>

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
                                                <input type="text" class="form-control inner-textfield datepick" id="alleged_country" name="alleged_country" value="">
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
                                                <input type="text" class="form-control inner-textfield" id="transition_country" name="transition_country" value="">

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
                                                <input type="text" class="form-control inner-textfield datepick" id="destination_country" name="destination_country" value="">

                                            </div>
                                            <div class="form-group col-md-12">
                                                <p style="margin:0 0 5px">
                                                    <i class="" aria-hidden="true"></i>
                                                    <label class="inner-label" id="in7">
                                                        <?php echo trans("in7", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("in7", 'bn'); ?>
                                                        <span class="requiredstar">*</span></label>
                                                </p>
                                                <select name="reseason" style="height:45px;color:#009472 !important" class="form-control  required" id="reseason">
                                                    <option value="">No cites permit/সাইটিস এর পারমিট নেই</option>
                                                    <option value="fake cites permit">Fake Cites Permit/জাল সাইটিস পারমিট</option>
                                                    <option value="noc">Absence of No Objection Certificate (NoC) from FD/FD থেকে No Objection Certificate(NoC) অনুপস্থিতি</option>
                                                    <option value="fake noc">Fake NOC/জাল NOC</option>
                                                    <option value="undecleared">Undecleared/Misdecleared(অস্পষ্ট/ভুল ব্যাখ্যা করা হয়েছে)</option>
                                                    <option value="illegal">Illegal Entry/অবৈধ Entry</option>
                                                    <option value="others">Others/অন্যান্য</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p style="margin:0 0 5px">
                                                    <i class="" aria-hidden="true"></i>
                                                    <label class="inner-label" id="in7">
                                                        <?php echo trans("pelan", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("pelan", 'bn'); ?>
                                                    </label>
                                                    <label class="inner-label" for="imprisonment">Imprisonment(কারাবাস)</label>
                                                    <input class="form-control" type="date" id="imprisonment" name="imprisonment">
                                                    <label for="fine" class="inner-label">Fine(জরিমানা)</label>
                                                    <input class="form-control" id="fine" type="number" name="fine" value="0">
                                                <div class="form-group col-md-12">
                                                    <div id="seized_image_preview"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 seizedarticlesupload">
                                                <label class="inner-label required" id="in8">
                                                    <?php echo trans("in8", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("in8", 'bn'); ?>
                                                </label>
                                                <input type="text" class="form-control inner-textfield" id="additional_information" name="additional_information" value="">
                                            </div>

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
                                                        <input type="radio" name="optradio" required="" id="" class="part" value="Yes">
                                                        <label id="yes">
                                                            <?php echo trans("yes", 'en'); ?>

                                                            <?php echo trans("yes", 'bn'); ?>
                                                        </label>
                                                        <input type="radio" name="optradio" id="" class="part" value="Yes">
                                                        Yes
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="optradio" required id="add_more_no" class="whole" value="No"><label id="no">
                                                            <?php echo trans("no", 'en'); ?>

                                                            <?php echo trans("no", 'bn'); ?>
                                                        </label>
                                                        <input type="radio" name="optradio" id="add_more_no" class="whole" value="No">No
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="" class="listinBtn pull-left"><label id="pre">
                                        <?php echo trans("pre", 'en'); ?>

                                        <?php echo trans("pre", 'bn'); ?>
                                    </label></a>
                                <!--<a href="" class="listinBtn" data-toggle="modal" data-target="#AddMoreSpeciesAlert">Next1</a>-->
                                <a href="#action-other-details" class="listinBtn" value="Next(পরবর্তী)" name="submit" title="Next">Next</a>
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