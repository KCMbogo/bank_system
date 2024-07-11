<?php

include 'base.php';

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
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
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h3>150</h3>
            
                              <p>New Orders</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>53<sup style="font-size: 20px">%</sup></h3>
            
                              <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>44</h3>
            
                              <p>User Registrations</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner">
                              <h3>65</h3>
            
                              <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
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
