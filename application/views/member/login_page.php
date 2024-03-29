<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Parking System Media Group</title>
  <link rel="icon" href="<?php echo base_url()?>assets/favicon.ico" type="image/x-icon">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SWEETALERT -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/sweetalert2/sweetalert2.min.css">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="javascript:void(0)"> METRO TV </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form id="login-form" method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="emp_nip" id="emp_nip" placeholder="NIP">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="emp_pass" id="emp_pass" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/adminlte.min.js"></script>
  <!-- SWEETALERT -->
  <script src="<?php echo base_url(); ?>assets/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>

  <script type="text/javascript">
    var base_url = "<?php echo base_url().MEMBER_AUTH; ?>";

    $(function () {
      $('#login-form').on('submit', function (e) {
        e.preventDefault();

        if ($('#emp_nip').val() == '' || $('#emp_pass').val() == '') {
          alert('Lengkapi data!');
          return;
        }

        var data = new FormData(this);

        $.ajax({
          url : base_url + '/site/signin',
          type : "POST",
          dataType : "JSON",
          cache : false,
          contentType : false,
          processData : false,
          data : data,
          success : function (data) {
            if (data.type == 'done') {
              Swal.fire('Success', data.msg, "success").then(function () {
                window.location.href = base_url;
              });
            }else{
              Swal.fire('Failed !', data.msg, "error");
            }
          }
        });

      });
    });
  </script>
</body>
</html>