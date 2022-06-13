


<div class="content-wrapper" style="min-height: 901px;">


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box listing-panel">
         <!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="innerPage-box">
                                    <h3 class="innerPage-head" id="law-section">
                                    <?php echo trans("law-section", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("law-section", 'bn'); ?>
                                    </h3>

                                    <form role="form" class="form-horizontal" id="subscribeForm" method="POST" action="./review-section.php" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8">
                                        <input type="hidden" name="section2" value="section2">
                                        <input type="hidden" name="species_id" value="1164">
                                        <input type="hidden" name="lawSchedule" value="I">
                                        <div id="schudleOneTwo">


                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="inner-label" id="lab-1">
                                                        <?php echo trans("lab-1", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("lab-1", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-3">
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="seizedAnimal[]" class="seizedAnimal" value="Animal_article">Animal article <a href='#' data-toggle="modal" data-target="#animal_article">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                                <span class="checkbox-checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="Trophy">Trophy <a href='#' data-toggle="modal" data-target="#trophy_article">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                                <span class="checkbox-checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="Live animal">Live animal <a href='#' data-toggle="modal" data-target="#liveanimal_article">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                                <span class="checkbox-checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="seizedAnimal[]" id="" class="seizedAnimal" value="meat">Meat <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                                <span class="checkbox-checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12" id="accusedHoldDiv">
                                                    <label class="inner-label">
                                                        <?php echo trans("accusedHoldDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("accusedHoldDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="accusedHold" id="" class="accusedHold" value="Yes">Yes
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="accusedHold" id="" class="accusedHold" value="No">No</br>
                                                                <!--<span class="questionTip msgAccuseHold"> [section 40(2) read with section 51(1)]</span>-->
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12" id="accusedProductDiv">
                                                    <label class="inner-label">
                                                        <?php echo trans("accusedProductDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("accusedProductDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <fieldset id="cbgroup">
                                                            <div class="form-group col-md-3">
                                                                <label class="checkbox-holder">
                                                                    <input type="checkbox" name="accusedProduct[]" class="accusedProduct" value="hunting">Hunting</br>
                                                                    <span class="questionTip huntingMsg">[Section 9, 39(3) r/w 51(1)]</span>
                                                                    <span class="checkbox-checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="checkbox-holder">
                                                                    <input type="checkbox" name="accusedProduct[]" class="accusedProduct" value="trade">Trade</br>
                                                                    <span class="questionTip tradeMsg"> [section 40(2), 49B (1) (a) read with 51 (1)]</span>
                                                                    <span class="checkbox-checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="checkbox-holder">
                                                                    <input type="checkbox" name="accusedProduct[]" class="accusedProduct" value="possession">Possession</br>
                                                                    <span class="questionTip possessionMsg">[Section 39(3), r/w 51(1) and 57]</span>
                                                                    <span class="checkbox-checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="checkbox-holder">
                                                                    <input type="checkbox" name="accusedProduct[]" class="accusedProduct" value="abetment">Abetment</br>
                                                                    <span class="questionTip abetmentMsg"> [Section 52 r/w hunting/trade or possession]</span>
                                                                    <span class="checkbox-checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <!-- ADD NEW QUESTION -->
                                                <div class="form-group col-md-12" id="transportAreaDiv" style='display:none;'>
                                                    <label class="inner-label">
                                                        <?php echo trans("transportAreaDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("transportAreaDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="transportArea" id="transportArea" class="transportArea" value="Yes">Yes
                                                                <br><span class="questionTip transportOneTwoMsg" style="display:none;">Section 48A</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="transportArea" id="transportArea" class="transportArea" value="No">No
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12" id="protectedAreaDiv">
                                                    <label class="inner-label">
                                                        <?php echo trans("protectedAreaDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("protectedAreaDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="protectedArea" id="protectedArea" class="protectedArea" value="Yes">Yes
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="protectedArea" id="protectedArea" class="protectedArea" value="No">No
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12" id="permissionprotectedAreaDiv">
                                                    <label class="inner-label">
                                                        <?php echo trans("permissionprotectedAreaDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("permissionprotectedAreaDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="permissionprotectedArea" id="permissionprotectedArea" class="permissionprotectedArea" value="Yes">Yes
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="permissionprotectedArea" id="" class="permissionprotectedArea" value="No">No</br>
                                                                <span class="questionTip permissionprotectedAreaMsg">[section 27 read with 51(1) ]</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12" id="permissionPossessionDiv">
                                                    <label class="inner-label">
                                                        <?php echo trans("permissionPossessionDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("permissionPossessionDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="permissionPossession" id="" class="permissionPossession" value="Yes">Yes
                                                                <span class="questionTip permissionPossessionMsg"></span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="permissionPossession" id="" class="permissionPossession" value="No">No</br>
                                                                <span class="questionTip permissionPossessionMsg">[Section 39(3), r/w S. 51(1) and 57]</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12" id="CoreTigerReserveDiv">
                                                    <label class="inner-label">
                                                        <?php echo trans("CoreTigerReserveDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("CoreTigerReserveDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="CoreTigerReserve" id="" class="CoreTigerReserve" value="Yes">Yes</br>
                                                                <span class="questionTip coreTigerReserveMsg" style="margin-top:20px">[section 27 read with 51(1C)]</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="CoreTigerReserve" id="" class="CoreTigerReserve" value="No">No
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="form-group col-md-12" id="fireCausedDiv" >-->
                                                <div class="form-group col-md-12" id="fireCausedDiv">
                                                    <label class="inner-label">
                                                        <?php echo trans("fireCausedDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("fireCausedDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="fireCaused" id="[section 30 read with51(1)]" class="fireCaused" value="Yes">Yes</br>
                                                                <span class="questionTip fireCausedMsg" style="margin-top:20px">[section 30 read with 51(1)]</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="fireCaused" id="" class="fireCaused" value="No">No
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12" id="protectedWeapon">
                                                    <label class="inner-label">
                                                        <?php echo trans("protectedWeapon", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("protectedWeapon", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="protectedWeapon" id="" class="protectedWeapon" value="Yes">Yes</br>
                                                                <span class="questionTip protectedWeaponMsg" style="margin-top:20px">[section 31 read with 51(1)]</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="protectedWeapon" id="" class="protectedWeapon" value="No">No
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12" id="repeatOffenderDiv">
                                                    <label class="inner-label">
                                                        <?php echo trans("repeatOffenderDiv", 'en'); ?>
                                                        <br>
                                                        <?php echo trans("repeatOffenderDiv", 'bn'); ?>
                                                    </label>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="repeatOffender" id="" class="repeatOffender" value="Yes">Yes</br>
                                                                <span class="questionTip repeatOffenderMsg" style="margin-top:20px">[for hunting section 51(1),for the repeat offence in core of Tiger reserve 51(1C)]</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="repeatOffender" id="" class="repeatOffender" value="No">No
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--START SCHEDULE-III AND SCHEDULE-IV-->
                                        <div id="schudleThreeFour" style="display:none;">


                                            <div class="form-group col-md-12" id="repeatOffenderDiv">
                                                <label class="inner-label">
                                                    <?php echo trans("repeatOffenderDiv", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("repeatOffenderDiv", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="repeatOffender" id="" class="repeatOffender" value="Yes">Yes</br>
                                                            <span class="questionTip repeatOffenderMsg" style="margin-top:20px">[for hunting section 51(1),for the repeat offence in core of Tiger reserve 51(1C)]</span>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="repeatOffender" id="" class="repeatOffender" value="No">No
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!--START SCHEDULE-III AND SCHEDULE-IV-->
                                <div id="schudleThreeFour" style="display:none;">


                                    <div class="form-group col-md-12" id="seizedArticleDivThreeFour">
                                        <label class="inner-label">
                                            <?php echo trans("seizedArticleDivThreeFour", 'en'); ?>
                                            <br>
                                            <?php echo trans("seizedArticleDivThreeFour", 'bn'); ?>
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedArticle[]" id="" class="seizedArticle" value="Animal_article">Animal article <a href='#' data-toggle="modal" data-target="#animal_article">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedArticle[]" id="" class="seizedArticle" value="Trophy">Trophy <a href='#' data-toggle="modal" data-target="#trophy_article">&nbsp;<i class="fa fa-info-circle"></i></a>

                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedArticle[]" id="" class="seizedArticle" value="Live_animal">Live animal <a href='#' data-toggle="modal" data-target="#liveanimal_article">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="checkbox-holder">
                                                    <input type="checkbox" name="seizedArticle[]" id="" class="seizedArticle" value="meat">Meat <a href='#' data-toggle="modal" data-target="#meat_article">&nbsp;<i class="fa fa-info-circle"></i></a>
                                                    <span class="checkbox-checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12" id="accusedHoldDivThreeFour">
                                        <label class="inner-label">
                                        <?php echo trans("accusedHoldDivThreeFour", 'en'); ?>
                                            <br>
                                            <?php echo trans("accusedHoldDivThreeFour", 'bn'); ?>
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="accusedHoldThreeFour" id="" class="accusedHoldThreeFour" value="Yes">Yes
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="accusedHoldThreeFour" id="" class="accusedHoldThreeFour" value="No">No</br>
                                                    <span class="questionTip msgAccuseHold_ThreeFour"> [Section 44(1) r/w 51(1)]</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12" id="accusedProductDivThreeFour">
                                        <label class="inner-label">
                                        <?php echo trans("accusedProductDivThreeFour", 'en'); ?>
                                            <br>
                                            <?php echo trans("accusedProductDivThreeFour", 'bn'); ?>
                                        </label>
                                        <div class="form-row">
                                            <fieldset id="cbgroup">
                                                <div class="form-group col-md-3">
                                                    <label class="checkbox-holder">
                                                        <input type="checkbox" name="accusedProductThreeFourMsg[]" id="" class="accusedProductThreeFour" value="hunting">Hunting</br>
                                                        <span class="questionTip huntingMsgThreeFour">[Section 9, 39(3) r/w 51(1)]</span>
                                                        <span class="checkbox-checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="checkbox-holder">
                                                        <input type="checkbox" name="accusedProductThreeFourMsg[]" id="" class="accusedProductThreeFour" value="trade">Trade</br>
                                                        <span class="questionTip tradeMsgThreeFour">[section 44(1) r/w 51(1)]</span>
                                                        <span class="checkbox-checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="checkbox-holder">
                                                        <input type="checkbox" name="accusedProductThreeFourMsg[]" id="" class="accusedProductThreeFour" value="possession">Possession</br>
                                                        <span class="questionTip possessionMsgThreeFour">[Section 39(3), r/w 51(1) and 57]</span>
                                                        <span class="checkbox-checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="checkbox-holder">
                                                        <input type="checkbox" name="accusedProductThreeFourMsg[]" id="" class="accusedProductThreeFour" value="abetment">Abetment</br>
                                                        <span class="questionTip abetmentMsgThreeFour"> [Section 52 r/w hunting/trade or possession] </span>
                                                        <span class="checkbox-checkmark"></span>
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group col-md-12" id="offenceProtectedAreaDivThreeFour">
                                        <label class="inner-label">
                                            Did the offence occur inside the Protected Area ?
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="offenceProtectedAreaThreeFour" id="" class="offenceProtectedAreaThreeFour" value="Yes">Yes
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="offenceProtectedAreaThreeFour" id="" class="offenceProtectedAreaThreeFour" value="No">No</br>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12" id="permissionProtectedAreaDivThreeFour">
                                        <label class="inner-label">
                                            Did they have permission to enter the Protected Area?
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="permissionProtectedAreaThreeFour" id="" class="permissionProtectedAreaThreeFour" value="Yes">Yes
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="permissionProtectedAreaThreeFour" id="" class="permissionProtectedAreaThreeFour" value="No">No</br>
                                                    <span class="questionTip permissionProtectedArea_ThreeFour"></span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-12" id="appropriatepermitsDivThreeFour">
                                        <label class="inner-label">
                                            Did the accused have appropriate permits to be in the possession of the seized goods?
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="appropriatepermitsThreeFour" id="" class="appropriatepermitsThreeFour" value="Yes">Yes
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="appropriatepermitsThreeFour" id="" class="appropriatepermitsThreeFour" value="No">No</br>
                                                    <span class="questionTip appropriatePermitsMsg">Hunting</br>[section 9, 39(3), r/w 51 (1)]</span></br>
                                                    <span class="questionTip appropriatePermitsMsg">Trade </br>[Section 44(1), r/w 51(1)]</span></br>
                                                    <span class="questionTip appropriatePermitsMsg">Possession </br>[section 39(3) r/w 51(1) & 57]</span></br>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12" id="tigerReserveDivThreeFour">
                                        <label class="inner-label">
                                            Did the offence occur in the core of Tiger Reserve ?
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="tigerReserveThreeFour" id="" class="tigerReserveThreeFour" value="Yes">Yes</br>
                                                    <span class="questionTip tigerReserveThreeFourMsg">[section 27 r/w 51(1C)]</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="tigerReserveThreeFour" id="" class="tigerReserveThreeFour" value="No">No</br>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-12" id="destructionDivThreeFour">
                                        <label class="inner-label">
                                            Was any destruction caused in the Protected Area ?
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="destructionThreeFour" id="" class="destructionThreeFour" value="Yes">Yes</br>
                                                    <span class="questionTip msgAccuseHold_ThreeFour">[section 29 r/w 51 (1)]</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="destructionThreeFour" id="" class="destructionThreeFour" value="No">No
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group col-md-12" id="fireProtectedAreaDivThreeFour">
                                        <label class="inner-label">
                                            Was any fire caused in the Protected Area?
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="fireProtectedAreaThreeFour" id="" class="fireProtectedAreaThreeFour" value="Yes">Yes</br>
                                                    <span class="questionTip firemsgAccuseHold_ThreeFour">[section 30 read with 51(1)]</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="fireProtectedAreaThreeFour" id="" class="fireProtectedAreaThreeFour" value="No">No
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12" id="accusedWeaponDivThreeFour">
                                        <label class="inner-label">
                                            Did the accused enter the Protected Area with weapon ?
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="accusedWeaponThreeFour" id="" class="accusedWeaponThreeFour" value="Yes">Yes</br>
                                                    <span class="questionTip msgaccusedWeaponThreeFour"> [section 31 read with 51(1)]</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="accusedWeaponThreeFour" id="" class="accusedWeaponThreeFour" value="No">No
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12" id="repeatOffenderDivThreeFour">
                                        <label class="inner-label">
                                            Is the accused a repeat offender?
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="repeatOffenderThreeFour" id="" class="repeatOffenderThreeFour" value="Yes">Yes</br>
                                                    <span class="questionTip msgrepeatOffender_ThreeFour"> [Repeat hunting section 51(1),Repeat offence in Tiger Reserve - 51(1C)</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="repeatOffenderThreeFour" id="" class="repeatOffenderThreeFour" value="No">No
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://wlor.wildcrimeassist.in/wlors/speciesfind?id=1164" class="listinBtn pull-left">Previous</a>
                                <input type="submit" class="listinBtn" value="Next" title="Next" name="submit">
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

