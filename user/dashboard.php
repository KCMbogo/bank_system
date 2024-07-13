<?php

include 'base.php';

function selectAll($table) {
  include '../process/config.php';

  $id = $_SESSION['id'];
  $sql2 = "SELECT * FROM $table WHERE customer=$id";
  $value = mysqli_query($conn, $sql2);
  $value = mysqli_num_rows($value);

  return $value;
}
function select($trans) {
  include '../process/config.php';

  $account = $_SESSION['account'];
  $sql2 = "SELECT * FROM transactions WHERE account='$account' AND type='$trans'";
  $value = mysqli_query($conn, $sql2);
  $value = mysqli_num_rows($value);

  return $value;
}

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php if(isset($_GET['msg'])) { ?>
                <div class="container">
                    <h5 class="alert alert-success my-3 text-center fs-6"><?= $_GET['msg'] ?></h5>
                </div>
            <?php } else if (isset($_GET['error'])) { ?>
                <div class="container">
                    <h5 class="alert alert-danger my-3 text-center fs-6"><?= $_GET['error'] ?></h5>
                </div>
            <?php } ?>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">MY ACCOUNT</h1>
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
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3><?= selectAll('loans'); ?></h3>
            
                              <p>Loans Applied</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3><?= select('Deposit') ?></h3>
            
                              <p>Deposits Made</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner">
                              <h3><?= select('Withdraw') ?></h3>
            
                              <p>Withdrawals Completed</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-person-add"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>

                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">

                    </aside>


                    <script src="../plugins/jquery/jquery.min.js"></script>
                    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
                    <script>
                        $.widget.bridge('uibutton', $.ui.button)
                    </script>
                    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="../plugins/sparklines/sparkline.js"></script>
                    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
                    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
                    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
                    <script src="../plugins/moment/moment.min.js"></script>
                    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
                    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
                    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                    <script src="../dist/js/adminlte.js"></script>
                    <script src="../dist/js/pages/dashboard.js"></script>
                    <!-- DataTabl../es  & Plugins -->
                    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
                    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                    <script src="../plugins/jszip/jszip.min.js"></script>
                    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
                    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
                    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
                    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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
