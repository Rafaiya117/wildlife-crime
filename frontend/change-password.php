<?php include 'pages/_a.php';?>


<div class="content-wrapper" style="min-height: 901px;">        
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box listing-panel">
<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <div class="innerPage-box">
                <h3 class="innerPage-head">Change Password</h3>
                    <form method="POST" action="#" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data"><input name="_token" type="hidden" value="dAzptW0bo67ddFepMxJHk90fxrbb8QirIMYAHyf5">
                            <input type="hidden" name="_token" value="dAzptW0bo67ddFepMxJHk90fxrbb8QirIMYAHyf5">
                                <div class="box-body">
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Username</label>
                                            <input class="form-control" required="required" readonly="readonly" style="border:none;" name="name" type="text" value="rushdha117" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email ID</label>
                                            <input class="form-control" readonly="readonly" style="border:none;" name="email" type="text" value="rushdha117@gamil.com" id="email">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="currentpassword" class="control-label">Old Password</label>
                                            <input class="form-control" value="" name="currentpassword" type="password" id="currentpassword">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="password" class="control-label">New Password</label>
                                            <input class="form-control" required="required" name="password" type="password" value="" id="password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="password_confirmation" class="control-label">Confirm New Password</label>
                                            <input class="form-control" required="required" name="password_confirmation" type="password" value="" id="password_confirmation">
                                        </div>
                                    </div>
                                <div>
                            <input class="btn btn-success" type="submit" value="Update Password">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
</div>
</section>
</div>

<?php include 'pages/layout/footer.php'; ?>

