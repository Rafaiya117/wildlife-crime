<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8">
    <title>Wild Crime Assist | Forgot Password</title>
    <!-- Styles -->
    <link href="../dist/css/style.css" rel="stylesheet">
    <link href="https://wlor.wildcrimeassist.in/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="register-bac">
        <div class="logofix">
            <a href="#"> <img src="https://th.bing.com/th/id/R.2ce39638bf9a1d6ca58bbc98e1a5941c?rik=x4ZQ4EAF%2bvqgYQ&riu=http%3a%2f%2fbfis.bforest.gov.bd%2fbfi%2fwp-content%2fuploads%2f2019%2f03%2fforest-240x300.png&ehk=ZUaQ19X1ypEm9ionEVOC7bzUtMtoXqs2EVy3bdEsze4%3d&risl=&pid=ImgRaw&r=0" alt="" style="height: 90px;"></a></div>
                <div class="MainBox">
                    <div class="panel panel-default loginfield-holder">
                        <div class="loginInner">
                            <div class="panel-heading">Forgot Password</div>
                                <div class="panel-body">
                                    <div class="flash-message">
        </div> 
<!-- end .flash-message -->
                <form class="form-horizontal" method="POST" action="forgot_password_otp">
                    <input type="hidden" name="_token" value="ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8">
        <div class="form-group textbox-holder">
                <div class="col-md-12">
                    <p style="margin:0 0 5px">
                        <img src="https://www.challengephysio.com/wp-content/uploads/2018/04/phone.jpg" alt="mobile" class="mail-icon" style="width: 13px; height:20px;">
                    <label class="email_label">Mobile<span class="requiredstar">*</span></label>
                    </p>
                        <input id="email" minlength="10" maxlength="10" type="text" class="form-control email-field" name="mobile_number" required autofocus>
        </div>
    </div>
        <div class="col-xs-6" style="margin-top:0px;"><button type="submit" onclick="window.history.back();" type="reset" class="btn btn-primary login-btn">
                Cancel
        </button>
    </div>
    <div class="col-xs-6" style="margin-top:0px;"><button type="submit" class="btn btn-primary login-btn">
        Send
</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>    
<script src="https://wlor.wildcrimeassist.in/js/app.js"></script>
<script type="text/javascript">
    let timerOn = true;

                  function timer(remaining) {
                  var m = Math.floor(remaining / 60);
                  var s = remaining % 60;
  
                   m = m < 10 ? '0' + m : m;
                   s = s < 10 ? '0' + s : s;
                   document.getElementById('timer').innerHTML = m + ':' + s+' <button disabled="disabled" type="button" class="btn btn-primary">Resend OTP</button>';
                   remaining -= 1;
  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
        timer(remaining);
    }, 1000);
    return;
  }

  if(!timerOn) {
    // Do validate stuff here
    return;
  }
  
  // Do timeout stuff here
  //alert('Timeout for otp');
    $("#timer").html('Didn\'t receive a verification code? <button id="resend_otp" type="button" class="btn btn-primary">Resend OTP</button>');
    $("#resend_otp").click(function(){
        timer(60);
        var mobile = $("#mobile_number").val();
        //alert(mobile);
        if(mobile){
            $.ajax({
                type: 'post',
                url: '/resend-otp',
                data:{mobile_number: mobile, "_token": "ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8"},
                success: function (data)
                {
                    $(".flash-message").html('<p class="alert alert-'+data.status+'">'+data.msg+'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>');
                    //timer(60);
                }   
            });
        }else{
            $("#mobile_number").css("border","1px dotted red");
            return false;
        }
    });
}

$(document).ready(function(){
    $("#resend_otp").click(function(){
        
        var mobile = $("#mobile_number").val();
        //alert(mobile);
        if(mobile){
            timer(60);
            $.ajax({
                type: 'post',
                url: '/resend-otp',
                data:{mobile_number: mobile, "_token": "ImyyjBmoaayCOBD5NBqCfpPE1fBXjsmJ0D60B6K8"},
                success: function (data)
                {
                    $(".flash-message").html('<p class="alert alert-'+data.status+'">'+data.msg+'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>');
                    //timer(60);
                }   
            });
        }else{
            $("#mobile_number").css("border","1px dotted red");
            return false;
        }
    });
    setTimeout(function() {
        $('.flash-message').fadeOut('slow');
    }, 5000); // <-- time in milliseconds
})
</script>
</body>
</html>