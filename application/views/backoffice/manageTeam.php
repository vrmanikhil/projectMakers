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
                <h2>Manage Team</h2>
                <div class="col-sm-12">
                  <h3>Page Description</h3>
                  <form action="<?php echo base_url('backofficeFunctions/changePassword'); ?>" method="post">
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Description:</label>
                              <textarea class="form-control" name="description" required></textarea>
                              <p class="help-block"></p>
                          </div>
                      </div>

                      <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                      <button type="submit" class="btn btn-success" style="float:right;">Update</button>
                  </form>
                </div>
                    <div class="col-sm-12">
                      <h3>Current Team</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>Nikhil Verma</td>
                                    <td>Baker</td>
                                    <td><a class="btn btn-success">Edit</a></td>
                                    <td><a class="btn btn-danger">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12">
                        <h3>Add New Team Member</h3>
                        <form action="<?php echo base_url('backofficeFunctions/changePassword'); ?>" method="post">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" name="name" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Role:</label>
                                    <input type="text" class="form-control" name="role" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Description:</label>
                                    <textarea class="form-control" name="description" required></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                            <center><button type="submit" class="btn btn-success">Add Team Member</button></center>
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