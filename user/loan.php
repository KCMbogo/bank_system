<?php

include 'base.php';

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
                            <h1 class="m-0">APPLY FOR LOAN</h1>
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
                            <form action="../process/loan.php" method="post">
                                <input type="hidden" name="customer" value=<?= $_SESSION['id']; ?>>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" name="amount" class="form-control" id="amount"
                                            placeholder="Tanzania Shillings">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Description</label>
                                        <input type="text" name="desc" class="form-control" id="desc"
                                            placeholder="Describe why you need the loan and what you do">
                                    </div>
                                </div>
                                <!-- /.card-body -->

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
