<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->

<div class="content-wrapper" style="min-height: 901px;">
    <section class="content">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">

                        <h3 class="innerPage-head" id="sampleinfo"> <?php echo trans("sampleinfo", 'en'); ?>
                            <br>
                            <?php echo trans("sampleinfo", 'bn'); ?>
                        </h3>

                        <form role="form" id="commentForm" class="inputs-p10 " method="POST" action="#other-details" enctype="multipart/form-data">
                            <div class="form-row">
                                <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                                <div class="input_fields_wrap">
                                    <div class="form-group col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <label class="inner-label" id="speciesname">
                                                    <?php echo trans("speciesname", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("speciesname", 'bn'); ?>
                                                </label>

                                                <div class="form-group col-md-12">
                                                    <p><input type="text" id="species_name" class="form-control inner-textfield  ui-autocomplete-input" required="" name="species_name" value="" autocomplete="off"></p>
                                                </div>
                                                <div class="form-group col-md-12 subsequentDescription_0 convictingdiv_0 date_0">
                                                    <label class="inner-label required" id="coll-date">
                                                        <?php echo trans("coll-date", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("coll-date", 'bn'); ?>
                                                    </label>
                                                    <input type="date" class="form-control inner-textfield datepick" required id="collection_date" name="collection_date" value="">
                                                    <i class="fa fa-calendar datepick" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="inner-label" id="code">
                                                        <?php echo trans("code", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("code", 'bn'); ?>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <p><input type="text" id="sample_code" class="form-control inner-textfield  ui-autocomplete-input" required="" name="sample_code" value="" autocomplete="off"></p>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="inner-label" id="place">
                                                        <?php echo trans("place", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("place", 'bn'); ?>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <p><input type="text" id="collection_place" class="form-control inner-textfield  ui-autocomplete-input" required name="collection_place" value="" autocomplete="off"></p>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <p style="margin:0 0 5px">
                                                        <i class="" aria-hidden="true"></i>
                                                        <label class="inner-label" id="forensic-rp">
                                                            <?php echo trans("forensic-rp", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("forensic-rp", 'bn'); ?>
                                                            <span class="requiredstar">*</span></label>
                                                    </p>
                                                    <select name="forensic_report" style="height:45px;color:#009472 !important" class="form-control  required" id="fornsic_report">
                                                        <option value="">Select</option>
                                                        <option value="yes"> <label id="yes">
                                                                <?php echo trans("yes", 'en'); ?>

                                                                <?php echo trans("yes", 'bn'); ?>
                                                            </label></option>
                                                        <option value="no"> <label id="no">
                                                                <?php echo trans("no", 'en'); ?>

                                                                <?php echo trans("no", 'bn'); ?></option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="inner-label" id="rpdate">
                                                        <?php echo trans("rpdate", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("rpdate", 'bn'); ?>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <p><input type="text" id="report_date" class="form-control inner-textfield  ui-autocomplete-input" required="" name="report_date" value="" autocomplete="off"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="inner-label" id="other-item"><strong>
                                            <?php echo trans("other-item", 'en'); ?>
                                            <br>
                                            <?php echo trans("other-item", 'bn'); ?></strong></label>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group col-md-12">
                                                <p style="margin:0 0 5px">
                                                    <i class="" aria-hidden="true"></i>
                                                    <label class="inner-label" id="seiz-it">
                                                        <?php echo trans("seiz-it", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("seiz-it", 'bn'); ?>
                                                        <span class="requiredstar">*</span></label>
                                                </p>
                                                <select name="seized_item" style="height:45px;color:#009472 !important" class="form-control  required" id="seized_item">
                                                    <option value=""> Enter other seized item</option>
                                                    <option value="vehicles">Vehicles</option>
                                                    <option value="weapons">Weapons</option>
                                                    <option value="tools">Tools</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label" id="typo">
                                                    <?php echo trans("typo", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("typo", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="text" id="type" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="type" autocomplete="off"></p>
                                            </div>
                                            <div class="form-group col-md-12" id="brand">
                                                <label class="inner-label">
                                                    <?php echo trans("brand", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("brand", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="text" id="brand" class="form-control inner-textfield  ui-autocomplete-input" required name="brand" value="" autocomplete="off"></p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label" id="model">
                                                    <?php echo trans("model", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("model", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="text" id="model" class="form-control inner-textfield  ui-autocomplete-input" required name="model" value="" autocomplete="off"></p>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label" id="reg">
                                                    <?php echo trans("reg", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("reg", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="text" id="reg_number" class="form-control inner-textfield  ui-autocomplete-input" required="" name="reg_number" value="" autocomplete="off"></p>
                                            </div>
                                            <div class="form-group col-md-12" id="locat">
                                                <label class="inner-label">
                                                    <?php echo trans("locat", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("locat", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="text" id="seizure_location" class="form-control inner-textfield  ui-autocomplete-input" required="" name="seizure_location" value="" autocomplete="off"></p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 id="cus"><strong><?php echo trans("cus", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("cus", 'bn'); ?></strong></h2>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label" id="nm-cus">
                                                    <?php echo trans("nm-cus", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("nm-cus", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="text" id="custodian_name" class="form-control inner-textfield  ui-autocomplete-input" required name="custodian_name" value="" autocomplete="off"></p>
                                            </div>
                                            <div class="form-group col-md-12" id="cus-des">
                                                <label class="inner-label">
                                                    <?php echo trans("cus-des", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("cus-des", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="text" id="custodian_designation" class="form-control inner-textfield  ui-autocomplete-input" required name="custodian_designation" value="" autocomplete="off"></p>
                                            </div>
                                            <div class="form-group col-md-12" id="add-cus">
                                                <label class="inner-label">
                                                    <?php echo trans("add-cus", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("add-cus", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="text" id="custodian_address" class="form-control inner-textfield  ui-autocomplete-input" required name="custodian_address" value="" autocomplete="off"></p>
                                            </div>
                                            <div class="form-group col-md-12" id="phn-num">
                                                <label class="inner-label">
                                                    <?php echo trans("phn-num", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("phn-num", 'bn'); ?>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <p><input type="number" id="custodian_phn" class="form-control inner-textfield  ui-autocomplete-input" required name="custodian_phn" value="" autocomplete="off"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label" id="want-more">
                                            <?php echo trans("want-more", 'en'); ?>
                                            <br>
                                            <?php echo trans("want-more", 'bn'); ?>
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="optradio" required="" id="" class="part" value="Yes">
                                                    <label id="yes">
                                                        <?php echo trans("yes", 'en'); ?>

                                                        <?php echo trans("yes", 'bn'); ?>
                                                    </label>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="optradio" required id="" class="whole" value="No"> <label id="no">
                                                        <?php echo trans("no", 'en'); ?>

                                                        <?php echo trans("no", 'bn'); ?>
                                                    </label>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-row">

                                            <a href="" class="listinBtn pull-left"> <label id="pre">
                                                    <?php echo trans("pre", 'en'); ?>

                                                    <?php echo trans("pre", 'bn'); ?>
                                                </label></a>
                                            <a href="#action-input-sample-collection" class="listinBtn" value="Next(পরবর্তী)" name="submit" title="Next">Next(পরবর্তী)</a>
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