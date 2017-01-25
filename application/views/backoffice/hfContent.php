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
                <h2>Header-Footer Content</h2>
                <div class="col-sm-12">
                  <h3>Header Content</h3>
                  <form action="<?php echo base_url('backofficeFunctions/updateHeaderContent'); ?>" method="post">
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Headline:</label>
                              <input type="text" class="form-control" name="headline" value="<?php echo stripslashes ($headerContent['headline']); ?>" required>
                              <p class="help-block"></p>
                          </div>
                      </div>
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>E-Mail:</label>
                              <input type="email" class="form-control" name="email" value="<?php echo $headerContent['email']; ?>" required>
                              <p class="help-block"></p>
                          </div>
                      </div>
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Mobile Number:</label>
                              <input type="text" class="form-control" maxlength="10" name="mobile" value="<?php echo $headerContent['mobile']; ?>" required>
                              <p class="help-block"></p>
                          </div>
                      </div>

                      <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                      <button type="submit" class="btn btn-success" style="float:right;">Update</button>
                  </form>
                </div>

                      <div class="col-sm-12">
                        <h3>Footer Content</h3>
                        <form action="<?php echo base_url('backofficeFunctions/updateFooterContent'); ?>" method="post">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Facebook:</label>
                                    <input type="text" class="form-control" name="facebook" value="<?php echo $footerContent['facebook']; ?>" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Twitter:</label>
                                    <input type="text" class="form-control" name="twitter" value="<?php echo $footerContent['twitter']; ?>" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Instagram:</label>
                                    <input type="text" class="form-control" name="instagram" value="<?php echo $footerContent['instagram']; ?>" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>About:</label>
                                    <textarea class="form-control" rows="10" name="about" required><?php echo stripslashes ($footerContent['about']); ?></textarea>
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
