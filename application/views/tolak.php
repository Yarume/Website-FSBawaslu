<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>File Sharing System | TOLAK CATATAN </title>
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
    <a href=""><b>Tolak Verifikasi Data</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <b><?php if(isset($response)) echo $response; ?></b>

    <form method='post' action='' enctype='multipart/form-data'>
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" value="<?= $data->Kode; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="uraian">Uraian</label>
            <input type="text" class="form-control" value="<?= $data->Uraian; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="uraian">Link</label>
            <input type="text" class="form-control" value="<?= $data->link; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="uraian">Unduh File</label>
            <br>
            <a href="<?php echo base_url('uploads/').$data->File; ?>" target="_blank" rel="noopener noreferrer">File</a>
        </div>
        <div class="form-group">
            <label for="uraian">Catatan</label>
            <input type="text" class="form-control" id="catatan" name="catatan">
        </div>
        <div class="submit">
            <input type='submit' value='tolak' name='tolak' />
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
