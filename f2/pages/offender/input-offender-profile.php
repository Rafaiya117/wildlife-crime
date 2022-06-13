<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <section class="content">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head" id="accusedhead">
                            <?php echo trans("accusedhead", 'en'); ?>
                            <br>
                            <?php echo trans("accusedhead", 'bn'); ?>
                        </h3>
                        <form role="form" id="commentForm" class="inputs-p10 " method="POST" action="#input-witness-information" enctype="multipart/form-data">
                            <div class="form-row">
                                <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                                <div class="input_fields_wrap">
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="accusedname">
                                            <?php echo trans("accusedname", 'en'); ?>
                                            <br>
                                            <?php echo trans("accusedname", 'bn'); ?>
                                        </label>
                                        <!-- <input type="hidden" name="manageid[]" value="0"> -->
                                        <input type="text" class="form-control inner-textfield" id="offender_name" name="offender_name" required value="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="father">
                                            <?php echo trans("father", 'en'); ?>
                                            <br>
                                            <?php echo trans("father", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="father_name" name="father_name" required value="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="age">
                                            <?php echo trans("age", 'en'); ?>
                                            <br>
                                            <?php echo trans("age", 'bn'); ?>
                                            <input type="checkbox" name="approx_0" id="approx_0" class="" value="approc">approximately
                                        </label>
                                        <select class="form-control  inner-textfield" id="offender_age" name="offender_age" required>
                                            <option value="">Select Age</option>
                                            <?php
                                            for ($i = 18; $i < 101; $i++) {
                                                echo "<option>$i</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="address">
                                            <?php echo trans("address", 'en'); ?>
                                            <br>
                                            <?php echo trans("address", 'bn'); ?>
                                        </label>
                                        <textarea type="text" class="form-control inner-textfield" required id="addressOne" name="addressOne"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="pr-address">
                                            <?php echo trans("pr-address", 'en'); ?>
                                            <br>
                                            <?php echo trans("pr-address", 'bn'); ?>
                                        </label>
                                        <textarea type="text" class="form-control inner-textfield" required id="addressTwo" name="addressTwo"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p style="margin:0 0 5px">
                                            <i class="" aria-hidden="true"></i>
                                            <label class="inner-label" id="identity">
                                                <?php echo trans("identity", 'en'); ?>
                                                <br>
                                                <?php echo trans("identity", 'bn'); ?>
                                                <span class="requiredstar">*</span></label>
                                        </p>
                                        <select name="nationality" style="height:45px;color:#009472 !important" class="form-control inner-textfield" required id="nationality">
                                            <option value="">Nationality</option>
                                            <option value="bangladeshi">Bangladeshi</option>
                                            <option value="others">Othres</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="number">
                                            <?php echo trans("number", 'en'); ?>
                                            <br>
                                            <?php echo trans("number", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" onkeypress="return isNumberKey(event)" minlength="14" maxlength="14" required name="nid_number" value="" id="nid_number">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="mobile">
                                            <?php echo trans("mobile", 'en'); ?>
                                            <br>
                                            <?php echo trans("mobile", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" onkeypress="return isNumberKey(event)" minlength="11" maxlength="11" required name="mobile_number" value="" id="mobile_number">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="repeatedoffender">
                                            <?php echo trans("repeatedoffender", 'en'); ?>
                                            <br>
                                            <?php echo trans("repeatedoffender", 'bn'); ?>
                                            <div class="hint">
                                                Habitual offender is one who has been implicated in other cases under Wild Life Act, 1972 before
                                            </div>
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="repeated_offender1" required class="accusedHabitualoffender_0" value="Yes" id="repeated_offender1">
                                                    <label id="yes">
                                                        <?php echo trans("yes", 'en'); ?>

                                                        <?php echo trans("yes", 'bn'); ?>
                                                    </label>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="repeated_offender1" required class="accusedHabitualoffender_0" value="No" id="repeated_offender1"><label id="no">
                                                        <?php echo trans("no", 'en'); ?>

                                                        <?php echo trans("no", 'bn'); ?>
                                                    </label>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="repeated_offender1" required class="accusedHabitualoffender_0" value="No" id="repeated_offender1">Unkonown(অচেনা)
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="note">
                                            <?php echo trans("note", 'en'); ?>
                                            <br>
                                            <?php echo trans("note", 'bn'); ?>
                                        </label>
                                        <textarea type="text" class="form-control inner-textfield" required name="note" id="note"></textarea>
                                    </div>

                                </div>
                                <div class=" col-md-12">
                                    <label class="inner-label" id="more">
                                        <?php echo trans("more", 'en'); ?>
                                        <br>
                                        <?php echo trans("more", 'bn'); ?>
                                    </label>
                                    <div class="form-row" name="myNumber" onsubmit="usePage(this, event);" target="_blank">
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="optradio" required="" id="offender" class="part" value="Yes"><label id="yes">
                                                    <?php echo trans("yes", 'en'); ?>

                                                    <?php echo trans("yes", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="radioBtnHolder">
                                                <input type="radio" name="optradio" required id="" class="whole" value="No"><label id="no">
                                                    <?php echo trans("no", 'en'); ?>

                                                    <?php echo trans("no", 'bn'); ?>
                                                </label>
                                                <span class="checkmark"></span>
                                            </label>
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
                                <a href="#action-input-offender-profile" class="listinBtn" value="Next(পরবর্তী)" name="submit" title="Next"><label id="next">
                                        <?php echo trans("next", 'en'); ?>

                                        <?php echo trans("next", 'bn'); ?>
                                    </label></a></a>
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

<div class="control-sidebar-bg"></div>
</div>