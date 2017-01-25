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
                <h2>About Content</h2>
                <div class="col-sm-12">
                  <form action="<?php echo base_url('backofficeFunctions/updateAboutParagraph1'); ?>" method="post">
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Paragraph 1:</label>
                              <textarea class="form-control" name="paragraph1" rows="10" required><?php echo stripslashes($about[0]['content']); ?></textarea>
                              <p class="help-block"></p>
                          </div>
                      </div>

                      <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                      <button type="submit" class="btn btn-success" style="float:right;">Update</button>

                    </form>
                  </div>


                  <div class="col-sm-12">
                    <form action="<?php echo base_url('backofficeFunctions/updateAboutParagraph2'); ?>" method="post">
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Paragraph 2:</label>
                              <textarea class="form-control" name="paragraph2" rows="10" required><?php echo stripslashes ($about[1]['content']); ?></textarea>
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

</body>

</html>
