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
                            <h1 class="m-0">NEW CUSTOMER REGISTRATION</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <form action="process/insert_customer_account.php" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Enter Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" id="dob"
                                            placeholder="Birth Date">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                            placeholder="Eg: Dar es salaam, Kivule - Kananura street 001">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="+255xxxxxxxxx">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="nida">NIDA</label>
                                        <input type="text" name="nida" class="form-control" id="nida"
                                            placeholder="Eg: 19700101111020000123">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" name="amount" class="form-control" id="amount"
                                            placeholder="Initial amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">STATUS</label>
                                        <select id="status" name="status" class="form-control" required>
                                            <option value="Verified">Verified</option>
                                            <option value="Pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </form>
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
