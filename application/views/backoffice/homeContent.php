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
                <h2>Home Content</h2>
                <div class="col-sm-12">
                  <form action="<?php echo base_url('backofficeFunctions/updateHomeContent'); ?>" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Title 1:</label>
                            <input type="text" class="form-control" name="title1" required value="<?php echo stripslashes($home['title1']); ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>

                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Content 1:</label>
                              <textarea class="form-control" name="content1" id="content1" rows="10" required><?php echo $home['content1']; ?></textarea>
                              <p class="help-block"></p>
                          </div>
                      </div>

                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Title 2:</label>
                              <input type="text" class="form-control" name="title2" required value="<?php echo stripslashes($home['title2']); ?>">
                              <p class="help-block"></p>
                          </div>
                      </div>

                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Content 2:</label>
                                <textarea class="form-control" name="content2" id="content2" rows="10" required><?php echo $home['content2']; ?></textarea>
                                <p class="help-block"></p>
                            </div>
                        </div>

                      <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                      <button type="submit" class="btn btn-success" style="float:right;">Update</button>

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

   <script src="<?= base_url('assets/ckeditor/ckeditor.js')?>"></script>
   <script>
     $(document).ready(function(){
       editor = CKEDITOR.replace('content1');
       editor = CKEDITOR.replace('content2');
     });
     </script>

</body>

</html>
