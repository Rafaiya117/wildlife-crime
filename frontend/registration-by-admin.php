<?php include 'pages/_a.php';?>
<body class="register-bac">
<!-- <div class="logofix">
<a href="https://wlor.wildcrimeassist.in"> <img src="https://th.bing.com/th/id/R.2ce39638bf9a1d6ca58bbc98e1a5941c?rik=x4ZQ4EAF%2bvqgYQ&riu=http%3a%2f%2fbfis.bforest.gov.bd%2fbfi%2fwp-content%2fuploads%2f2019%2f03%2fforest-240x300.png&ehk=ZUaQ19X1ypEm9ionEVOC7bzUtMtoXqs2EVy3bdEsze4%3d&risl=&pid=ImgRaw&r=0" alt="" style="height: 90px;"></a>
</div> -->
<div class="MainBox">
  <div class="panel panel-default loginfield-holder regis_form">
  <div class="loginInner">
  <div class="innerPage-head">Registration</div>
  <div class="panel-body">
 <div class="flash-message">
     </div> <!-- end .flash-message -->
<form class="form-horizontal" name="registration" method="POST" action="" enctype="multipart/form-data">
<input type="hidden" name="_token" value="awnCd9ptXy9bOdYYKLHcMpyjCrBRLgLDgEZVV0NW">
<div class="form-group texbox-holder">
<div class="col-md-12">
<p style="margin:0 0 5px">
<i class="fa fa-user" aria-hidden="true"></i>
<label class="email_label" for="name">Full Name<span class="requiredstar">*</span></label>
</p>
<input type="text" name="name" autofocus="autofocus" class="form-control email-field">
</div>
</div>

<div class="form-group textbox-holder">
<div class="col-md-12">
<p style="margin:0 0 5px">
<i class="fa fa-building" aria-hidden="true"></i>
<label class="email_label">Agency<span class="requiredstar">*</span></label>
</p>
<select name="agency_id" required="required" name="agency_id" style="height:45px;color:#009472 !important" class="form-control required agency_id">
<option value="">Select Agency</option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
</select>
</div>
<div class="col-md-12">
<p style="margin:0 0 5px">
<i class="fa fa-globe" aria-hidden="true"></i>
<label class="email_label">Division<span class="requiredstar">*</span></label>
</p>
<select name="state" style="height:45px;color:#009472 !important" class="form-control  required">
<option value="">Select Division</option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
</select>
</div>
</div>


<!-- <div class="textbox-holder">

</div>
</div> -->
<div class="form-group textbox-holder">
<div class="col-md-6">
<p style="margin:0 0 5px">
<i class="fa fa-envelope" aria-hidden="true"></i>
<label class="email_label">Email</label>
</p>
<input type="email" name="email" class="form-control form-control email-field">
</div>
<div class=" textbox-holder">
<div class="col-md-6">
<p style="margin:0 0 5px">
<i class="fa fa-mobile textbox-ph-icon" aria-hidden="true"></i>
<label class="email_label">Mobile<span class="requiredstar">*</span></label>
</p>
<input type="text" minlength="10" maxlength="10" name="mobile_number" class="form-control email-field">
</div>
</div>
</div>
<div class="form-group textbox-holder">
<div class="col-md-6">
<p style="margin:0 0 5px">
<i class="fa fa-lock" aria-hidden="true"></i>
<label class="email_label" for="password-confirm"> Password<span class="requiredstar">*</span></label>
</p>
<input type="password" name="password_confirmation" class="form-control email-field required">
</div>

<div class="textbox-holder">
<div class="col-md-6">
<p style="margin:0 0 5px">
<i class="fa fa-lock" aria-hidden="true"></i>
<label class="email_label">Confirm Password<span class="requiredstar">*</span></label>
</p>
<input type="password" name="password" required="required" class="form-control email-field required">
<!--                                                    -->
</div>
</div>                                        
</div>
<div class="col-xs-12 alredy-account">Already have an account? Click to <a href="#">Login</a></div>
<div class="form-group registerBtn-holder">
<div class="col-xs-12">
<!--<a href="https://wlor.wildcrimeassist.in/validate-mobile"><button type="button" class="btn validate-btn">Validate Mobile</button></a>-->
<button type="submit" class="btn btn-primary login-btn">Submit</button> </div>
</div>
<div class="col-xs-12 alredy-mobile">Already submitted your registration info and need to validate your mobile ? <a href="#">click here</a> </div>
</form>
 </div>
 </div>
 </div>
 </div> 
</section>
</body>

<div class="control-sidebar-bg"></div>
</div>
<?php include 'pages/layout/footer.php'; ?>