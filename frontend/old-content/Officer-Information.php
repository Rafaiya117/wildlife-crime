<?php
include '../config/config.php';
include BASEPATH.'/pages/layout/header.php';
include BASEPATH.'/pages/layout/sidebar.php';
include BASEPATH.'/pages/layout/nav.php';
//die();
?>

<div class="content-wrapper" style="min-height: 901px;"> 



         <div class="box-body">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="innerPage-box">
                                   <h3 class="innerPage-head">
                                       Record Investigating Officer Information
                                    <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                   </h3>
                                     <form class="inputs-p10 " id="commentForm" method="post" action="./Accussed-Information.php" enctype="multipart/form-data">
                                       <input type="hidden" name="_token" value="jpxoTQEzItenT55Oi5UFS4MRBNCiAevu2FYH45zi">
                                       <input type="hidden" name="section4" value="section4">
                                       <div class="form-row">
                                           <div class="form-group col-md-12">
                                               <label class="inner-label required">
                                                   Officer’s Name
                                                                                                  </label>
                                               <input type="text" class="form-control inner-textfield"  name="investOfficer" required value="">
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label class="inner-label required">
                                                   Designation
                                                                                                  </label>
                                               <input type="text" class="form-control inner-textfield"  name="designation" required value="">
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label class="inner-label required">
                                                   Address Line 1
                                                                                                  </label>
                                               <textarea type="text" class="form-control inner-textfield" required id="" placeholder="E.g: Office of the Range Forest Officer" name="office_Address" ></textarea>
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label class="inner-label required">
                                                   Address Line 2
                                                                                                  </label>
                                               <textarea type="text" class="form-control inner-textfield" required id="" placeholder="E.g: Byrnihat, Meghalaya" name="office_Address2" ></textarea>
                                           </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Pin Code
                                                                                                    </label>
                                                <input type="text" class="form-control inner-textfield" onkeypress="return isNumberKey(event)" minlength="6" maxlength="6" required name="pinCode" value="" placeholder="E.g:793101" >
                                            </div>
                                           <a href="https://wlor.wildcrimeassist.in/wlors/section3" class="listinBtn pull-left">Previous</a>
                                           <input type="submit"  value="Next" class="listinBtn" />
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

<?php
include BASEPATH.'pages/layout/footer.php';
?>