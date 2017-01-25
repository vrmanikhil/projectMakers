<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Backoffice|Special Makers</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/modern-business.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Special Makers</a>
            </div>

        </div>
      </nav>


    <div class="container">

      <?php if($message['content']!=''){?>
        <div class="row" style="margin-top: 10px;">
            <div class="col-lg-8 col-lg-offset-2">
                <ol class="breadcrumb">
                    <p style="margin: 0px; color: <?=$message['color']?>;"><?=$message['content']?></p>
                </ol>
            </div>
        </div>
      <?php }?>

        <div class="row page-header">
            <div class="col-md-8 col-md-offset-2">
              <div class="col-sm-4">
                <center><img class="img-responsive" style="margin: 10px; max-width: 80%;" src="<?php echo base_url('assets/images/admin.png'); ?>">
                </center>
              </div>
              <div class="col-sm-8">
              <form action="<?php echo base_url('backofficeFunctions/login'); ?>" method="post">
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>USERNAME:</label>
                          <input type="text" class="form-control" name="username" required>
                          <p class="help-block"></p>
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>PASSWORD:</label>
                          <input type="password" class="form-control" name="password" required>
                      </div>
                  </div>
                  <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                  <center><button type="submit" class="btn btn-success">Sign In</button></center>
              </form>
              </div>
            </div>
        </div>


        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Special Makers 2017</p>
                </div>
            </div>
        </footer>

    </div>


    <script src="<?php echo base_url('assets/datatables/datatables/js/jquery.dataTables.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/datatables/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/datatables/datatables-responsive/dataTables.responsive.js'); ?>"></script>

   <script>
   $(document).ready(function() {
       $('#dataTables-example').DataTable({
           responsive: true
       });
   });
   </script>

</body>

</html>
