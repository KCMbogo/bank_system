<?php

include 'base.php';


function selectAll($table) {
  include 'process/config.php';

  $sql2 = "SELECT * FROM $table";
  $value = mysqli_query($conn, $sql2);
  $value = mysqli_num_rows($value);

  return $value;
}
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
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
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?= selectAll('customers'); ?></h3>

                  <p>All Customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="manage_customer.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?= selectAll('loans'); ?></h3>

                  <p>Number of Loans</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="manage_loan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?= selectAll('transactions'); ?></h3>

                  <p>Count of Transactions</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="manage_transactions.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
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
</body>

</html>
