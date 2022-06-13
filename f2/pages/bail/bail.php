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
                    <div class="row" onclick="location.href='#case-list'">
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
                        <h6 class="mb-0">Full Name(পুরো নাম)</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        Rakul Singh<br>রাকুল সিং
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Fathers Name(বাবার নাম)</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        Shahalom(শাহালাম)
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Phone no.(ফোন নম্বর.)</h6>
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
                        <h6 class="mb-0">Address(ঠিকানা)</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        Dhaka(ঢাকা)
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Current Note(বর্তমান নোট)</h6>
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



          <form id="commentForm" class="inputs-p10 " method="post" action="" enctype="multipart/form-data">
            <div class="form-group col-md-12">
              <label class="inner-label required" id="note-2">
                <?php echo trans("note-2", 'en'); ?>
                <br>
                <?php echo trans("note-2", 'bn'); ?>
              </label>
              <input type="text" class="form-control inner-textfield" id="note" required name="note" value="">
            </div>
            <div>

              <input type="submit" value="Save(সংরক্ষণ করুন)" class="listinBtn" />
            </div>
          </form>
          <a href="#generate-wlor" class="listinBtn pull-left"><label id="pre">
              <?php echo trans("pre", 'en'); ?>

              <?php echo trans("pre", 'bn'); ?></a>
          <a href="#action-bail" class="listinBtn"><label id="next">
              <?php echo trans("next", 'en'); ?>

              <?php echo trans("next", 'bn'); ?>
              <!-- <input type="submit" class="listinBtn" value="Next" title="Next" name="submit" > -->
          </a>
        </div>
      </div>

    </div>
  </section>