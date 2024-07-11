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
                            <h1 class="m-0">WITHDRAW</h1>
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
                            <form action="../process/withdraw.php" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="address">Amount</label>
                                        <input type="number" class="form-control" id="amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="account">Account ID</label>
                                        <input type="text" class="form-control" id="account"
                                            placeholder="xxxxxxxxxxx">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </form>

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
</body>

</html>
