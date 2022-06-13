<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 901px;">        
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box navsting-panel">
          <nav class="navbar inner-navbar">
  <div class="navbar-collapse pull-left" id="navbar-collapse">
    <ul id="wl-icon-nav" class=" nav navbar-nav inner-nav">
      <nav class="active"><a href="./index-wlor.php"><span><i class="innerTab-iconHome" title=""></i></span><span class="tab-xs">Home</span></a></nav>
      <nav class="" ><a href="./yes-identify-species.php"><span><i class="innerTab-icon1"></i></span><span class="tab-xs">
      <?php echo trans("nav-1-identifyspecies", 'en');?><br>
      <?php echo trans("nav-1-identifyspecies", 'bn');?>
          </span></a></nav>
      <nav class="" ><a href="./find-section-laws.php"><span><i class="innerTab-icon2"></i></span><span class="tab-xs">
      <?php echo trans("nav-2-lawsection", 'en');?><br>
      <?php echo trans("nav-2-lawsection", 'bn');?>
          </span></a></nav>
      <nav class="" ><a href="./input-offence-information.php"><span><i class="innerTab-icon6"></i></span><span class="tab-xs">
      <?php echo trans("nav-3-offenceinfo", 'en');?><br>
      <?php echo trans("nav-3-offenceinfo", 'bn');?>
          </span></a></nav>
      <nav class="" ><a href="./input-officer-information.php"><span><i class="innerTab-icon4"></i></span><span class="tab-xs">
      <?php echo trans("nav-4-invetigatinfofficer", 'en');?><br>
      <?php echo trans("nav-4-invetigatinfofficer", 'bn');?>
          </span></a></nav>
      <nav class="" ><a href="./input-offender-profile.php"><span><i class="innerTab-icon5"></i></span><span class="tab-xs">
      <?php echo trans("nav-5-offenderprofile", 'en');?><br>
      <?php echo trans("nav-5-offenderprofile", 'bn');?>
          </span></a></nav>
      <nav class="" ><a href="./input-disposal-information.php"><span><i class="innerTab-icon3"></i></span><span class="tab-xs">
      <?php echo trans("nav-6-disposalinfo", 'en');?><br>
      <?php echo trans("nav-6-disposalinfo", 'bn');?>
          </span></a></nav>
      <nav class="" ><a href="./input-sample-collection.php"><span><i class="innerTab-icon6"></i></span><span class="tab-xs">
      <?php echo trans("nav-7-samplecollection", 'en');?><br>
      <?php echo trans("nav-7-samplecollection", 'bn');?>
            </span></a></nav>
      <nav class="" ><a href="./other-details.php"><span><i class="innerTab-icon8"></i></span><span class="tab-xs">
      <?php echo trans("nav-8-otherdetail", 'en');?><br>
      <?php echo trans("nav-8-otherdetail", 'bn');?>
            </span></a></nav>
                <!-- <nav class="" ><a href="./Arrest-procedure.php" data-toggle="modal" data-target="#accuseArrestnavst"><span><i class="innerTab-icon9"></i></span><span class="tab-xs">
                Arrest Procedure
                </span></a></nav> -->
                <nav class="" ><a href="./bail.php" data-toggle="" data-target=""><span><i class="innerTab-icon10"></i></span><span class="tab-xs">
                <?php echo trans("nav-9-bail", 'en');?><br>
      <?php echo trans("nav-9-bail", 'bn');?>
                </span></a></nav>
                <nav class="" ><a href="./prayer.php"><span><i class="innerTab-icon11"></i></span><span class="tab-xs">
                <?php echo trans("nav-10-prayer", 'en');?><br>
      <?php echo trans("nav-10-prayer", 'bn');?>
                </span>
                </a>
                </nav>
                <nav class="" ><a href="./case-list.php"><span><i class=""></i></span><span class="tab-xs">
                <?php echo trans("nav-11-caselist", 'en');?><br>
      <?php echo trans("nav-11-caselist", 'bn');?>
                </span>
                </a>
                </nav>
                <!-- <nav class="" ><a href="./offender-navst.php"><span><i class=""></i></span><span class="tab-xs">
                Offendr navst
                </span>
                </a>
                </nav> -->
        </ul>
    </div>
</nav>
<div class="row">
    <div class="col-md-12">
        <div class="innerPage-box" style="padding-bottom:0px;color:red;font-weight:bold;font-size:16px;">
        </div>
     </div>   
</div>
<!--MODAL DEFINE -->
<div class="modal fade innerModelBox" id="accuseArrestnavst" tabindex="-1" role="dialog" aria-labelledby="accuseArrestnavst" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
          Filnavng of the Operation Details section is necessary before proceeding to this section. Kindly cnavck on 'Continue' to fill the Operation Details.</br>
      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-xs-6 text-center p-0"><a class="yesBtn" href="#">Continue</a></div>
            <div class="col-xs-6 text-center p-0"><button class="noBtn" style="width:100%; border: 0px;" data-dismiss="modal" aria-hidden="true">Cancel</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MODAL DEFINE -->
<div class="modal fade innerModelBox" id="cancelDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
          Are you sure you want to cancel? If cancelled, the data filled in all the WLOR sections will be deleted. You will be required to start afresh. Cnavck 'Yes' to proceed.</br>
      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-xs-6 text-center p-0"><a class="yesBtn" href="https://wlor.wildcrimeassist.in/wlors/cancelData">Yes</a></div>
            <div class="col-xs-6 text-center p-0"><button class="noBtn" style="width:100%; border: 0px;" data-dismiss="modal" aria-hidden="true">No</button></div>
            
        </div>
        
      </div>
    </div>
  </div>
</div>
<!--MODAL DEFINE -->
<div class="modal fade innerModelBox" id="sezirnavstModal" tabindex="-1" role="dialog" aria-labelledby="sezirnavstModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
          Identifying the species seized is necessary for this section. Please cnavck on 'Continue' to identify the species seized.</br>
      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-xs-6 text-center p-0"><a class="yesBtn" href="#">Continue</a></div>
            <div class="col-xs-6 text-center p-0"><button class="noBtn" style="width:100%; border: 0px;" data-dismiss="modal" aria-hidden="true">Cancel</button></div>
            
        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade innerModelBox" id="accusedModal" tabindex="-1" role="dialog" aria-labelledby="accusedModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
          Filnavng of the Accused Information section is necessary before proceeding to this section. Kindly cnavck on 'Continue' to fill the Accused Information.</br>
      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-xs-6 text-center p-0"><a class="yesBtn" href="#">Continue</a></div>
            <div class="col-xs-6 text-center p-0"><button class="noBtn" style="width:100%; border: 0px;" data-dismiss="modal" aria-hidden="true">Cancel</button></div>
        </div>  
      </div>
    </div>
  </div>
</div>

<!--MODAL DEFINE -->
<div class="modal fade innerModelBox" id="accusenavstModal" tabindex="-1" role="dialog" aria-labelledby="accusenavstModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
           Filnavng the Arrest Procedure section is necessary before proceeding to this section. Kindly cnavck on 'Continue' to fill the Arrest Procedure.</br>
      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-xs-6 text-center p-0"><a class="yesBtn" href="#">Continue</a></div>
            <div class="col-xs-6 text-center p-0"><button class="noBtn" style="width:100%; border: 0px;" data-dismiss="modal" aria-hidden="true">Cancel</button></div>
        </div>
      </div>
    </div>
  </div>
</div>