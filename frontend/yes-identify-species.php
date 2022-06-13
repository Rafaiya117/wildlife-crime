<?php include 'pages/_a.php';?>

<div class="content-wrapper" style="min-height: 901px;"> 
<section class="content">
<div class="box-body">
    <div class="row" style="height:600px;">
        <div class="col-md-12">
            <div class="innerPage-box">
                <h3 class="innerPage-head">
                <?php echo trans("head", 'en');?>
        <br>
      <?php echo trans("head", 'bn');?>
                </h3>
    <form class="inputs-p10 " id="commentForm" method="post" action="./input-rescue-information.php" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8">
            <input type="hidden" name="section_1_yes" value="section_1_yes">
        <div class="row">
            <div class="form-group col-md-13" id="inner-label">
                <label class="inner-label" >
                <?php echo trans("inner-label", 'en');?>
        <br>
      <?php echo trans("inner-label", 'bn');?>
                </label>
            </div>
        </div> 
        <div class="row">
      <div class="form-group col-md-9">
        <p><input type='text' id='COL 3'  value='' placeholder="What are you looking for?" class="inputs-p10  form-control inner-textfield auto" required=""></p> 
    </div>
      </div>    
    <div class="form-group col-md-3 ">
                <input type="submit" id="btn_submit_10" value="Search" class="listinBtn" />
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

<?php include 'pages/layout/footer.php'; ?>
