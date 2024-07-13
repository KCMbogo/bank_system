<?php

include 'user-midware.php';

include '../process/config.php';

$user = $_SESSION['id'];

$sql = "SELECT * FROM customers WHERE id=$user";
$result = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM loans WHERE customer=$user  ORDER BY id DESC";
$loan = mysqli_query($conn, $sql2);
$loan = mysqli_fetch_assoc($loan);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Group-One Bank</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav ml-auto">
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
            <div class="dropdown mx-3">
                <i class="fas fa-bell dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></i>
                <div class="dropdown-menu">
                    <?php if($loan) { ?>
                        <p class="dropdown-item mb-1"><b>Amount:</b> Tzs <?= $loan['amount'] ?></p>
                        <p class="dropdown-item text-dark mb-1"><b>Date:</b> <?= $loan['date'] ?></p>
                        <p class="dropdown-item <?= ($loan['status'] == 'Declined') ? 'text-danger' : 'text-success' ?> mb-1">
                            <b>Status:</b> <?= $loan['status'] ?>
                        </p>
                    <?php } ?>
                </div>
            </div>
            <div>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Acc No: <?= $result['account']; ?></li>
                    <li class="breadcrumb-item active">Tzs <?= $result['amount']; ?></li>
                </ol>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="../dist/img/favicon1.png" alt="User Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Group-One Bank</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="../process/logout.php" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
                            <?= $result['first_name'] ?>
                        </a>
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
                            <a href="./dashboard.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./loan.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Apply Loan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./deposit.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Deposit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./withdraw.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>withdraw</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./manage.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Details</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>