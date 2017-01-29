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
              <h2>Menu Items</h2>
                    <div class="col-sm-12">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Item</th>
                                    <th>Category</th>
                                    <th>Starts From</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i=1; foreach ($menuItems as $key => $value) { ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $value['itemName']; ?></td>
                                    <td><?php echo $value['category']; ?></td>
                                    <td><?php echo $value['startsFrom']; ?></td>
                                    <td><a href="<?php echo base_url('/backoffice/editMenuItem/').$value['itemID']; ?>" class="btn btn-success">Edit</a></td>
                                    <td><a onclick="if(!confirm('Are you sure you want to delete the item?')){return false};" href="<?php echo base_url('/backofficeFunctions/deleteItem/').$value['itemID'] ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12">
                        <h3>Add New Menu Item</h3>
                        <form action="<?php echo base_url('backofficeFunctions/addMenuItem'); ?>" method="post" enctype="multipart/form-data">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Item Name:</label>
                                    <input type="text" class="form-control" name="name" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Description:</label>
                                    <textarea class="form-control" rows="10" id="description" name="description" required></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Category ID:</label>
                                    <select class="form-control" name="categoryID" required>
                                      <?php foreach ($menuCategories as $key => $value) { ?>
                                      <option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
                                      <?php } ?>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Item Image:</label>
                                    <input type="file" class="form-control" name="image" required>
                                    <p class="help-block">Minimum Width: 250px, Maximum Width: 300px, Minimum Height: 175 px, Maximum Height: 200px</p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Starts from:</label>
                                    <input type="text" class="form-control" name="startsFrom" required>
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
                            <center><button type="submit" class="btn btn-success">Add Item</button></center>
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
