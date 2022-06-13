<?php include 'pages/_a.php';?>

<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <div class="innerPage-box">
                <h3 class="innerPage-head" id="ques">
                    <?php echo trans("ques", 'en'); ?>
                    <br>
                    <?php echo trans("ques", 'bn'); ?>
                </h3>
                <!---------------PART--------->
                <div id="alertMessage">
                </div>
                <form role="form" id="form_section1" class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8">
                    <div class="form-group col-md-12">
                        <input type="hidden" name="section_1_no" value="section_1_no">
                        <label class="inner-label" id="in-lab1">
                            <?php echo trans("in-lab1", 'en'); ?>
                            <br>
                            <?php echo trans("in-lab1", 'bn'); ?>
                        </label>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="optradio" required="" id="input-part" class="part" value="Part">Part
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="optradio" required="" id="input-whole" class="whole" value="Whole">Whole
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-col" id="part">
                        <div class="form-group col-md-12 commonPart" id="skin">
                            <label class="inner-label" id="part">
                                <?php echo trans("part", 'en'); ?>
                                <br>
                                <?php echo trans("part", 'bn'); ?>
                            </label>
                            <select class="form-control inner-textfield SpeciecSelect" name="SpeciecSelect" id="SpeciecSelect">
                                <option value="">Select Part </option>
                                <option value="Skin_Fur">Fur/skin/hair</option>
                                <option value="Scales">Scales</option>
                                <option value="Quills">Quills</option>
                                <option value="Antter_Horn">Antlers/Horn</option>
                                <option value="Tusk_Teeth">Teeth</option>
                                <option value="Claws">Claws</option>
                                <option value="Sea_Shells">SeaShells</option>
                                <option value="bones">Bones</option>
                                <option value="Miscellaneous">Miscellaneous</option>
                            </select>

                        </div>
                        <!--****************************** Fur/skin/hair *******************************************-->
                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="mammalReptile">
                            <label class="inner-label" id="mammalReptile">
                                <?php echo trans("mammalReptile", 'en'); ?>
                                <br>
                                <?php echo trans("mammalReptile", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="mammal_reptile" id="" class="mammal_reptile" value="Mammal_Fur">Mammal fur/hair
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="mammal_reptile" id="" class="mammal_reptile" value="Reptile_Skin_Product">Reptile Skin
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="skinBagPurse">
                            <label class="inner-label" id="skin">
                                <?php echo trans("skin", 'en'); ?>
                                <br>
                                <?php echo trans("skin", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="skin" id="" class="skin" value="Snakeskin_Purse">Snake Skin Purse
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="skin" id="" class="skin" value="Crocodile_Skin_Bag">Crocodile Skin Bag
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="snakeSkin">
                            <label class="inner-label" id="skin">
                                <?php echo trans("skin", 'en'); ?>
                                <br>
                                <?php echo trans("skin", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Dhaman or Rat Snake">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Dhaman or Rat Snake</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Indian Cobras">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Indian Cobras</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Pythons">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Pythons</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Common Sand Boa">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Common Sand Boa</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Russel's viper">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Russel's viper</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Colubridae (Typical snakes, water snakes, whipsnakes)">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Colubridae (Typical snakes, water snakes, whipsnakes)</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="King cobra">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">King cobra</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Burmese Python">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Burmese Python</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Indian rock Python">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Indian rock Python</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Spectacled Cobra">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Spectacled Cobra</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Boas">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Boas</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Cobras; Kraits, and Coral Snakes">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Cobras; Kraits, and Coral Snakes</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Fresh water and sea snakes">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Fresh water and sea snakes</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Viper">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Viper</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="snakeSkinInput" class="snakeSkinInput" value="Monocled Cobra">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Monocled Cobra</p>
                                        <span class="checkmark"></span>

                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="crocodilesSkin">
                            <label class="inner-label" id="skin">
                                <?php echo trans("skin", 'en'); ?>
                                <br>
                                <?php echo trans("skin", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="crocodilesInput" class="crocodilesInput" value="Crocodiles (Mugger and Saltwater Crocodile)">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Crocodiles (Mugger and Saltwater Crocodile)</p>
                                        <span class="checkmark"></span>

                                </div>

                            </div>
                        </div>

                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="head">
                            <label class="inner-label" id="head1">
                                <?php echo trans("head1", 'en'); ?>
                                <br>
                                <?php echo trans("head1", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="head_tail" id="input-part" class="head_tail" value="Greater or equal to 2m">Greater or equal to 2m
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="head_tail" id="input-whole" class="head_tail" value="less than 2m">Less than 2m
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="tiger">
                            <label class="inner-label" id="tiger">
                                <?php echo trans("tiger", 'en'); ?>
                                <br>
                                <?php echo trans("tiger", 'bn'); ?>
                            </label>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Tiger">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Tiger</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Snow leopard">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Snow leopard</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Tibetan Antelope Or Chiru (Shahtoosh shawl)">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Tibetan Antelope Or Chiru (Shahtoosh shawl)</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Binturong or Bearcat">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Binturong or Bearcat</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Indian wild Ass">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Indian wild Ass</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Kashmir Stag or Hangul">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Kashmir Stag or Hangul</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Nayan or great Tibetan sheep">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Nayan or great Tibetan sheep</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Wild yak">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Wild yak</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Weasels (Siberian, Yellow-bellied & mountain weasel)">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Weasels (Siberian, Yellow-bellied & mountain weasel)</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Markhor or screw-horned goat">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Markhor or screw-horned goat</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Leopard or Panther">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Leopard or Panther</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Clouded Leopard">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Clouded Leopard</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Cheetah">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Cheetah</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Indian wolf">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Indian wolf</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Tibetan wolf">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Tibetan wolf</p>
                                    <span class="checkmark"></span>

                            </div>
                            <div class="form-group col-md-3" style="min-height:142px;">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_tiger" class="form-control species_tiger_select" value="Bear">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Bear</p>
                                    <span class="checkmark"></span>

                            </div>

                        </div>
                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="Bear">
                            <label class="inner-label">Please Select</label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="BaerInpur" class="form-control BaerInpur" value="Himalayan Brown Bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Himalayan Brown Bear</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="BaerInpur" class="form-control BaerInpur" value="Sloth bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Sloth bear</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="BaerInpur" class="form-control BaerInpur" value="Himalayan black bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Himalayan black bear</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="BaerInpur" class="form-control BaerInpur" value="Malay or Sun Bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Malay or Sun Bear</p>
                                        <span class="checkmark"></span>

                                </div>

                            </div>
                        </div>


                        <div class="form-group col-md-12 commonPart furSkinHairVal" id="cat">
                            <label class="inner-label" id="tiger">
                                <?php echo trans("tiger", 'en'); ?>
                                <br>
                                <?php echo trans("tiger", 'bn'); ?>
                            </label>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Caracal">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Caracal</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Clawless otter">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Clawless otter</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Desert cat">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Desert cat</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Ermine or weasel">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Ermine or weasel</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Fishing cat">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Fishing cat</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Golden Cat">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Golden Cat</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Giant squirrel">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Giant squirrel</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Leopard cat">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Leopard cat</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Lynx">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Lynx</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Malabar Civet">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Malabar Civet</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Marbled cat">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Marbled cat</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Ratel or Honey Badger">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Ratel or Honey Badger</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Spotted linsang">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Spotted linsang</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Lesser or Red Panda">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Lesser or Red Panda</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Otters">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Otters</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Mongooses (All species of genus Herpestes)">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Mongooses (All species of genus Herpestes)</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Wild dog or dhole">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Wild dog or dhole</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Common fox">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Common fox</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Giant squirrels">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Giant squirrels</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Marmots (Himalayan, and long-tailed marmot)">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Marmots (Himalayan, and long-tailed marmot)</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Martens (Beech, yellow-throated & Nilgiri marten)">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Martens (Beech, yellow-throated & Nilgiri marten)</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Pole cats (marbled polecat & European polecat)">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Pole cats (marbled polecat & European polecat)</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Red fox">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Red fox</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Hares (Black naped, Common Indian, Desert, Himalayan mouse hare)">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Hares (Black naped, Common Indian, Desert, Himalayan mouse hare)</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="species_cat" class="form-control species_cat" value="Hispid Hare">
                                    <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                    <p class="img_label">Hispid Hare</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!--****************************** SCALES QUILLS OPTION *******************************************-->

                        <div class="form-group col-md-12 commonPart scalsVal" id="country">
                            <!--<label class="inner-label">Identify the type of Porcupine</label>-->
                            <div class="form-row">
                                <div id="">
                                    <label class="inner-label" id="scale">
                                        <?php echo trans("scale", 'en'); ?>
                                        <br>
                                        <?php echo trans("scale", 'bn'); ?>
                                    </label>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="ScalesCountry" class="form-control country" value="Pangolin">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Pangolin</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="ScalesCountry" class="form-control country" value="Chinese pangolin">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Chinese pangolin</p>
                                        <span class="checkmark"></span>

                                </div>

                            </div>
                        </div>

                        <div class="form-group col-md-12 commonPart quillVal" id="quills">
                            <!--<label class="inner-label">Identify the type of Porcupine</label>-->
                            <div class="form-row">
                                <div id="">
                                    <label class="inner-label" id="quills">
                                        <?php echo trans("quills", 'en'); ?>
                                        <br>
                                        <?php echo trans("quills", 'bn'); ?>
                                    </label>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="QuillsCountry" class="form-control country" value="Himalayan crestless porcupine">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Himalayan crestless porcupine</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="QuillsCountry" class="form-control country" value="Indian porcupine">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Indian porcupine</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="QuillsCountry" class="form-control country" value="Bengal Porcupine">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Bengal Porcupine</p>
                                        <span class="checkmark"></span>

                                </div>
                            </div>
                        </div>

                        <!--Antler Horn-->
                        <div class="form-group col-md-12 commonPart anterHornVal" id="antler_selection">
                            <label class="inner-label" id="antler_selection">
                                <?php echo trans("antler_selection", 'en'); ?>
                                <br>
                                <?php echo trans("antler_selection", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="antler_horn_fld" id="antler_id" class="antler_horn_cl" value="Antler">Antler
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="antler_horn_fld" id="horn_id" class="antler_horn_cl" value="Horn">Horn
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 commonPart anterHornVal" id="antler_size">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="antler_size" class="form-control inner-textfield" value="Swamp Deer">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Swamp Deer</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="antler_size" class="form-control inner-textfield" value="Sambar">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Sambar</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="antler_size" class="form-control inner-textfield" value="Chital or Spotted deer">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Chital or Spotted deer</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="antler_size" class="form-control inner-textfield" value="Bharal">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Bharal</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="antler_size" class="form-control inner-textfield" value="Kashmir Stag or Hangul">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Kashmir Stag or Hangul</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="antler_size" class="form-control inner-textfield" value="Brow-antlered Deer or Thamin">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Brow-antlered Deer or Thamin</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="antler_size" class="form-control inner-textfield" value="Barking Deer or Muntjak">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Barking Deer or Muntjak</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        </div>

                        <div class="form-group col-md-12 commonPart anterHornVal" id="horn_size">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>

                            </label>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Blackbuck">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Blackbuck</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Chinkara or Indian gazelle">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Chinkara or Indian gazelle</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Serow">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Serow</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Rhinoceros">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Rhinoceros</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Gaur or Indian Bison">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Gaur or Indian Bison</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Himalayan ibex">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Himalayan ibex</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Markhor or screw-horned goat">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Markhor or screw-horned goat</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Nayan or great Tibetan sheep">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Nayan or great Tibetan sheep</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Urial or Shapu">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Urial or Shapu</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Wild yak">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Wild yak</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="horn_size" class="form-control inner-textfield" value="Four-Horned Antelope or Chousingha">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Four-Horned Antelope or Chousingha</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        </div>
                        <div class="form-group col-md-12 commonPart teethVal" id="sample_seized">
                            <label class="inner-label" id="sample_seized">
                                <?php echo trans("sample_seized", 'en'); ?>
                                <br>
                                <?php echo trans("sample_seized", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="species_tusk_fld" class="teethInput" value="Indian Elephant">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Indian Elephant</p>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="species_tusk_fld" class="teethInput" value="Wild pig">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Wild pig</p>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="species_tusk_fld" class="teethInput" value="Big_Cats">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Big Cats</p>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="species_tusk_fld" class="teethInput" value="Bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Bear</p>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group col-md-12 teethVal" id="teethBigCat">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="teethBigCat" class="form-control inner-textfield" value="Tiger">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Tiger</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="teethBigCat" class="form-control inner-textfield" value="Snow leopard">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Snow leopard</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="teethBigCat" class="form-control inner-textfield" value="Clouded Leopard">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Clouded Leopard</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="teethBigCat" class="form-control inner-textfield" value="Leopard or Panther">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Leopard or Panther</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 commonPart teethVal" id="teethBeer">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="teethBeerDrop" class="form-control inner-textfield" value="Sloth bear">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Sloth bear</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="teethBeerDrop" class="form-control inner-textfield" value="Malay or Sun Bear">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Malay or Sun Bear</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="teethBeerDrop" class="form-control inner-textfield" value="Himalayan black bear">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Himalayan black bear</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="teethBeerDrop" class="form-control inner-textfield" value="Himalayan Brown Bear">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Himalayan Brown Bear</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!--<div class="form-group col-md-12 commonPart teethVal" id="species_tusk">
<label class="inner-label">Identify the species whose tusk has been seized.</label>
</div>-->

                        <div class="form-group col-md-12 commonPart teethVal" id="species_canine">
                            <label class="inner-label" id="species_canine">
                                <?php echo trans("species_canine", 'en'); ?>
                                <br>
                                <?php echo trans("species_canine", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="species_canine_fld" id="species_canine_id" class="species_canine_cl" value="Cats">
                                        Cats
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="species_canine_fld" id="species_canine_id" class="species_canine_cl" value="Bear">Bear
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-12 commonPart teethVal" id="cat_canine">
                            <!-- <label class="inner-label">Identify the seized species sample</label>-->
                            <select class="form-control inner-textfield" name="cat_canine">
                                <option value="">Please Select</option>
                                <option value="Tiger">Tiger</option>
                                <option value="Snow leopard">Snow leopard</option>
                                <option value="Clouded Leopard">Clouded Leopard</option>
                                <option value="Indian Lion">Indian Lion</option>
                                <option value="Leopard or Panther">Leopard or Panther</option>

                            </select>
                        </div>

                        <div class="form-group col-md-12 commonPart clawsVal" id="bear_canine">
                            <!-- <label class="inner-label">Identify the seized species sample</label>-->
                            <select class="form-control inner-textfield" name="bear_canine">
                                <option value="">Please Select</option>
                                <option value="H_Black_bear">H. Black bear</option>
                                <option value="sloth_bear">Sloth bear</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 commonPart clawsVal" id="clawsoption">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="claws_cat_fld" class="claws_fld" value="Cats">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Big Cats</p>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="claws_cat_fld" class="claws_fld" value="Bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Bear</p>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 commonPart clawsVal" id="claws_cat">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="claws_cat" class="form-control clawsVal" value="Tiger">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Tiger</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="claws_cat" class="form-control clawsVal" value="Snow leopard">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Snow leopard</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="claws_cat" class="form-control clawsVal" value="Clouded Leopard">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Clouded Leopard</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="claws_cat" class="form-control clawsVal" value="Indian Lion">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Indian Lion</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="claws_cat" class="form-control clawsVal" value="Leopard or Panther">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Leopard or Panther</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 commonPart clawsVal" id="claws_bear">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="claws_bear" class="form-control inner-textfield" value="Sloth bear">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Sloth bear</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="claws_bear" class="form-control inner-textfield" value="Himalayan black bear">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Himalayan black bear</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="claws_bear" class="form-control inner-textfield" value="Himalayan Brown Bear">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Himalayan Brown Bear</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-12 commonPart seaShellsVal" id="sea_shells">
                            <label class="inner-label" id="sea_shells">
                                <?php echo trans("sea_shells", 'en'); ?>
                                <br>
                                <?php echo trans("sea_shells", 'bn'); ?>
                            </label>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Giant Clam">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Giant Clam</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Horse Hoof's Clam">
                                    <a data-fancybox href=""><img src="g" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Horse Hoof's Clam</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Fluted Giant clam">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Fluted Giant clam</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Chambered nautilus">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Chambered nautilus</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Trumpet Shell">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Trumpet Shell</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Turban shell">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Turban shell</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Glory of India">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Glory of India</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Helmet">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Helmet</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Vexillate volute shell">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Vexillate volute shell</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Window pane oyster">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Window pane oyster</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Garlic shell">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Garlic shell</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="sea_shells" class="form-control species_seaShellsVal_select" value="Conch">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label" style="height:25px;">Conch</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 commonPart seaShellsVal" id="conch">
                            <label class="inner-label" id="conch">
                                <?php echo trans("conch", 'en'); ?>
                                <br>
                                <?php echo trans("conch", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="conch" class="form-control country" value="Chiragra spider conch">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Chiragra spider conch</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="conch" class="form-control country" value="Pigeon conch">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Pigeon conch</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="conch" class="form-control country" value="Horse conch">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Horse conch</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="conch" class="form-control country" value="Scorpio conch">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Scorpio conch</p>
                                        <span class="checkmark"></span>

                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 commonPart seaShellsVal" id="ClamsSelect">
                            <label class="inner-label" id="ClamsSelect">
                                <?php echo trans("ClamsSelect", 'en'); ?>
                                <br>
                                <?php echo trans("ClamsSelect", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="dropClams" class="dropClams" value="Giant_clam">Giant clam
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="dropClams" class="dropClams" value="Horse’s_hoof">Horse’s hoof
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="dropClams" class="dropClams" value="Fluted_giant_clam">Fluted giant clam
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-12 commonPart seaShellsVal" id="ChamberedNautilus">
                            <label class="inner-label" id="ChamberedNautilus">
                                <?php echo trans("ChamberedNautilus", 'en'); ?>
                                <br>
                                <?php echo trans("ChamberedNautilus", 'bn'); ?>
                            </label>
                            <div class="form-row">


                                <div class="form-group col-md-4">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="Chambered" class="dropClams" value="Chambered nautilus">Chambered Nautilus
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 commonPart" id="bonesDiv">
                            <label class="inner-label" id="bonesDiv">
                                <?php echo trans("bonesDiv", 'en'); ?>
                                <br>
                                <?php echo trans("bonesDiv", 'bn'); ?>
                            </label>

                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="bones" class="form-control bones_radio" value="Tiger">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Tiger</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="bones" class="form-control bones_radio" value="Snow leopard">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Snow leopard</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="bones" class="form-control bones_radio" value="Indian Lion">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Indian Lion</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="bones" class="form-control bones_radio" value="Leopard or Panther">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Leopard or Panther</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="bones" class="form-control bones_radio" value="Clouded Leopard">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Clouded Leopard</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        </div>


                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="miscellaneoussize">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>

                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Hathajodi">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Hatha jodi</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Musk_Pod">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Musk Pod</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Gall_bladder">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Gall bladder</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Siyar_singhi">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Siyar singhi</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Shark_Fin">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Shark Fin</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Ray_gill_rakers">
                                    <a data-fancybox href=""><img src="h" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Ray gill rakers</p>
                                    <span class="checkmark"></span>5f081f5f1d8d2_18_Ray gill rakers
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Carapace_key_chain">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Carapace key chain</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Venom">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Venom</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="radioBtnHolder">
                                    <input type="radio" name="miscellaneoussizeDrop" class="form-control inner-textfield miscellaneoussizeDrop" value="Feather">
                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                    <p class="img_label">Feather</p>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        </div>
                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="HathaJodi">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Hatha Jodi">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Hatha Jodi</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Spiny Tailed Lizard or Sanda">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Spiny Tailed Lizard or Sanda</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Barred, Oval or Yellow Monitor Lizard">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Barred, Oval or Yellow Monitor Lizard</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Agra Monitor Lizard or Desert Monitor">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Agra Monitor Lizard or Desert Monitor</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Large Bengal Monitor Lizard">
                                        <a data-fancybox href="g"><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Large Bengal Monitor Lizard</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="HathaJodiInput" class="HathaJodiInput" value="Monitor Lizard (Varanus species excluding yellow monitor lizard)">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Monitor Lizard (Varanus species excluding yellow monitor lizard)</p>
                                        <span class="checkmark"></span>

                                </div>

                            </div>
                        </div>
                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="Muskpod">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="MuskpodInput" class="HathaJodiInput" value="Musk deer">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Musk deer</p>
                                        <span class="checkmark"></span>

                                </div>

                            </div>
                        </div>
                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="gallBladder">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="gallBladderInput" class="gallBladderInput" value="Malay or Sun Bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Malay or Sun Bear</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="gallBladderInput" class="gallBladderInput" value="Himalayan black bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Himalayan black bear</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="gallBladderInput" class="gallBladderInput" value="Himalayan Brown Bear">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Himalayan Brown Bear</p>
                                        <span class="checkmark"></span>

                                </div>

                            </div>
                        </div>

                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="siyarSinghi">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="siyarSinghiInput" class="siyarSinghiInput" value="Jackal">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Jackal</p>
                                        <span class="checkmark"></span>

                                </div>


                            </div>
                        </div>
                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="sharkFin">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Sharks">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Sharks</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Whale Shark">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Whale Shark</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Narrow sawfish">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Narrow sawfish</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Ganges Shark">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Ganges Shark</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Green sawfish">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Green sawfish</p>
                                        <span class="checkmark"></span>

                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="sharkFiniInput" class="siyarSinghiInput" value="Giant guitarfish">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Giant guitarfish</p>
                                        <span class="checkmark"></span>

                                </div>


                            </div>
                        </div>

                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="rayGillRakers">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="porcupineRayInput" class="porcupineRayInput" value="Porcupine ray">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Porcupine ray</p>
                                        <span class="checkmark"></span>

                                </div>


                            </div>
                        </div>

                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="carapacekeyChain">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Green sea turtle">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Green sea turtle</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Hawksbill Turtle">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Hawksbill Turtle</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Loggerhead turtle">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Loggerhead turtle</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Oliveback loggerhead turtle">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Oliveback loggerhead turtle</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="CarapaceInput" class="oliveRidleyInput" value="Three-keeled Turtle">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Three-keeled Turtle</p>
                                        <span class="checkmark"></span>
                                </div>

                            </div>
                        </div>
                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="venomdiv">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="venomInput" class="oliveRidleyInput" value="Russel's viper">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Russel's viper</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="venomInput" class="oliveRidleyInput" value="Indian Cobras">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Indian Cobras</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="venomInput" class="oliveRidleyInput" value="King cobra">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">King cobra</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="venomInput" class="oliveRidleyInput" value="Cobras; Kraits, and Coral Snakes">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Cobras; Kraits, and Coral Snakes</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="venomInput" class="oliveRidleyInput" value="Fresh water and sea snakes">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Fresh water and sea snakes</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="venomInput" class="oliveRidleyInput" value="Viper">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Viper</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="venomInput" class="oliveRidleyInput" value="Monocled Cobra">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Monocled Cobra</p>
                                        <span class="checkmark"></span>
                                </div>

                            </div>
                        </div>
                        <div class="form-group col-md-12 miscellaneousVal commonPart" id="FeatherDiv">
                            <label class="inner-label" id="antler_size">
                                <?php echo trans("antler_size", 'en'); ?>
                                <br>
                                <?php echo trans("antler_size", 'bn'); ?>
                            </label>
                            <div class="form-row">
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="featherInput" class="oliveRidleyInput" value="Peafowl">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Peafowl</p>
                                        <span class="checkmark"></span>
                                </div>
                                <div class="form-group col-md-3" style="min-height:142px;">
                                    <label class="radioBtnHolder">
                                        <input type="radio" name="featherInput" class="oliveRidleyInput" value="Grey jungle fowl">
                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                        <p class="img_label">Grey jungle fowl</p>
                                        <span class="checkmark"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!********************************PART END****************************************>
                        <!*******************************WHOLE START**************************************>

                            <div id=" whole">
                                <div class="form-group col-md-12 commonWhole" id="wholeSelectDrop">
                                    <label class="inner-label" id="wholeSelectDrop">
                                        <?php echo trans("wholeSelectDrop", 'en'); ?>
                                        <br>
                                        <?php echo trans("wholeSelectDrop", 'bn'); ?>
                                    </label>
                                    <select class="form-control inner-textfield wholeSelect" name="wholeSelect">
                                        <option>Please Select Whole</option>
                                        <option value="birds">Birds</option>
                                        <option value="amphibians">Amphibians</option>
                                        <option value="fft">Freshwater turtles and tortoises</option>
                                        <option value="lizard">Lizards & Crocodilians</option>
                                        <option value="mammals">Mammals</option>
                                        <option value="snakes">Snakes</option>
                                        <option value="marine">Marine</option>
                                    </select>
                                </div>
                                <!******************************amphibians START************************************************************************************************************>
                                    <div class="form-group col-md-12 commonWhole amphibianVal" id="amphibiansSelect">
                                        <label class="inner-label" id="antler_size">
                                            <?php echo trans("antler_size", 'en'); ?>
                                            <br>
                                            <?php echo trans("antler_size", 'bn'); ?>
                                        </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-3" style="min-height:142px;">
                                                <label class="radioBtnHolder">
                                                    <input type="radio" name="Amphibiansradio" class="form-control country" value="Fresh Water Frogs (Rana species) e.g Indian Bull Frog">
                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                    <p class="img_label">Fresh Water Frogs (Rana species) e.g Indian Bull Frog</p>
                                                    <span class="checkmark"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <!******************************amphibians end************************************************************************************************************>
                                        <!******************************BIRDS START************************************************************************************************************>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="birdsLiveMeat">
                                                <label class="inner-label" id="birdsLiveMeat">
                                                    <?php echo trans("birdsLiveMeat", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("birdsLiveMeat", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdslivemeatradio" id="" class="birdslivemeatradio" value="live">Live
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdslivemeatradio" id="" class="birdslivemeatradio" value="meat">Carcass
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="birdsSelect">
                                                <label class="inner-label" id="birdsSelect">
                                                    <?php echo trans("birdsSelect", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("birdsSelect", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdsSelectradio" id="" class="birdsSelectradio" value="Wlpa">Wild Life (Protection) Act
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdsSelectradio" id="" class="birdsSelectradio" value="Customs">Customs Act
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="wlpaSize">
                                                <label class="inner-label" id="wlpaSize">
                                                    <?php echo trans("wlpaSize", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("wlpaSize", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Small">Small
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Medium">Medium
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSizeRadio" id="" class="wlpaSizeRadio" value="Large">Large
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="wlpaSmall">
                                                <label class="inner-label" id="antler_size">
                                                    <?php echo trans("antler_size", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Munias (red avadavat, white rumped, scaly breasted, green, black headed)">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Munias (red avadavat, white rumped, scaly breasted, green, black headed)</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Babblers">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Babblers</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Barbets">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Barbets</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Chloropsis or Leafbird">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Chloropsis or Leafbird</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Flowerpeckers">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Flowerpeckers</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Flycatchers">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Flycatchers</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Larks">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Larks</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Minivets">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Minivets</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Orioles">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Orioles</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Pittas">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Pittas</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Rollers or Blue jays">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Rollers or Blue jays</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Sunbirds">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Sunbirds</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Thrushes">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Thrushes</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="Tits">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Tits</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="wlpaSmallRadio" class="wlpaSmallRadio" value="White-eyes">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">White-eyes</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="wlpaMedium">
                                                <label class="inner-label" id="antler_size">
                                                    <?php echo trans("antler_size", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                </label>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Hill Myna">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Hill Myna</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Parakeets">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Parakeets</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Bulbuls">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Bulbuls</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Falcons (except Falco peregrinus, F. biarmicus, F.chicuera)">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Falcons (except Falco peregrinus, F. biarmicus, F.chicuera)</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Nicobar pigeon">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Nicobar pigeon</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Tragopan Pheasants(Western tragopan, Blyth's Tragopan, Satyr tragopan, Temminck's tragopan)">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Tragopan Pheasants(Western tragopan, Blyth's Tragopan, Satyr tragopan, Temminck's tragopan)</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Lord Derby’s parakeet">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Lord Derby’s parakeet</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Bustard-Quails">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Bustard-Quails</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Jays">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Jays</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Quails">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Quails</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Trogons">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Trogons</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Waxbills">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Waxbills</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="wlpaMediumSelect" id="wlpaMediumSelect" class="form-control inner-textfield" value="Bazas (Jerdon's Baza & Black Baza)">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Bazas (Jerdon's Baza & Black Baza)</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>


                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="wlpaLarge">
                                                <label class="inner-label" id="antler_size">
                                                    <?php echo trans("antler_size", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Barnowls">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Barnowls</p>
                                                                <span class="checkmark"></span>

                                                        </div>
                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Great Indian hornbill">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Great Indian hornbill</p>
                                                                <span class="checkmark"></span>

                                                        </div>
                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Large Falcons">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Large Falcons</p>
                                                                <span class="checkmark"></span>

                                                        </div>
                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Siberian white crane">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Siberian white crane</p>
                                                                <span class="checkmark"></span>

                                                        </div>
                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Owls">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Owls</p>
                                                                <span class="checkmark"></span>

                                                        </div>
                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaLargeRadio" class="wlpaLargeRadio" value="Comb duck">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Comb duck</p>
                                                                <span class="checkmark"></span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="birdsCustom">
                                                <label class="inner-label" id="wlpaSize">
                                                    <?php echo trans("wlpaSize", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("wlpaSize", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdsCustomRadio" id="" class="birdsCustomRadio" value="Small">Small
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdsCustomRadio" id="" class="birdsCustomRadio" value="Medium">Medium
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdsCustomRadio" id="" class="birdsCustomRadio" value="Large">Large
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="birdsSmallSelect">
                                                <label class="inner-label" id="antler_size">
                                                    <?php echo trans("antler_size", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                </label>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Rosella">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Rosella</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Rainbow Lorikeet">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Rainbow Lorikeet</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Sun Conure">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Sun Conure</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Pygmy falcon">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Pygmy falcon</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsSmall" id="birdsSmall" class="form-control inner-textfield" value="Javan Sparrow">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Javan Sparrow</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="birdsMediumSelect">
                                                <label class="inner-label" id="antler_size">
                                                    <?php echo trans("antler_size", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdsMediumSelect" class="birdsMediumSelect" value="Bird of Paradise">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Bird of Paradise</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdsMediumSelect" class="birdsMediumSelect" value="Grey Parrot">
                                                            <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                            <p class="img_label">Grey Parrot</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdsMediumSelect" class="birdsMediumSelect" value="Hyacinth Macaw">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Hyacinth Macaw</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="birdsLargeSelect">
                                                <label class="inner-label" id="antler_size">
                                                    <?php echo trans("antler_size", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                </label>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="Scarlet Macaw">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Scarlet Macaw</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="Blue-and-yellow Macaw">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Blue-and-yellow Macaw</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="Sulphur crested Cockatoo">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Sulphur crested Cockatoo</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="Large Falcons">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">Large Falcons</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="radioBtnHolder">
                                                        <input type="radio" name="birdsLarge" id="birdsLarge" class="form-control inner-textfield" value="African Grey Parrot">
                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                        <p class="img_label">African Grey Parrot</p>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 commonWhole birdVal" id="birdslivemeatradio">
                                                <label class="inner-label" id="antler_size">
                                                    <?php echo trans("antler_size", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                </label>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Kalij Pheasant">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Kalij Pheasant</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Junglefowl">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Junglefowl</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Partridges">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Partridges</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Great Indian hornbill">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Great Indian hornbill</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Cheer pheasant">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Cheer pheasant</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Hornibills (Rusty-cheeked, rufous-necked & Wreathed Hornbill)">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Hornibills (Rusty-cheeked, rufous-necked & Wreathed Hornbill)</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Hume’s bar-backed pheasant">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Hume’s bar-backed pheasant</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Lammergeier or Bearded vulture">
                                                            <img src="" alt="Species Image" style="height:80px;width:120px;">
                                                            <p class="img_label">Lammergeier or Bearded vulture</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Monal Pheasants (Himalayan Monal & Sclater's Monal)">
                                                            <img src="" alt="Species Image" style="height:80px;width:120px;">
                                                            <p class="img_label">Monal Pheasants (Himalayan Monal & Sclater's Monal)</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Nicobar pigeon">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Nicobar pigeon</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Scalater’s Monal">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Scalater’s Monal</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Tragopan Pheasants(Western tragopan, Blyth's Tragopan, Satyr tragopan, Temminck's tragopan)">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Tragopan Pheasants(Western tragopan, Blyth's Tragopan, Satyr tragopan, Temminck's tragopan)</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="White-eared pheasant">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">White-eared pheasant</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Brown-headed gull">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Brown-headed gull</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Bustards">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Bustards</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Bustard-Quails">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Bustard-Quails</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Comb duck">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Comb duck</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Grebes">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Grebes</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Jacanas">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Jacanas</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Megapodes">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Megapodes</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Quails">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Quails</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Sandgrouses">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Sandgrouses</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Vultures">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Vultures</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Black-necked crane">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Black-necked crane</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="birdmeatradiobtn" class="birdmeatradiobtn" value="Blood pheasants">
                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                            <p class="img_label">Blood pheasants</p>
                                                            <span class="checkmark"></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!**********************************BIRDS END*************************************************************>

                                                <!**********************************FTT START*************************************************************>

                                                    <div class="form-group col-md-12 commonWhole inputWholeSelect fftVal">
                                                        <label class="inner-label" id="tortoise">
                                                            Is the Freshwater turtles and tortoises seized
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="fftInput" id="" class="fftInput" value="Live">Live
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="fftInput" id="" class="fftInput" value="Meat_eggs">Carcass
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 commonWhole fftVal" id="liveInput">
                                                        <label class="inner-label" id="liveInput">
                                                            <?php echo trans("liveInput", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("liveInput", 'bn'); ?>
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="liveInput" id="" class="liveInput" value="Wlpa">Wild Life (Protection) Act
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="liveInput" id="" class="liveInput" value="Customs">Customs Act
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 commonWhole fftVal" id="wlpaSelectDiv">
                                                        <label class="inner-label" id="wlpaSelectDiv">Identify the species seized</label>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Eastern Hill Terrapin">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label" style="height:140px;">Eastern Hill Terrapin</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Indian Tent Turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label" style="height:140px;">Indian Tent Turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Sail Terrapin">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label" style="height:140px;">Sail Terrapin</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Spotted black terrapin">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label" style="height:140px;">Spotted black terrapin</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Terrapin">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label" style="height:140px;">Terrapin</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Tortoises (All tortoises, Family: Testudinidae) and Turtles (Family: Tryonichidae) which are not in other schedules.">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label" style="height:140px;">Tortoises (All tortoises, Family: Testudinidae) and Turtles (Family: Tryonichidae) which are not in other schedules.</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="wlpaSelect" id="wlpaSelect" class="form-control species_tiger_select" value="Kerala Forest Terrapin">
                                                                <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                <p class="img_label" style="height:140px;">Kerala Forest Terrapin</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>

                                                    </div>

                                                    <!------START--Customs----------->
                                                    <div class="form-group col-md-12 commonWhole fftVal" id="customDiv">
                                                        <label class="inner-label" id="wlpaSelectDiv">
                                                            <?php echo trans("wlpaSelectDiv", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("wlpaSelectDiv", 'bn'); ?>
                                                        </label>

                                                        <div class="form-group col-md-3" style="height:140px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Radiated Tortoise">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Radiated Tortoise</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3" style="height:140px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="African Spurred Tortoise">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">African Spurred Tortoise</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3" style="height:140px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Common snapping turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Common snapping turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3" style="height:140px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Red eared slider">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Red eared slider</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3" style="height:140px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Brown Roofed Turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Brown Roofed Turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3" style="height:140px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Crowned river turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Crowned river turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3" style="height:140px;">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="customSelect" id="customSelect" class="form-control inner-textfield" value="Three Striped Roofed Turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Three Striped Roofed Turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <!------END---Customs---------->
                                                    <!------START--Meat/eggs----------->
                                                    <div class="form-group col-md-12 commonWhole fftVal" id="meatEggsDiv">
                                                        <label class="inner-label" id="wlpaSelectDiv">
                                                            <?php echo trans("wlpaSelectDiv", 'en'); ?>
                                                            <br>
                                                            <?php echo trans("wlpaSelectDiv", 'bn'); ?>
                                                        </label>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Eastern Hill Terrapin">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Eastern Hill Terrapin</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Ganges Soft-shelled Turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Ganges Soft-shelled Turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Peacock-marked soft-shelled turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Peacock-marked soft-shelled turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Indian Soft-shelled Turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Indian Soft-shelled Turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Tortoises (All tortoises, Family: Testudinidae) and Turtles (Family: Tryonichidae) which are not in other schedules.">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Tortoises (All tortoises, Family: Testudinidae) and Turtles (Family: Tryonichidae) which are not in other schedules.</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Audithia Turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Audithia Turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Leathery turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Leathery turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Three-keeled Turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Three-keeled Turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Green sea turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Green sea turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Hawksbill Turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Hawksbill Turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Loggerhead turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Loggerhead turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="radioBtnHolder">
                                                                <input type="radio" name="meatEggsSelect" id="meatEggsSelect" class="form-control inner-textfield" value="Oliveback loggerhead turtle">
                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                <p class="img_label">Oliveback loggerhead turtle</p>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <!------END---Meat/eggs---------->
                                                    <!**********************************END FTT Whole*************************************************************>

                                                        <!------START--Marine----------->
                                                        <div class="form-group col-md-12 commonWhole marineval" id="marineDiv">
                                                            <label class="inner-label" id="marineDiv">
                                                                <?php echo trans("marineDiv", 'en'); ?>
                                                                <br>
                                                                <?php echo trans("marineDiv", 'bn'); ?>
                                                            </label>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sea Horse">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Sea Horse</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sea Fan">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Sea Fan</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sponges">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Sponges</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sea Cucumber">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Sea Cucumber</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Glory of India">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Glory of India</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Sharks">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Sharks</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Bull Mouth Helmet">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Bull Mouth Helmet</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Arthritic spider conch">
                                                                    <a data-fancybox href="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5f193ffc39f02_18_arthriticus_01Harpago_.jpg"><img src="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5f193ffc39f02_18_arthriticus_01Harpago_.jpg" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Arthritic spider conch</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Chiragra spider conch">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Chiragra spider conch</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Orange Spider Conch">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Orange Spider Conch</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Top shell/Trochus shell">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Top shell/Trochus shell</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Millipede spider conch">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Millipede spider conch</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Map cowrie shell">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Map cowrie shell</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Great green turban shell">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Great green turban shell</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Lamacina cowrie shell">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Lamacina cowrie shell</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Mole cowrie shell">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Mole cowrie shell</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Whale Shark">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Whale Shark</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Narrow sawfish">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Narrow sawfish</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Ganges Shark">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Ganges Shark</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Ganges stingray">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Ganges stingray</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Green sawfish">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Green sawfish</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Giant guitarfish">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Giant guitarfish</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Giant Clam">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Giant Clam</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="marineSelect" id="marineSelect" class="form-control inner-textfield marineSelect" value="Coral">
                                                                    <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                    <p class="img_label">Coral</p>
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="form-group col-md-12 commonWhole marineval" id="marineCorla">
                                                            <label class="inner-label" id="antler_size">
                                                                Identify the species</label>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="marineCorlaRadio" class="marineCorlaRadio" value="Reef Building Corals">
                                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">Reef Building Corals</p>
                                                                        <span class="checkmark"></span>
                                                                </div>
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="marineCorlaRadio" class="marineCorlaRadio" value="Black corals">
                                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">Black corals</p>
                                                                        <span class="checkmark"></span>
                                                                </div>
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="marineCorlaRadio" class="marineCorlaRadio" value="Organ Pipe Corals">
                                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">Organ Pipe Corals</p>
                                                                        <span class="checkmark"></span>
                                                                </div>
                                                                <div class="form-group col-md-3" style="min-height:142px;">
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="marineCorlaRadio" class="marineCorlaRadio" value="Fire Corals">
                                                                        <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                        <p class="img_label">Fire Corals</p>
                                                                        <span class="checkmark"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!------END---Marines---------->
                                                        <!**********************************STSRT LIZARD Whole*************************************************************>
                                                            <!------START--Lizard----------->
                                                            <div class="form-group col-md-12 commonWhole lizardVal" id="lizardDiv">
                                                                <label class="inner-label" id="lizardDiv">
                                                                    <?php echo trans("lizardDiv", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("lizardDiv", 'bn'); ?>
                                                                </label>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="lizardSelect" id="" class="lizardSelect" value="Live">Live
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="lizardSelect" id="" class="lizardSelect" value="Meat">Carcass
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12  commonWhole lizardVal" id="lizardInput">
                                                                <label class="inner-label" id="birdsSelect">
                                                                    <?php echo trans("birdsSelect", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("birdsSelect", 'bn'); ?>
                                                                </label>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="lizardradio" id="" class="lizardradio" value="Custom">Customs Act
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="lizardradio" id="" class="lizardradio" value="Wlpa">Wild Life (Protection) Act
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12 commonWhole lizardVal" id="customInput">
                                                                <label class="inner-label" id="antler_size">
                                                                <?php echo trans("antler_size", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("antler_size", 'bn'); ?>

                                                                </label>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Iguana" class="Iguana" value="Common Green Iguana">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Common Green Iguana</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Iguana" class="Iguana" value="Hispaniolan Rhinoceros Iguana">
                                                                            <img src="" alt="Species Image" style="height:80px;width:120px;">
                                                                            <p class="img_label">Hispaniolan Rhinoceros Iguana</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12 commonWhole lizardVal" id="wlpaInput">
                                                                <label class="inner-label" id="antler_size">
                                                                <?php echo trans("antler_size", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                                </label>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaInput" class="wlpaInput" value="Gharial">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Gharial</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaInput" class="wlpaInput" value="Golden Gecko">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Golden Gecko</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaInput" class="wlpaInput" value="Chameleon">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Chameleon</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaInput" class="wlpaInput" value="Tokay Gecko">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Tokay Gecko</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaInput" class="wlpaInput" value="Himalayan newt or salamander">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Himalayan newt or salamander</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="wlpaInput" class="wlpaInput" value="Monitor Lizard (Varanus species excluding yellow monitor lizard)">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Monitor Lizard (Varanus species excluding yellow monitor lizard)</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12 commonWhole lizardVal" id="maetInputDiv">
                                                                <label class="inner-label" id="antler_size">
                                                                <?php echo trans("antler_size", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                                </label>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="maetInput" class="maetInput" value="Spiny Tailed Lizard or Sanda">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Spiny Tailed Lizard or Sanda</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="maetInput" class="maetInput" value="Barred, Oval or Yellow Monitor Lizard">
                                                                            <a data-fancybox href="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5dc0f9cbcbc10_Barred, Oval or Yellow Monitor_Anirban Chaudhuri.jpg"><img src="https://admin.wildcrimeassist.in/wcsindia/wcsindia/5dc0f9cbcbc10_Barred, Oval or Yellow Monitor_Anirban Chaudhuri.jpg" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Barred, Oval or Yellow Monitor Lizard</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="maetInput" class="maetInput" value="Monitor Lizard (Varanus species excluding yellow monitor lizard)">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Monitor Lizard (Varanus species excluding yellow monitor lizard)</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="maetInput" class="maetInput" value="Large Bengal Monitor Lizard">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Large Bengal Monitor Lizard</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                    <div class="form-group col-md-3" style="min-height:142px;">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="maetInput" class="maetInput" value="Water lizard">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Water lizard</p>
                                                                            <span class="checkmark"></span>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!------END---Lizard---------->
                                                            <!**********************************END LIZARD Whole*************************************************************>
                                                                <!-----------MAMMALS START---------------->
                                                                <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsSelect">
                                                                    <label class="inner-label" id="mammalsSelect">
                                                                    <?php echo trans("mammalsSelect", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("mammalsSelect", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalRadio" id="" class="mammalRadio" value="Live">Live
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalRadio" id="" class="mammalRadio" value="Meat">Carcass
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsLive">
                                                                    <label class="inner-label" id="liveInput">
                                                                    <?php echo trans("liveInput", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("liveInput", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveRadio" id="" class="mammalsLiveRadio" value="Wlpa">Wild Life (Protection) Act
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveRadio" id="" class="mammalsLiveRadio" value="Customs">Customs Act
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsMeat">
                                                                    <label class="inner-label" id="wlpaSelectDiv">
                                                                    <?php echo trans("wlpaSelectDiv", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("wlpaSelectDiv", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Civets (all species of Viverridae except Malabar civet)">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Civets (all species of Viverridae except Malabar civet)</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Crab-eating Macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Crab-eating Macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Gangetic dolphin">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Gangetic dolphin</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Capped Langur">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Capped Langur</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Catecean spp. (whales, dolphins, and porpoises)">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Catecean spp. (whales, dolphins, and porpoises)</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Dugong  (or Sea cow)">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Dugong (or Sea cow)</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Hoolock gibbon">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Hoolock gibbon</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Leaf monkey">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Leaf monkey</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Lion tailed macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Lion tailed macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Rhesus Macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Rhesus Macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Assamese macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Assamese macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Cetatean species">
                                                                                <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                                <p class="img_label">Cetatean species</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Sperm whale">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Sperm whale</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Andaman Wild pig">
                                                                                <img src="" alt="Species Image" style="height:80px;width:120px;">
                                                                                <p class="img_label">Andaman Wild pig</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Golden Langur">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Golden Langur</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Binturong or Bearcat">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Binturong or Bearcat</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Caracal">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Caracal</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Indian Elephant">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Indian Elephant</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Little Indian porpoise">
                                                                                <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                                <p class="img_label">Little Indian porpoise</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Nilgiri langur">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Nilgiri langur</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Rusty spotted cat">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Rusty spotted cat</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Tiger">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Tiger</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" class="mammalsMeatRadio" value="Indian Lion">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Indian Lion</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" id="" class="mammalsMeatRadio" value="Ungulates">
                                                                                Ungulates
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group col-md-3">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsMeatRadio" id="" class="mammalsMeatRadio" value="Small_Mammals">
                                                                                Small Mammals
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsLiveCustom">
                                                                    <label class="inner-label" id="antler_size">
                                                                    <?php echo trans("antler_size", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Indian Lion">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Indian Lion</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Capuchin monkey">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Capuchin monkey</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Spider monkey">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Spider monkey</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Vervet Monkey">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Vervet Monkey</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Black-and-White Ruffed Lemur">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Black-and-White Ruffed Lemur</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Ring-tailed Lemur">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Ring-tailed Lemur</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Common Marmoset">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Common Marmoset</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="African Pygmy Hedgehog">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">African Pygmy Hedgehog</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="mammalsLiveCustom" class="form-control inner-textfield mammalsLiveCustom" value="Squirrel Monkey">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Squirrel Monkey</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole mammalVal" id="UngulatesSelect">
                                                                    <label class="inner-label">
                                                                        Identify the species seized.
                                                                    </label>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Gaur or Indian Bison">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Gaur or Indian Bison</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Serow">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Serow</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Barking Deer or Muntjak">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Barking Deer or Muntjak</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Nilgai">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Nilgai</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Sambar">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Sambar</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Chital or Spotted deer">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Chital or Spotted deer</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Wild pig">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Wild pig</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Himalayan ibex">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Himalayan ibex</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Himalayan tahr">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Himalayan tahr</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Indian wild Ass">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Indian wild Ass</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Kashmir Stag or Hangul">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Kashmir Stag or Hangul</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Markhor or screw-horned goat">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Markhor or screw-horned goat</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Nilgiri Tahr">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Nilgiri Tahr</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Nayan or great Tibetan sheep">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Nayan or great Tibetan sheep</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Tibetan gazelle">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Tibetan gazelle</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Urial or Shapu">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Urial or Shapu</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Wild buffalo">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Wild buffalo</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Wild yak">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Wild yak</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Blackbuck">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Blackbuck</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Brow-antlered Deer or Thamin">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Brow-antlered Deer or Thamin</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Chinkara or Indian gazelle">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Chinkara or Indian gazelle</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Mouse deer">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Mouse deer</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Swamp Deer">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Swamp Deer</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Four-Horned Antelope or Chousingha">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Four-Horned Antelope or Chousingha</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Ungulates" id="Ungulates" class="form-control inner-textfield Ungulates" value="Bharal">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Bharal</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole mammalVal" id="Small_MammalsSelect">
                                                                    <label class="inner-label">
                                                                    <?php echo trans("inner-label", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("inner-label", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Hispid Hare">
                                                                            <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                            <p class="img_label">Hispid Hare</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Hares (Black naped, Common Indian, Desert, Himalayan mouse hare)">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Hares (Black naped, Common Indian, Desert, Himalayan mouse hare)</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Indian porcupine">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Indian porcupine</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Malabar Civet">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Malabar Civet</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Pygmy hog">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Pygmy hog</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Ratel or Honey Badger">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Ratel or Honey Badger</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Bengal Porcupine">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Bengal Porcupine</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Himalayan crestless porcupine">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Himalayan crestless porcupine</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Pangolin">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Pangolin</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Chinese pangolin">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Chinese pangolin</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Giant squirrels">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Giant squirrels</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Marmots (Himalayan, and long-tailed marmot)">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Marmots (Himalayan, and long-tailed marmot)</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Martens (Beech, yellow-throated & Nilgiri marten)">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Martens (Beech, yellow-throated & Nilgiri marten)</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label class="radioBtnHolder">
                                                                            <input type="radio" name="Small_Mammals" class="form-control inner-textfield Ungulates" value="Giant squirrel">
                                                                            <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                            <p class="img_label">Giant squirrel</p>
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole mammalVal" id="mammalsLiveWlpa">
                                                                    <label class="inner-label" id="antler_size">
                                                                    <?php echo trans("antler_size", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Indian Lion">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Indian Lion</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Slow Loris">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Slow Loris</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Malay or Sun Bear">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Malay or Sun Bear</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Bonnet Macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Bonnet Macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Rhesus Macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Rhesus Macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Crab-eating Macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Crab-eating Macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Ermine or weasel">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Ermine or weasel</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Binturong or Bearcat">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Binturong or Bearcat</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Capped Langur">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Capped Langur</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Giant squirrel">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Giant squirrel</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Leaf monkey">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Leaf monkey</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Lion tailed macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Lion tailed macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Pygmy hog">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Pygmy hog</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Assamese macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Assamese macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Ferret badgers (Chinese & Burmese ferret badgers)">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Ferret badgers (Chinese & Burmese ferret badgers)</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Pig-tailed macaque">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Pig-tailed macaque</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Marmots (Himalayan, and long-tailed marmot)">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Marmots (Himalayan, and long-tailed marmot)</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Hedgehog">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Hedgehog</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Caracal">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Caracal</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Cheetah">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Cheetah</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Golden Langur">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Golden Langur</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Hoolock gibbon">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Hoolock gibbon</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Pallas’s Cat">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Pallas’s Cat</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="mammalsLiveWlpaRadio" class="mammalsLiveWlpaRadio" value="Tiger">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Tiger</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-----------MAMMALS END---------------->
                                                                <!-----------SNAKES START---------------->
                                                                <div class="form-group col-md-12 commonWhole snakeVal" id="snakeLiveMeatSelect">
                                                                    <label class="inner-label" id="snakeLiveMeatSelect">
                                                                    <?php echo trans("snakeLiveMeatSelect", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("snakeLiveMeatSelect", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakeLiveMeatRadio" id="" class="snakeLiveMeatRadio" value="live">Live
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakeLiveMeatRadio" id="" class="snakeLiveMeatRadio" value="meat">Carcass
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-12 commonWhole snakeVal" id="snakesSelect">
                                                                    <label class="inner-label" id="liveInput">
                                                                    <?php echo trans("liveInput", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("liveInput", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesradio" id="" class="snakesradio" value="Wlpa">Wild Life (Protection) Act
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesradio" id="" class="snakesradio" value="Customs">Customs Act
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-12 commonWhole snakeVal" id="snakesCustom">
                                                                    <label class="inner-label" id="antler_size">
                                                                    <?php echo trans("antler_size", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("antler_size", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesCustomradio" class="snakesCustomradio" value="Russel's viper">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Russel's viper</p>
                                                                                <span class="checkmark"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole snakeVal" id="snakesLiveWlpa">
                                                                    <label class="inner-label" id="antler_size">
                                                                        Identify the species
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Dhaman or Rat Snake">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Dhaman or Rat Snake</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Indian Cobras">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Indian Cobras</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Russel's viper">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Russel's viper</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Common Sand Boa">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Common Sand Boa</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Pythons">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Pythons</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Colubridae (Typical snakes, water snakes, whipsnakes)">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Colubridae (Typical snakes, water snakes, whipsnakes)</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="King cobra">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">King cobra</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Burmese Python">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Burmese Python</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Indian rock Python">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Indian rock Python</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Spectacled Cobra">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Spectacled Cobra</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Boas">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Boas</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Egg eating snake">
                                                                                <img src="/images/noimage.png" alt="Species Image" style="height:80px;width:120px;">
                                                                                <p class="img_label">Egg eating snake</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Cobras; Kraits, and Coral Snakes">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Cobras; Kraits, and Coral Snakes</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Viper">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Viper</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Monocled Cobra">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Monocled Cobra</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakesLiveWlpa" class="snakesLiveWlpa" value="Red Sand Boa">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Red Sand Boa</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole snakeVal" id="snakeMeatSelect">
                                                                    <label class="inner-label" id="wlpaSelectDiv">
                                                                    <?php echo trans("wlpaSelectDiv", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("wlpaSelectDiv", 'bn'); ?>
                                                                    </label>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakeMeatRadio" class="snakeMeatRadio" value="Pythons">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Pythons</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakeMeatRadio" class="snakeMeatRadio" value="Burmese Python">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Burmese Python</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                        <div class="form-group col-md-3" style="min-height:142px;">
                                                                            <label class="radioBtnHolder">
                                                                                <input type="radio" name="snakeMeatRadio" class="snakeMeatRadio" value="Indian rock Python">
                                                                                <a data-fancybox href=""><img src="" alt="Species Image" style="height:80px;width:120px;"></a>
                                                                                <p class="img_label">Indian rock Python</p>
                                                                                <span class="checkmark"></span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 commonWhole snakeVal" id="ColubridaeSelect">
                                                                    <label class="inner-label" id="wlpaSelectDiv">
                                                                    <?php echo trans("wlpaSelectDiv", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("wlpaSelectDiv", 'bn'); ?>
                                                                    </label>
                                                                    <select class="form-control inner-textfield Colubridae" name="Colubridae" id="Colubridae">
                                                                        <option>Please Select</option>
                                                                        <option value="Bronzeback">Bronzeback</option>
                                                                        <option value="Tree_Snake">Tree Snake</option>
                                                                        <option value="Ornamental_flying_snake">Ornamental flying snake</option>
                                                                        <option value="Vine_snake">Vine Snake</option>
                                                                    </select>
                                                                </div>

                                                                <!-----------SNAKES END---------------->
                            </div>

                            <!*****************************WHOLE END**********************************************>
                                <a href="./input-rescue-information.php" class="listinBtn">Next
                                    <!-- <input type="submit" class="listinBtn" value="Next" title="Next" name="submit" > -->
                                </a>
            </div>
        </div>
    </div>
</div>
</div>

</form>
</div>

</section>
</div>


<div class="control-sidebar-bg"></div>
</div>

<?php include 'pages/layout/footer.php'; ?>