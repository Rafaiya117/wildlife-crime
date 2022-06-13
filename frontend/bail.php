

<div class="content-wrapper" style="min-height: 901px;"> 
<section class="content">
<div class="box-body">
    <div class="row" style="height:600px;">
<div class="container">
  <div class="main-body">
    <h3 class="innerPage-head" id="bail-head"><?php echo trans("bail-head", 'en'); ?>
      <br>
      <?php echo trans("bail-head", 'bn'); ?>
    </h3>
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4>Rakul Singh<br>রাকুল সিং</h4>

              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row" onclick="location.href='./case-list.php'">
              <div class="col-sm-3">
                <h6 class="mb-0">Case No.</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                000111
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Alam
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Fathers Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Sha
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                01234567890
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Age</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                21
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Dhaka
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Current Note</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                ..........
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group col-md-12">
    <label class="inner-label" id="brief">
    <?php echo trans("brief", 'en'); ?>
      <br>
      <?php echo trans("brief", 'bn'); ?>
      <div class="hint">
        <!--hint-->
      </div>
    </label>
    <textarea class="form-control  inner-textfield" placeholder="" maxlength="50000" name="accusedOperating"></textarea>
  </div>
  <a href="generate-wlor" class="listinBtn pull-left">Previous</a>
  <input type="submit" id="listinBtnsbt" class="listinBtn" value="Next" name="submit" title="Next" style="margin-top:5px;">
</div>
</div>

</div>
</section>
