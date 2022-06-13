<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <section class="content">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head" id="wittness">
                            <?php echo trans("wittness", 'en'); ?>
                            <br>
                            <?php echo trans("wittness", 'bn'); ?>
                        </h3>
                        <form id="commentForm" class="inputs-p10 " method="post" action="#input-disposal-information" enctype="multipart/form-data">
                            <div class="form-row">
                                <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                                <div class="input_fields_wrap">
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="witnessname">
                                            <?php echo trans("witnessname", 'en'); ?>
                                            <br>
                                            <?php echo trans("witnessname", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="witness_name" name="witness_name" value="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="witness-age">
                                            <?php echo trans("witness-age", 'en'); ?>
                                            <br>
                                            <?php echo trans("witness-age", 'bn'); ?>
                                            <input type="checkbox" name="approx_0" id="approx_0" class="">
                                            approximately
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
                                        <label class="inner-label required" id="witness-address">
                                            <?php echo trans("witness-address", 'en'); ?>
                                            <br>
                                            <?php echo trans("witness-address", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="witness_address" name="witness_address" value="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="note-2">
                                            <?php echo trans("note-2", 'en'); ?>
                                            <br>
                                            <?php echo trans("note-2", 'bn'); ?>
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="note" required name="note" value="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="" class="listinBtn pull-left"><label id="pre">
                                        <?php echo trans("pre", 'en'); ?>

                                        <?php echo trans("pre", 'bn'); ?>
                                    </label></a>
                                <!--<a href="" class="listinBtn" data-toggle="modal" data-target="#AddMoreSpeciesAlert">Next1</a>-->
                                <a href="#action-input-witness-information" value="Next" class="listinBtn" id="submit"><label id="next">
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
</section>
</div>

<div class="control-sidebar-bg"></div>
</div>