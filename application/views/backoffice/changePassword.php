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
                <h2>Change Password</h2>
                <form action="<?php echo base_url('backofficeFunctions/changePassword'); ?>" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Current Password:</label>
                            <input type="password" class="form-control" name="current_password" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>New Password:</label>
                            <input type="password" class="form-control" name="new_password" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Confirm New Password:</label>
                            <input type="password" class="form-control" name="confirm_new_password" required>
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                    <center><button type="submit" class="btn btn-success">Change Password</button></center>
                </form>
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
