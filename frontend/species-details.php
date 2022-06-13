

<div class="content-wrapper" style="min-height: 901px;">
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class="innerPage-box">
                    <h3 class="innerPage-head" id="speciesdetails">
                        <?php echo trans("speciesdetails", 'en'); ?>
                        <br>
                        <?php echo trans("speciesdetails", 'bn'); ?>
                    </h3>
                    <form class="inputs-p10" id="commentForm" method="Post" action="./input-offence-information.php" enctype="multipart/form-data" autocomplete="off">
                        <input type="hidden" name="_token" value="Ks9PK6VCwKe8ca3sFbrZ9rtfDONjmGG8ootj56x2">
                        <input type="hidden" name="addmorespecies" value="addmorespecies">
                        <div class="row speciesDetails">
                            <div class="col-md-4">
                                <img src="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5d36e7648e2ca.png" class="img-responsive speciesimg" alt="" style="height: 80%; width: 150px;">
                            </div>
                            <div class="col-md-8">
                                <div class="row m-b-20">
                                    <a href="#" data-toggle="modal" data-target="#DeleteSpecies" data-id="1164" class="trash cancelBtn" style="color:red; font-weight:bold;"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</a>
                                    <a href="https://wlor.wildcrimeassist.in/wlors/section1?id=1164" class="cancelBtn" style="color:#009472; font-weight:bold;margin-right:10px;"><i class="fa fa-edit"></i>Edit</a>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-4"><strong>Name:</strong></div>
                                    <div class="col-md-8">Tiger </div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-4"><strong>Scientific Name:</strong></div>
                                    <div class="col-md-8">Panthera tigris</div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-4"><strong>Schedule/Part/Entry:</strong></div>
                                    <div class="col-md-8">I/I/39</div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-4"><strong>IUCN:</strong></div>
                                    <div class="col-md-8">EN</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="inner-label" id="addmore">
                                <?php echo trans("addmore", 'en'); ?>
                                <br>
                                <?php echo trans("addmore", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="optradio" required="" id="add_more_yes" class="part" value="Yes">Yes
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-1" style="margin-left:50% !Important;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="optradio" required="" id="add_more_no" class="whole" value="No">No
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div id="commentForm"> </div>
                                <!--<a href="" class="listinBtn pull-left" data-toggle="modal" data-target="#AddMoreSpeciesAlert">Add More Species</a>-->
                                <input type="submit" id="btn_submit_10" value="Generate WLOR" class="listinBtn" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>

<div class="control-sidebar-bg"></div>
