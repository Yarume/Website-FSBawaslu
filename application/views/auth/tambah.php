<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>File Sharing System | Revisi Catatan </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Tambah User Data</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <?php if($this->session->flashdata('message_login_error')): ?>
    <p class="login-box-msg">
        <?php
            echo $this->session->flashdata('message_login_error');
        ?>
    </p>
    <?php endif ?>
    <?php
    ?>
    <form method='post' action=''>
        <div class="form-group">
            <label for="kode">Username</label>
            <input type="text" class="form-control" value="" name="username" id="username" placeholder="Masukan Username">
        </div>
        <div class="form-group">
            <label for="uraian">Password</label>
            <input type="text" class="form-control" value="" name="password" id="password" placeholder="Masukan Password">
        </div>
        <div class="form-group">
            <label for="uraian">Verification Code</label>
            <input type="text" class="form-control" value="" name="verif_code" id="verif_code" placeholder="Masukan Verification Code">
        </div>
        <div class="form-group">
            <label for="uraian">Peringkat</label>
            <select name="peringkat" id="peringkat" class="form-control">
              <?php
              $list = array('admin','staff','kabag');
                for ($i=0; $i < count($list); $i++) { 
                    echo '<option value="'.$list[$i].'">'.$list[$i].'</option>';
                }
              ?>
            </select>
        </div>
        <div class="submit">
            <input type='submit' class="btn btn-primary btn-block" value='Submit' name='submit' />
        </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/plugins/iCheck/icheck.min.js"></script>
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
