<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>File Sharing System | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    body {
      background-color: #ecf0f5; /* Set background color */
    }

    .login-box {
      width: 300px; /* Set the width of the login box */
      margin: auto; /* Center the login box horizontally */
      display: flex;
      flex-direction: column;
      justify-content: center;
      min-height: 100vh; Set minimum height to 100% of the viewport height
    }

    .login-logo img {
      width: 50%; /* Make the logo fill the container */
      height: auto; /* Maintain the aspect ratio of the logo */
      display: block; /* Remove extra space below the image */
      margin: 0 auto 15px; /* Center the image and add some bottom margin */
    }

    .login-logo a {
    font-size: 20px; /* Set the font size */
    font-weight: bold; /* Make the text bold */
    text-align: center;
    display: block; /* Ensure the link is a block-level element */
  }
  </style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- <div class="login-logo">
    <a href="/index2.html"><b>FILE</b>Sharing System</a>
  </div> -->
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <img src="<?= base_url(); ?>assets/img/logobawaslu.png" alt="Logo">
    <a>FILE SHARING SYSTEM BAWASLU PROVINSI BALI</a>
    </div>
  <?php if($this->session->flashdata('message_login_error')): ?>
    <p class="login-box-msg">
        <?php
            echo $this->session->flashdata('message_login_error');
        ?>
    </p>
    <?php endif ?>

    

    <form action='' method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Masukkan Username...">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukkan Pasword...">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" name="login" class="btn btn-primary btn-block btn-flat" value="LOGIN">
        </div>
        <!-- /.col -->
      </div>
      <div class="social-auth-links text-center">
<p>- OR -</p>
<div class="box-body">
  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default" data-keyboard="false" data-backdrop="static">
  Forgot Password
  </button>

    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
  
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Forgot Password</h4>
          </div>
          <div class="modal-body">
            
          <div class="form-group has-feedback">
          <form action='activation' method="post">
            <label for="exampleInputEmail1">Verification Code</label>
            <input type="text" name="verif_code" class="form-control" id="verif_code" placeholder="Masukkan Verification Code">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <input type="submit" name="Forgot" class="btn btn-primary" value="Save changes">
        </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="<?= base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
