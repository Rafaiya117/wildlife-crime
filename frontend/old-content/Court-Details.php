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
                                        Court Details
                                    <button type="button" class="cancelBtn" data-toggle="modal" data-target="#cancelDataModal"><i class="fa fa-times-circle" aria-hidden="true"></i></button> 
                                    </h3>
                                     <form  class="inputs-p10 " id="commentForm" method="post" action="./Officer-Information.php" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="jpxoTQEzItenT55Oi5UFS4MRBNCiAevu2FYH45zi">
                                                                                <div class="form-row">
                                            <input type="hidden" name="section3" value="section3">
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Which court is the matter being filed at ?
                                                 </label>
                                                <input type="text" id="tags" class="form-control inner-textfield " required name="courtename" value="">

                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Where is this court located?
                                               </label>
                                                <input type="text" placeholder="E.g: Jorhat" class="form-control inner-textfield" required name="currentLocation" value="" >

                                            </div>
                                            <div class="form-group col-md-12">
                           
                                               <label class="inner-label required">
                                                    Date of filing
                                                  </label>
                                                <input type="text" class="form-control inner-textfield datepick" required id="date_1"  name="productionDate"  value="" >
                                                 <i class="fa fa-calendar datepick" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    POR Number
                                               <div class="hint">
                                                    (POR is the Preliminary Offence Report, also known as the Wildlife Offence Report or the Remand Report)
                                               </div>
                                                
                                                </label>
                                                
                                                <input type="text" class="form-control inner-textfield"  name="porNumber" required value="" >
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label class="inner-label required">
                                                    Date of POR
                                                                                                    </label>
                                                <input type="text" class="form-control inner-textfield datepick" class="datepicker" id="date_2" name="porDate" required value="" >
                                                 <i class="fa fa-calendar" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i>
                                            </div>
                                            <a href="https://wlor.wildcrimeassist.in/wlors/addmorespecies" class="listinBtn pull-left">Previous</a>
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
<script>
// $(function() {
// var availableTags = [
//         "Judicial Magistrate of the First Class",
//         "Sessions Court"
//         ];
// $("#tags").autocomplete({
// source: availableTags
//         });
// });
// $(function() {

//     $(".datepick").datepicker();
// });

$(function() {
    $('.datepick').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
});
// $('.datepick').each(function(){
// $(this).datepicker({ dateFormat: 'dd-mm-yy'});


// });    

</script>
