<!doctype html>
<html>
<head>
  <link href="<?php echo base_url('res/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('res/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

  <link href="<?php echo base_url('res/css/plugins/morris-0.4.3.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('res/css/plugins/timeline.css');?>" rel="stylesheet">

  <link href="<?php echo base_url('res/css/sb-admin.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('res/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('res/js/bootstrap.js');?>"></script>
  <script src="<?php echo base_url('res/js/tinymce.min.js');?>"></script>
  <script>
  tinymce.init({selector:'textarea'});
  </script>
</head>
<body>


  <div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">  <i class="fa fa-sign-in fa-fw"></i>Area Admin</div>
          <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
        </div>

        <div style="padding-top:30px" class="panel-body" >

          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

          <form action="<?= base_url('admin/login') ?>" method="post" class="form-horizontal" role="form">

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
            </div>



            <!-- <div class="input-group">
              <div class="checkbox">
                <label>
                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                </label>
              </div>
            </div> -->


            <div style="margin-top:10px" class="form-group">
              <!-- Button -->

              <div class="col-sm-12 controls">
                <button id="btn-login" type="submit" class="btn btn-lg btn-success btn-block">Login  </button>
              </div>
            </form>
            </body>
            </html>
