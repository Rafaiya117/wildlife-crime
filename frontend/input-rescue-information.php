
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
                <form role="form" class="inputs-p10 " id="commentForm" method="POST" action="./find-section-laws.php" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8">
                    <div class="row speciesDetails">
                        <div class="col-md-12">
                        </div>

                        <input type="hidden" name="definition" value="trophy,trophy,trophy,trophy">
                        <div class="col-md-4">

                            <a data-fancybox href="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5d36e7648e2ca.png"><img src="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5d36e7648e2ca.png" class="img-responsive speciesimg" alt="" style="height:70px    width:50px;"></a>
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
                                <div class="col-xs-2"><strong><label><span style="color:red;">*</span>Live/dead</strong></div>
                                <div class="col-xs-2"><strong><label><span style="color:red;">*</span>Age</strong></div>
                                <div class="col-xs-2"><strong><label><span style="color:red;">*</span> Sex</strong></div>
                                <div class="col-xs-2"><strong><label><span style="color:red;">*</span> Quantity</strong></div>
                                <div class="col-xs-2"><strong><label> Estimated Value(TK)</strong></div>
                            </div>
                            <div class="field_wrapper tarde-field-wrapper">
                                <div class="row m-b-20">
                                    <div class="col-xs-2"><select required name="trade[]" class="inputs-p10" id="species" required>
                                            <option value="">Select</option>
                                            <option value="Live" name=""> Live</option>
                                            <option value="Dead" name=""> Dead</option>
                                        </select></div>
                                    <div class="col-xs-2"><select name="trade[]" class="inputs-p10" id="species" required>
                                            <option value="">Select Age</option>
                                            <option value="Adult" name="Adult_0"> Adult</option>
                                            <option value="Juvenile" name="Juvenile_0"> Juvenile</option>
                                            <option value="NewBorn" name="NewBorn_0"> New Born</option>
                                        </select></div>
                                    <div class="col-xs-2"><select name="trade[]" class="inputs-p10" id="species" required>
                                            <option value="">Select Sex</option>
                                            <option value="male" name="Male_0"> Male</option>
                                            <option value="Female" name="Female_0"> Female</option>
                                            <option value="Others" name="Othres_0"> Others</option>
                                        </select></div>
                                    <div class="col-xs-2"><input type="text" required name="quantity[]" value="" class="trade-form-control" /></div>
                                    <div class="col-xs-2"><input type="text" required name="dimension[]" value="" class="trade-form-control" /></div>
                                </div>
                            </div>
                            <div><a href="javascript:void(0);" class="add_button add-field-img" title="Add field"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="row nextpre-btns-holders">
                            <div id="#commondata"> </div>
                            <div>
                                <a href="#" class="listinBtn pull-left">Previous</a>
                                <input type="submit" id="btn_submit_10" value="Find applicable law and section" class="listinBtn" />
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

