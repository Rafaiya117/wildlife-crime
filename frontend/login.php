<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="gN8rDGhlJjY07wVRBAU563JGQFo9ITATiYNQUU4u">

    <title>Wild Crime Assist | Login</title>
    <!-- Styles -->
    <link href="../dist/css/style.css" rel="stylesheet">
    <link href="https://wlor.wildcrimeassist.in/css/app.css" rel="stylesheet">
    <style type="text/css">.container-fluid{padding:0px;margin:0px;}</style>
</head>
<body class="login-bac">
<div class="container-fluid">
<div class="logofix">
<a href="#"> <img src="https://th.bing.com/th/id/R.2ce39638bf9a1d6ca58bbc98e1a5941c?rik=x4ZQ4EAF%2bvqgYQ&riu=http%3a%2f%2fbfis.bforest.gov.bd%2fbfi%2fwp-content%2fuploads%2f2019%2f03%2fforest-240x300.png&ehk=ZUaQ19X1ypEm9ionEVOC7bzUtMtoXqs2EVy3bdEsze4%3d&risl=&pid=ImgRaw&r=0" alt="" style="height: 90px;"></a></div>
<div class="MainBox">
  <div class="panel panel-default loginfield-holder">
  <div class="loginInner">
  <div class="panel-heading">Login</div>
 
 <div class="panel-body">
 <div class="flash-message">
</div> <!-- end .flash-message -->

<form class="form-horizontal" method="POST" role="form"action="./login.php">
<input type="hidden" name="_token" value="gN8rDGhlJjY07wVRBAU563JGQFo9ITATiYNQUU4u">
<div class="form-group">
<div class="col-md-12">
<p style="margin:0 0 5px">
<img src="https://wlor.wildcrimeassist.in/images/email_icon.png" alt="email icon" class="mail-icon">
<label class="email_label">Email ID or Mobile Number</label></p>
<input id="email" type="text" class="form-control email-field" placeholder="" name="email" value="" required >
 
</div>
</div>
<div class="form-group">

<div class="col-md-12">
<p style="margin:0 0 5px"><img src="https://wlor.wildcrimeassist.in/images/password_icon.png" alt="password icon" class="password-icon">
<label class="email_label" >Password</label></p>
<input id="password" type="password" class="form-control password-field" placeholder=""  name="password" required>
 
</div>
</div>
<div class="form-group forgotPassword-holder">
<div class="col-md-6 col-xs-12 regis1">
            <a href="./Registration.php">Register</a>
            </div>
            <div class="col-md-6 col-xs-12 regis1">
            <a href="./ForgotPassword.php">Forgot Password</a>
               </div>                   
            </div> 
<div class="form-group" >
<div class="col-md-12">
<button type="submit" class="btn btn-primary login-btn">
                                    <a href="dashboard.php">Login</a> 
                                    </button></div>
                                    </div>
<!--                                <div class="col-xs-6"><a class="btn btn-link" href="https://wlor.wildcrimeassist.in/password/reset">
                                    Forgot Your Password?
                                    </a></div> -->
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
    <!-- Scripts -->
<script src="#"></script>
<script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function() {
            $('.flash-message').fadeOut('slow');
        }, 5000); // <-- time in milliseconds
    });
</script>
</div>
</body>
</html>