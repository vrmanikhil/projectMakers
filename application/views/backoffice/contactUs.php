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
                <h2>Contact Us</h2>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Read</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; foreach ($contactUs as $key => $value) { ?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo substr($value['message'],0,200); ?>&nbsp;<a href="<?php echo base_url('/backoffice/viewContactMessage/').$value['id']; ?>">View</a></td>
                                    <td><?php if(!empty($value['acknowledge'])){ echo "<button class='btn btn-success'>Read</button>"; } else { ?> <button class='btn btn-danger'>Unread</button><br><a href="<?php echo base_url('/backofficeFunctions/markRead/').$value['id']; ?>">Mark as Read</a> <?php  } ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
