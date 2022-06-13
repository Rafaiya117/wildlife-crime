<style>
    #demo {
        background-color: black;
        text-decoration-color: white;
    }

    .circle {
        height: 20px;
        width: 20px;
        background-color: lightskyblue;
        border-radius: 50%;
    }

    .square {
        height: 20px;
        width: 20px;
        background-color: red;
    }

    .leaf {

        position: right;
        left: 50%;
        top: 20%;
        transform:
            translate(-20%, -20%);
        width: 30px;
        height: 30px;
        background-color: lightgreen;
        border-radius: 30px 0 30px 30px
    }
</style>



<div class="content-wrapper" style="min-height: 901px;">
    <section class="content">
        <div class="box-body">
            <div class="row" style="height:600px;">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head">
                            <?php echo trans("species-details", 'en'); ?>
                            <br>
                            <?php echo trans("species-details", 'bn'); ?>
                        </h3>
                        <form role="form" class="inputs-p10 " id="commentForm" method="post" action="#find-section-laws" enctype="multipart/form-data">
                            <div class="row speciesDetails">
                                <div class="col-md-12">
                                </div>

                                <input type="hidden" name="definition" value="">
                                <div class="col-md-4">

                                    <a data-fancybox href=""><img src="" class="img-responsive speciesimg" alt="" style="height:70px; width:50px;"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="row m-b-20">
                                        <div class="col-md-6"><strong>Name/নাম:</strong></div>
                                        <div class="col-md-6">Tiger </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="col-md-6"><strong>Scientific Name/বৈজ্ঞানিক নাম:</strong></div>
                                        <div class="col-md-6">Panthera tigris</div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="col-md-6"><strong>Schedule/Part/Entry(সময়সূচী/অংশ/এন্ট্রি):</strong></div>
                                        <div class="col-md-6">I/I/39</div>
                                    </div>
                                    <div class="row m-b-20" id="demo">
                                        <div class="col-md-6" style="color:white;"><strong>IUCN:</strong></div>
                                        <div class="col-md-6" style="color:white;">EN</div>
                                        <div class="circle"></div>
                                        <p style="color:white;"> cites</p>&nbsp;&nbsp;
                                        <div class="square"></div>
                                        <p style="color:white;"> schedule</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="leaf"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row m-b-30 tarde-label-wrapper">
                                        <div class="col-xs-2"><strong><label><span style="color:red;">*</span>Live/dead<br>জীবিত/মৃত</strong></div>
                                        <div class="col-xs-2"><strong><label><span style="color:red;">*</span>Age<br>বয়স</strong></div>
                                        <div class="col-xs-2"><strong><label><span style="color:red;">*</span> Sex<br>সেক্স</strong></div>
                                        <div class="col-xs-2"><strong><label><span style="color:red;">*</span> Quantity<br>পরিমাণ</strong></div>
                                        <div class="col-xs-2"><label> Estimated Value<br>আনুমানিক মূল্য(TK)</div>
                                    </div>
                                    <div class="field_wrapper tarde-field-wrapper">
                                        <div class="row m-b-20">
                                            <div class="col-xs-2"><select required name="live/dead" class="form-control innertextfield" id="live/dead" required>
                                                    <option value="">Select</option>
                                                    <option value="Live" name=""> Live/জীবিত</option>
                                                    <option value="Dead" name=""> Dead/মৃত</option>
                                                </select></div>
                                            <div class="col-xs-2"><select name="species_age" class="form-control inner-textfield" id="species_age" required>
                                                    <option value="">Select Age</option>
                                                    <option value="Adult" name="Adult_0"> Adult/প্রাপ্তবয়স্ক</option>
                                                    <option value="Juvenile" name="Juvenile_0"> Juvenile/অল্পবয়স্ক</option>
                                                    <option value="NewBorn" name="NewBorn_0"> New Born/নবজাতক</option>
                                                </select></div>
                                            <div class="col-xs-2"><select name="trade[]" class="form-control inner-textfied" id="species" required>
                                                    <option value="">Select Sex</option>
                                                    <option value="male" name="Male_0"> Unknown/অজানা</option>
                                                    <option value="Female" name="Female_0"> Male/পুরুষ</option>
                                                    <option value="Others" name="Othres_0"> Female/মহিলা</option>
                                                </select></div>
                                            <div class="col-xs-2"><input type="number" name="quantity" value="" class="form-control inner-textfield" id="quantity" /></div>
                                            <div class="col-xs-2"><input type="number" name="dimension" value="" class="form-control inner-textfield" id="dimension" /></div>
                                        </div>
                                        <div class="new-input-area">
                                        </div>
                                    </div>
                                    <!-- <div><a href="javascript:void(0);" class="add" title="Add field"><i class="fas fa-plus" aria-hidden=""></i>+</a></div> -->
                                </div>
                                <!--add btn-->
                                <div class="col-md-12">
                                    <label class="inner-label" id="addmore">
                                        <?php echo trans("addmore", 'en'); ?>
                                        <br>
                                        <?php echo trans("addmore", 'bn'); ?>
                                    </label>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label class="radioBtnHolder">
                                                <a class="listinBtn" href="#modal2" name="optradio" required="" id="modal2" class="part" value="Yes" onclick="modal2()"><label id="yes">
                                                        <?php echo trans("yes", 'en'); ?>

                                                        <?php echo trans("yes", 'bn'); ?>
                                                    </label></a>
                                                <!-- <span class="checkmark"></span> -->
                                            </label>
                                        </div>
                                        <div class="form-group col-md-2" style="margin-left:50% !Important;">
                                            <label class="radioBtnHolder">
                                                <a class="listinBtn" href="" name="optradio" required="" id="add_more_no" class="whole" value="No"><label id="no">
                                                        <?php echo trans("no", 'en'); ?>
                                                        <?php echo trans("no", 'bn'); ?>
                                                    </label></a>
                                                <!-- <span class="checkmark"></span> -->
                                            </label>
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="row nextpre-btns-holders">

                                        <div class="row">
                                            <a href="#" class="listinBtn pull-left"><label id="pre">
                                                    <?php echo trans("pre", 'en'); ?>

                                                    <?php echo trans("pre", 'bn'); ?>
                                                </label></a>
                                            <a href="#action-input-rescue-information" id="" value="Next(পরবর্তী)" class="listinBtn">Next(পরবর্তী)</a>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
                <!-- <p style="font-size:14px; font-weight:bold;display: inline;margin-top:30px;">Note* - Select "suspected" if you are unsure of the species you have seized.</p> -->
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