
<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->

<div class="content-wrapper" style="min-height: 901px;"> 
<section class="content">
<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <div class="innerPage-box">
                <h3 class="innerPage-head" id="sampleinfo">
                    <?php echo trans("sampleinfo", 'en'); ?>
                    <br>
                    <?php echo trans("sampleinfo", 'bn'); ?>
                </h3>
                <form role="form" id="commentForm" class="inputs-p10 " method="POST" action="./other-details.php" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="w52l5fMv7jKUxRVpIaYdOEXgEPaKOnhSpzRedRTW">
                    <input type="hidden" name="confession_add" value="">
                    <input type="hidden" name="section5" value="section5">
                    <input type="hidden" name="accuseCounter" id='number' value="0">
                    <div class="form-row">
                        <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                        <div class="input_fields_wrap">
                            <div class="form-group col-md-12">
                                <label class="inner-label" id="speciesname">
                                    <?php echo trans("speciesname", 'en'); ?>
                                    <br>
                                    <?php echo trans("speciesname", 'bn'); ?>
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                            </div>
                            <div class="form-group col-md-12 subsequentDescription_0 convictingdiv_0 date_0">
                                <label class="inner-label required" id="coll-date">
                                    <?php echo trans("coll-date", 'en'); ?>
                                    <br>
                                    <?php echo trans("coll-date", 'bn'); ?>
                                </label>
                                <input type="text" class="form-control inner-textfield datepick" id="date_0" name="date_0" value="">
                                <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="inner-label" id="code">
                                    <?php echo trans("code", 'en'); ?>
                                    <br>
                                    <?php echo trans("code", 'bn'); ?>
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="inner-label" id="place">
                                    <?php echo trans("place", 'en'); ?>
                                    <br>
                                    <?php echo trans("place", 'bn'); ?>
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
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
                                <select name="state" style="height:45px;color:#009472 !important" class="form-control  required">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="inner-label" id="rp-date">
                                    <?php echo trans("rp-date", 'en'); ?>
                                    <br>
                                    <?php echo trans("rp-date", 'bn'); ?>
                                </label>
                            </div>
                            <div class="form-group col-md-12">
                                <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                            </div>
                        </div>
                        <h2 id="other-item"><strong><?php echo trans("other-item", 'en'); ?>
                                <br>
                                <?php echo trans("other-item", 'bn'); ?></strong></h2>
                        <div class="form-group col-md-12">
                            <p style="margin:0 0 5px">
                                <i class="" aria-hidden="true"></i>
                                <label class="inner-label" id="seiz-it"><?php echo trans("seiz-it", 'en'); ?>
                                    <br>
                                    <?php echo trans("seiz-it", 'bn'); ?><span class="requiredstar">*</span></label>
                            </p>
                            <select name="state" style="height:45px;color:#009472 !important" class="form-control  required">
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
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                        </div>
                        <div class="form-group col-md-12" id="brand">
                            <label class="inner-label">
                                <?php echo trans("brand", 'en'); ?>
                                <br>
                                <?php echo trans("brand", 'bn'); ?>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="inner-label" id="model">
                                <?php echo trans("model", 'en'); ?>
                                <br>
                                <?php echo trans("model", 'bn'); ?>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="inner-label" id="reg">
                                <?php echo trans("reg", 'en'); ?>
                                <br>
                                <?php echo trans("reg", 'bn'); ?>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                        </div>
                        <div class="form-group col-md-12" id="locat">
                            <label class="inner-label">
                                <?php echo trans("locat", 'en'); ?>
                                <br>
                                <?php echo trans("locat", 'bn'); ?>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                        </div>
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
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                        </div>
                        <div class="form-group col-md-12" id="cus-des">
                            <label class="inner-label">
                                <?php echo trans("cus-des", 'en'); ?>
                                <br>
                                <?php echo trans("cus-des", 'bn'); ?>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                        </div>
                        <div class="form-group col-md-12" id="add-cus">
                            <label class="inner-label">
                                <?php echo trans("add-cus", 'en'); ?>
                                <br>
                                <?php echo trans("add-cus", 'bn'); ?>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
                        </div>
                        <div class="form-group col-md-12" id="phn-num">
                            <label class="inner-label">
                                <?php echo trans("phn-num", 'en'); ?>
                                <br>
                                <?php echo trans("phn-num", 'bn'); ?>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <p><input type="text" id="" class="form-control inner-textfield  ui-autocomplete-input" required="" name="" value="" autocomplete="off"></p>
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
</section>
</div>

<div class="control-sidebar-bg"></div>
</div>



