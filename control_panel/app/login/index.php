<?php
include_once ("func.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل مدیریت | صفحه ورود</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="../../dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="../../dist/css/custom-style.css">

    <link rel="stylesheet" href="../../../dist/libephone/css/intlTelInput.css">

    <style>
        #valid-msg,#error-msg{
            position: absolute;
            top: 0px;
            font-size: initial;
            text-align: left;
            direction: ltr;
            right: 0px;
            font-family: vazir;
            display: block;
            width: 113px;
            text-align: center;
            height: 37px;
        }
        #eyess{
            cursor: pointer;
        }

    </style>

</head>
<body class="hold-transition login-page" style="background-image:url('img/Best_breakfast_Perth_Someday_Coffee_Co.jpg');background-size: cover ">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>ورود به سایت</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="tel" name="phoneNumber" class="form-control ltr" id="phone">
            <span id="valid-msg" class="hide bg-success-gradient p-2">✓ Valid</span>
            <span id="error-msg" class="hide text-white bg-danger-gradient p-2 "></span>

            <!--          <div class="input-group-append">-->
<!--            <span class="fa fa-phone input-group-text"></span>-->
<!--          </div>-->
        </div>
        <div class="input-group mb-3">
            <div class="input-group-append"  id="eyess">
                <span class="fa fa-eye-slash input-group-text"></span>
            </div>
          <input type="password" id="pass" style="direction: ltr" name="pass" class="form-control" placeholder="رمز عبور">
          <div class="input-group-append">
            <span class="fa fa-lock input-group-text"></span>
          </div>

        </div>
        <div class="row mt-5">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember"> یاد آوری من
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" value="Submit" class="btn btn-primary btn-block btn-flat">ورود</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->
      <p class="mb-1 mt-3">

        <a href="loginbp.php">ورود بدون رمز </a>

      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>

<script src="../../../dist/libephone/js/intlTelInput.js"></script>
<script src="../../../dist/libephone/js/utils.js"></script>
<script>



    var input = document.querySelector("#phone"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");

    // here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // initialise plugin
    var iti = window.intlTelInput(input, {
        utilsScript: "phone/js/utils.js"
    });
    iti.setCountry("IR");

    var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    // on blur: validate
    input.addEventListener('blur', function() {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove("hide");
            } else {
                input.classList.add("error");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });

    // on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);



</script>
<script>

    $("#eyess>span").click(function () {
        var pass=$("#pass");

        if(pass.attr('type')==='password'){
            pass.attr('type','text');

            $(this).removeClass("fa-eye-slash");
            $(this).addClass("fa-eye");
        }else {
            pass.attr('type','password');
            $(this).removeClass("fa-eye");
            $(this).addClass("fa-eye-slash");
        }
    });



  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  });

</script>


</body>
</html>
