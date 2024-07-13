<?php

include 'base.php';

$sql2 = "SELECT * FROM customers ORDER BY id DESC";
$customers = mysqli_query($conn, $sql2);

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php if(isset($_GET['msg'])) { ?>
                <div class="container">
                    <h5 class="alert alert-success my-3 text-center fs-6"><?= $_GET['msg'] ?></h5>
                </div>
            <?php } else if(isset($_GET['error'])) { ?>
                <div class="container">
                    <h5 class="alert alert-danger my-3 text-center fs-6"><?= $_GET['error'] ?></h5>
                </div>
            <?php } ?>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">MANAGE CUSTOMERS</h1>
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
                                    <h3 class="card-title">All Customers</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Account</th>
                                                <th>Date Joined</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; foreach ($customers as $customer): ?>
                                                <tr>
                                                    <td><?= ++$i; ?></td>
                                                    <td><?= $customer['first_name'] ?></td>
                                                    <td><?= $customer['last_name'] ?></td>
                                                    <td><?= $customer['account'] ?></td>
                                                    <td><?= $customer['date_joined'] ?></td>
                                                    <td>
                                                        <span class="badge <?=($customer['status'] == 'Verified') ? "badge-success py-2 px-3" : "badge-danger py-2 px-3"?>">
                                                            <?= $customer['status'] ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="delete.php?id=<?= $customer['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                            <img src="icons/delete.png" class="btn btn-danger" style="width: 45px">
                                                        </a>
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
