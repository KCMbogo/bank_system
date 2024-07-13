<?php

include 'base.php';

$user = $_SESSION['id'];

$sql2 = "SELECT * FROM user_details WHERE user=$user ORDER BY id DESC";
$details = mysqli_query($conn, $sql2);

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">DETAILED VIEW</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Details</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Action</th>
                                                <th>Amount</th>
                                                <th>Date Issued</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; foreach ($details as $detail) { 
                                                if($detail['action'] == 'Deposit' || $detail['action'] == 'Initial Deposit') {
                                            ?>
                                                <tr class=" bg-success">
                                                    <td><?= ++$i; ?></td>
                                                    <td><?= $detail['action'] ?></td>
                                                    <td>Tzs <?= $detail['amount'] ?></td>
                                                    <td><?= $detail['date'] ?></td>
                                                </tr>
                                            <?php } else if($detail['action'] == 'Loan') { ?>
                                                <tr class=" bg-warning">
                                                    <td><?= ++$i; ?></td>
                                                    <td><?= $detail['action'] ?></td>
                                                    <td>Tzs <?= $detail['amount'] ?></td>
                                                    <td><?= $detail['date'] ?></td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class=" bg-danger">
                                                    <td><?= ++$i; ?></td>
                                                    <td><?= $detail['action'] ?></td>
                                                    <td>Tzs <?= $detail['amount'] ?></td>
                                                    <td><?= $detail['date'] ?></td>
                                                </tr>
                                            <?php } } ?>    
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                    </div>


                    <script src="plugins/jquery/jquery.min.js"></script>
                    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
                    <script>
                        $.widget.bridge('uibutton', $.ui.button)
                    </script>
                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="plugins/sparklines/sparkline.js"></script>
                    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
                    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
                    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
                    <script src="plugins/moment/moment.min.js"></script>
                    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
                    <script src="plugins/summernote/summernote-bs4.min.js"></script>
                    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                    <script src="dist/js/adminlte.js"></script>
                    <script src="dist/js/pages/dashboard.js"></script>
                    <!-- DataTables  & Plugins -->
                    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
                    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                    <script src="plugins/jszip/jszip.min.js"></script>
                    <script src="plugins/pdfmake/pdfmake.min.js"></script>
                    <script src="plugins/pdfmake/vfs_fonts.js"></script>
                    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
                    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                    <!-- Page specific script -->
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "responsive": true,
                                "lengthChange": false,
                                "autoWidth": false,
                                "buttons": ["csv", "excel", "pdf", "print"]
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            $('#example2').DataTable({
                                "paging": true,
                                "lengthChange": false,
                                "searching": false,
                                "ordering": true,
                                "info": true,
                                "autoWidth": false,
                                "responsive": true,
                            });
                        });
                    </script>
</body>

</html>
