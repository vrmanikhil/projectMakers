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
              <h2>Menu Categories and Settings</h2>
              <div class="col-sm-12">
                <h3>Menu Contact Number</h3>
                <form class="form-inline" method="post" action="<?php echo base_url('/backofficeFunctions/updateMenuMobile'); ?>">
                  <div class="form-group">
                    <label for="mobile">Mobile Number:</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $mobileNumber; ?>">
                  </div>
                  <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                  <button type="submit" class="btn btn-success">Update</button>
                  </form>
                </div>
                    <div class="col-sm-12">
                      <h3>Menu Categories</h3>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i=1; foreach ($menuCategories as $key => $value) { ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['description']; ?></td>
                                    <td><a href="<?php echo base_url('/backoffice/editMenuCategory/').$value['id']; ?>" class="btn btn-success">Edit</a></td>
                                    <td><a onclick="if(!confirm('Are you sure you want to delete the Menu Category? This will also delete all the items associated with this category.')){return false};" href="<?php echo base_url('/backofficeFunctions/deleteCategory/').$value['id'] ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12">
                        <h3>Add New Category</h3>
                        <form action="<?php echo base_url('backofficeFunctions/addMenuCategory'); ?>" method="post">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" name="name" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Description:</label>
                                    <textarea class="form-control" id="description" rows="10" name="description" required></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                            <center><button type="submit" class="btn btn-success">Add Category</button></center>
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
       editor = CKEDITOR.replace('description');
     });
     </script>

</body>

</html>
