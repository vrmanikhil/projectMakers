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
                <a href="<?php echo base_url('/backoffice/testimonials'); ?>">Go Back</a>
                <h3>Edit Testimonial</h3>
                <div class="col-sm-12">
                  <form action="<?php echo base_url('backofficeFunctions/updateTestimonial'); ?>" method="post">
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Name:</label>
                              <input type="text" class="form-control" name="name" value="<?php echo $testimonial['name']; ?>" required>
                              <p class="help-block"></p>
                          </div>
                      </div>
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Testimonial:</label>
                              <textarea class="form-control" rows="10" id="testimonial" name="testimonial" required><?php echo stripslashes($testimonial['testimonial']); ?></textarea>
                              <p class="help-block"></p>
                          </div>
                      </div>
                      <input type="hidden" name="testimonialID" value="<?php echo $testimonial['id']; ?>">
                      <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                      <center><button type="submit" class="btn btn-success">Update</button></center>
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
