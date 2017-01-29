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
                <a href="<?php echo base_url('/backoffice/manageTeam'); ?>">Go Back</a>
                <h3>Edit Team Member</h3>
                <div class="col-sm-12">
                  <form action="<?php echo base_url('backofficeFunctions/updateTeamMember'); ?>" method="post">
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Name:</label>
                              <input type="text" class="form-control" name="name" value="<?php echo $teamMember['name']; ?>" required>
                              <p class="help-block"></p>
                          </div>
                      </div>
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Role:</label>
                              <input type="text" class="form-control" name="role" value="<?php echo $teamMember['role']; ?>" required>
                              <p class="help-block"></p>
                          </div>
                      </div>
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Description:</label>
                              <textarea class="form-control" id="description" rows="10" name="description" required><?php echo $teamMember['description']; ?></textarea>
                              <p class="help-block"></p>
                          </div>
                      </div>
                      <input type="hidden" name="teamMemberID" value="<?php echo $teamMember['id']; ?>">
                      <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                      <center><button type="submit" class="btn btn-success">Update</button></center>
                  </form>
                </div>
                <div class="col-sm-12">
                  <h3>Change Team Member Image</h3>
                  <div class="col-sm-8">
                    <label>Current Image</label>
                    <img class="img-responsive" style="width: 100%;" src="<?php echo base_url().$teamMember['imageURL']; ?>">
                  </div>
                  <div class="col-sm-4">
                    <form class="form" method="post" action="<?php echo base_url('/backofficeFunctions/updateTeamMemberImage'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="image">New Image:</label>
                      <input type="file" class="form-control" name="image" id="image">
                      <p class="help-text">Minimum Width: 200px<br> Maximum Width: 400px<br> Minimum Height: 200px<br> Maximum Height: 400px</p>
                    </div>
                    <input type="hidden" name="teamMemberID" value="<?php echo $teamMember['id']; ?>">
                    <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                    <button type="submit" class="btn btn-primary" style="float:right;">Upload</button>
                  </form>
                </div>
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
       editor = CKEDITOR.replace('description');
     });
     </script>

</body>

</html>
