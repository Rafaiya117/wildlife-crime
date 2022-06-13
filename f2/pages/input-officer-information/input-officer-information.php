<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <section class="content">
        <div class="box-body">
            <div class="row" style="height:600px;">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head" id="officerhead">
                            <?php echo trans("officerhead", 'en'); ?>
                            <br>
                            <?php echo trans("officerhead", 'bn'); ?>
                        </h3>
                        <form id="commentForm" class="inputs-p10 " method="post" action="#input-offender-profile" enctype="multipart/form-data">
                            <div class="form-row">
                                <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                                <div class="input_fields_wrap">
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" for="name" id="officername">
                                            <?php echo trans("officername", 'en'); ?>
                                            <br>
                                            <?php echo trans("officername", 'bn'); ?>
                                        </label>
                                        <input type="text" class=" form-control inner-textfield" id="officer_name" required name="officer_name" value="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" for="designation" id="officerdesignation">
                                            <?php echo trans("officerdesignation", 'en'); ?>
                                            <br>
                                            <?php echo trans("officerdesignation", 'bn'); ?>
                                        </label>
                                        <input type="text" class=" form-control inner-textfield" id="officer_designation" required name="officer_designation" value="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" for="posting" id="officerposting">
                                            <?php echo trans("officerposting", 'en'); ?>
                                            <br>
                                            <?php echo trans("officerposting", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="officer_posting" required name="officer_posting" value="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#input-offence-information" class="listinBtn pull-left"><label id="pre">
                                        <?php echo trans("pre", 'en'); ?>

                                        <?php echo trans("pre", 'bn'); ?>
                                    </label></a>
                                <!--<a href="" class="listinBtn" data-toggle="modal" data-target="#AddMoreSpeciesAlert">Next1</a>-->
                                <a href="#action-input-officer-information" name="submit" value="Next(পরবর্তী)" class="listinBtn" id="commentForm"><label id="next">
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
</section>
</div>

<div class="control-sidebar-bg"></div>
</div>