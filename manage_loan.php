<?php

include 'base.php';

$sql2 = "SELECT loans.*, customers.account FROM loans INNER JOIN customers ON loans.customer=customers.id ORDER BY id DESC";
$loans = mysqli_query($conn, $sql2);

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">MANAGE LOANS</h1>
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
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Amount</th>
                                                <th>Account ID</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; foreach ($loans as $loan): ?>
                                                <tr>
                                                    <td><?= ++$i; ?></td>
                                                    <td>Tzs <?= $loan['amount'] ?></td>
                                                    <td><?= $loan['account'] ?></td>
                                                    <td><?= $loan['description'] ?></td>
                                                    <td>
                                                        <span class="badge <?= ($loan['status'] == 'Accepted') ? 'badge badge-success py-2 px-3' : 'badge badge-danger py-2 px-3' ?>">
                                                            <?= $loan['status'] ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <?php if($loan['status'] == 'Accepted') { ?>
                                                            <a href="single_loan.php?id=<?= $loan['customer'] ?>&loan_id=<?= $loan['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <img src="icons/eye.png" class="btn btn-dark" style="width: 45px">
                                                            </a>
                                                        <?php } else if($loan['status'] == 'Declined') { ?>
                                                            <a href="single_loan.php?id=<?= $loan['customer'] ?>&loan_id=<?= $loan['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <img src="icons/eye.png" class="btn btn-dark" style="width: 45px">
                                                            </a>
                                                        <?php } else { ?>
                                                            <a href="single_loan.php?id=<?= $loan['customer'] ?>&loan_id=<?= $loan['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <img src="icons/eye.png" class="btn btn-dark" style="width: 45px">
                                                            </a>
                                                            <a href="process/verify.php?id=<?= $loan['customer'] ?>&loan_id=<?= $loan['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Verify">
                                                                <button class="btn btn-primary">Verify</button>
                                                            </a>
                                                            <a href="process/decline.php?id=<?= $loan['customer'] ?>&loan_id=<?= $loan['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Decline">
                                                                <button class="btn btn-danger">Decline</button>
                                                            </a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                    </div>

                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">

                    </aside>


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
