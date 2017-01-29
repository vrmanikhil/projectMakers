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
                <h2>Manage Images</h2>
                <div class="col-sm-12">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i=1; foreach ($images as $key => $value) { ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $value['type']; ?></td>
                                    <td><img class="img-responsive" height="300px" src="<?php echo base_url().$value['imageURL']; ?>"></td>
                                    <td>
                                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('/backofficeFunctions/updateImage'); ?>">
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" name="image" class="form-control" id="image">
    <p class="help-text">Minimum Height: <?php echo $value['minHeight']; ?>, Maximum Height: <?php echo $value['maxHeight']; ?>, Minimum Width: <?php echo $value['minWidth']; ?>, Maximum Width: <?php echo $value['maxWidth']; ?></p>
    <input type="hidden" name="imageID" value="<?php echo $value['id']; ?>">
    <input type="hidden" name="minHeight" value="<?php echo $value['minHeight']; ?>">
    <input type="hidden" name="maxHeight" value="<?php echo $value['maxHeight']; ?>">
    <input type="hidden" name="minWidth" value="<?php echo $value['minWidth']; ?>">
    <input type="hidden" name="maxWidth" value="<?php echo $value['maxWidth']; ?>">
  </div>
  <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_token; ?>">
  <button type="submit" class="btn btn-primary" style="float:right; margin-top: 10px;">Upload</button>
</form></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
