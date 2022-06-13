<?php include 'pages/_a.php';?>

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header" id="dash_head">
      <h1>
      <?php echo trans("dash_head", 'en');?>
      <br>
      <?php echo trans("dash_head", 'bn');?> 
      </h1>
    </section>
      <!-- Main content -->
        <section class="content">
	            <div class="dashboardBox-holder">
	              <div class="row">
		              <div class="col-lg-6 col-sm-12">
      <!-- small box -->
  <div class="small-box dashboard-box6" id="identify_s">
    <div class="inner">
			<h4>&nbsp;</h4>
        <h2><?php echo trans("identify_s", 'en');?>
        <br>
      <?php echo trans("identify_s", 'bn');?> </h2>
    </div>
  <div class="icon">
    <i class="fa fa-check"></i>
  </div>
  <div class="p-4"><a href="jvascript:;" data-toggle="modal" data-target="#myModal" class="btn-dark btn-lg">Get Started </a></div>
      <!-- <a data-toggle="modal" data-target="#myModal" class="small-box-footer text-right">
                Get started <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </a> -->
          </div>
        </div>
                
        <div class="col-lg-6 col-sm-12">
          <!-- small box -->
          <div class="small-box dashboard-box5" id="generate_wlor">
            <div class="inner">
	      <h2><?php echo trans("generate_wlor", 'en');?>
        
        <br><?php echo trans("generate_wlor", 'bn');?></h2>
            </div>
            <div class="icon">
              <i class="fa fa-file"></i>
            </div>

            <div class="p-4"><a href="jvascript:;" data-toggle="modal" data-target="#reqfieldmodal" class="btn-dark btn-lg">Get Started </a></div>
            <!-- <a href="" data-toggle="modal" data-target="#reqfieldmodal" class="small-box-footer">
              Get started <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </a> -->
          </div>
        </div>  
        <!-- ./col -->
        <!-- ./col -->
      </div>
     <!-- Small boxes (Stat box) -->
      <div class="row">
          
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box dashboard-box1" id="sm-1">
            <div class="inner">
              <h4><?php echo trans("sm-1", 'en');?>
              <br>
      <?php echo trans("sm-1", 'bn');?></h4>
			         <h2>XX</h2>
            </div>
            <div class="icon">
              <i class="fa fa-balance-scale"></i>
            </div>
            <a href="#" class="small-box-footer">
              More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>  
          
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box dashboard-box2" id="sm-2">
            <div class="inner">
             <h4><?php echo trans("sm-2", 'en');?>
             <br>
      <?php echo trans("sm-2", 'bn');?></h4>
		              <h2>XX</h2>
            </div>
            <div class="icon">
            <i class="fas fa-frog"></i>
            </div>
            <a href="#" class="small-box-footer text-right">
              More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box dashboard-box3" id="sm-3">
			        <div class="inner">
              <h4><?php echo trans("sm-3", 'en');?>
              <br>
      <?php echo trans("sm-3", 'bn');?> </h4>
				          <h2>XX</h2>
            </div>
            <div class="icon">
            <i class="fas fa-file"></i>
            </div>
            <a href="#" class="small-box-footer">
              More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box dashboard-box4" id="sm-4">
            <div class="inner">
				          <h4><?php echo trans("sm-4", 'en');?>
                  <br>
      <?php echo trans("sm-4", 'bn');?></h4>
                 <h2>XX</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /.content -->
</div>
<?php include 'pages/layout/footer.php'; ?>