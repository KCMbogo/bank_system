<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Group-One Bank | Admin</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/favicon1.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/favicon1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Group-One Bank</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Kadilana Mbogo</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./add_customer.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./manage_customer.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Customers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./manage_loan.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Loans</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./manage_transactions.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Transactions</p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

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
