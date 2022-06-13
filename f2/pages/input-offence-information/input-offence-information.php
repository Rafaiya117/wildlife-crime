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
                        <form role="form" id="commentForm" class="inputs-p10 " method="POST" action="#input-officer-information" enctype="multipart/form-data">
                            <div class="form-row">
                                <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                                <div class="input_fields_wrap">
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="case">
                                            <?php echo trans("case", 'en'); ?>
                                            <br>
                                            <?php echo trans("case", 'bn'); ?>
                                        </label>
                                        <!-- <input type="hidden" name="manageid[]" value="0"> -->
                                        <input type="number" class="form-control inner-textfield " required id="case_no" name="case_no" value="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="date">
                                            <?php echo trans("date", 'en'); ?>
                                            <br>
                                            <?php echo trans("date", 'bn'); ?>
                                        </label>
                                        <input type="date" class="form-control inner-textfield datepick" required id="date_1" name="date_1" value="">
                                        <i class="fa fa-calendar datepick" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>

                                    </div>
                                    <div class="textbox-holder">
                                        <div class="form-group col-md-12">
                                            <p style="margin:0 0 5px">
                                                <i class="" aria-hidden="true"></i>
                                                <label class="inner-label">
                                                    <?php echo trans("district", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("district", 'bn'); ?><span class="requiredstar" id="district">*</span></label>
                                            </p>
                                            <select name="state" style="height:45px;color:#009472 !important" class="form-control inner-textfield" required id="district">
                                                <option value="">
                                                    <?php echo trans("district", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("district", 'bn'); ?>
                                                </option>

                                                <option value="Barishal">Barishal</option>
                                                <option value="Chattogram">Chattogram</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Sylhet">Sylhet</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <p style="margin:0 0 5px">
                                                <i class="" aria-hidden="true"></i>
                                                <label class="inner-label">
                                                    <?php echo trans("upzilla", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("upzilla", 'bn'); ?><span class="requiredstar" id="upzilla">*</span></label>
                                            </p>
                                            <select name="state" style="height:45px;color:#009472 !important" class="form-control inner-textfield" required id="upzilla">
                                                <option value="">
                                                    <?php echo trans("upzilla", 'en'); ?>
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
                                                <label class="inner-label">
                                                    <?php echo trans("station", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("station", 'bn'); ?><span class="requiredstar" id="station">*</span></label>
                                            </p>
                                            <select name="state" style="height:45px;color:#009472 !important" class="form-control  inner-textfield" required id="station">
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
                                                <input type="text" class="form-control inner-textfield" id="co_ordinate1" name="co_ordinate1" required value="long"><br>
                                                <input type="text" class="form-control inner-textfield" id="co_ordinate2" name="co_ordinate2" required value="lat">

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
                                                <input list="information" rows="3" cols="30" class="form-control inner-textfield" required placeholder="­­­­­­" name="information" id="information">
                                                <datalist id="information">
                                                    <option value="illegal"></option>
                                                    <option value="legal"></option>
                                                </datalist>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required" id="action">
                                                    <?php echo trans("action", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("action", 'bn'); ?>
                                                </label>
                                                <input list="actions" name="action" id="action" class="form-control inner-textfield">
                                                <datalist id="actions">
                                                    <option value="jail">
                                                    <option value="under_arrest">
                                                </datalist>
                                            </div>
                                            <div>
                                                <a href="#species-details" class="listinBtn pull-left"><label id="pre">
                                                        <?php echo trans("pre", 'en'); ?>

                                                        <?php echo trans("pre", 'bn'); ?>
                                                    </label></a>
                                                <a href="#action-input-offence-information" class="listinBtn" value="Next(পরবর্তী)" name="submit" title="Next"><label id="next">
                                                        <?php echo trans("next", 'en'); ?>

                                                        <?php echo trans("next", 'bn'); ?>
                                                    </label></a>
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