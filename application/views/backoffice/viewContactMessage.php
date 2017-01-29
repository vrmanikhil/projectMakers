<?php echo $header; ?>

    <div class="container">

      <?php if($message['content']!=''){?>
        <div class="row" style="margin-top: 10px;">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <p style="margin: 0px; color: <?=$message['color']?>;"><?=$message['content']?></p>
                </ol>
            </div>
        </div>
      <?php }?>

        <div class="row page-header">
            <?php echo $navigation; ?>
            <div class="col-md-9">
                <a href="<?php echo base_url('/backoffice/contactUs'); ?>">Go Back</a>
                <h3>Contact Request</h3>
                <div class="col-sm-12">
                <form role="form">
                    <?php if(empty($contactMessage['acknowledge'])) { ?>
                        <div class="form-group" style="float:right;">
                          <a href="<?php echo base_url('/backofficeFunctions/markRead/').$contactMessage['id']; ?>" class="btn btn-warning">Mark as Read</a>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                          <label>Name</label>
                          <p class="form-control-static"><?php echo $contactMessage['name']; ?></p>
                        </div>
                        <div class="form-group">
                          <label>E-Mail</label>
                          <p class="form-control-static"><?php echo $contactMessage['email']; ?></p>
                        </div>
                        <div class="form-group">
                          <label>Mobile</label>
                          <p class="form-control-static"><?php echo $contactMessage['mobile']; ?></p>
                        </div>
                        <div class="form-group">
                          <label>Message</label>
                          <p class="form-control-static"><?php echo $contactMessage['message']; ?></p>
                        </div>
                        <div class="form-group">
                          <label>Time</label>
                          <p class="form-control-static"><?php echo $contactMessage['timestamp']; ?></p>
                        </div>
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

    <?php echo $footer; ?>
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
