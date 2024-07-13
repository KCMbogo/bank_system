<?php

include 'base.php';

if(isset($_GET['id']) && isset($_GET['loan_id'])) {
    $user = $_GET['id'];
    $loan_id = $_GET['loan_id'];

    $sql = "SELECT loans.*, customers.first_name, customers.last_name, customers.account 
            FROM loans INNER JOIN customers ON loans.customer=customers.id WHERE customer=$user AND loans.id=$loan_id";
    $customer = mysqli_query($conn, $sql);
    $customer = mysqli_fetch_assoc($customer);

?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <b>Loan Applicant -  </b>
                                <?= $customer['first_name'] . " " . $customer['last_name'] ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">
                                        <b>Acc No</b>: <?= $customer['account']; ?>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <b>Amount</b>: <h3 class="mb-3">Tzs <?= $customer['amount'] ?></h3> 
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description: </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" cols="10">
                                            <?= $customer['description'] ?>
                                        </textarea>
                                    </div>
                                    <p><b>Status</b>: <i><?= $customer['status'] ?></i></p>
                                    <?php if($customer['status'] == 'Accepted') { ?>
                                            <button class="btn btn-success disabled">Verified</button>
                                    <?php } else if($customer['status'] == 'Declined') { ?>
                                        <button class="btn btn-danger disabled">Declined</button>
                                    <?php } else { ?>
                                        <a href="process/verify.php?id=<?= $customer['customer'] ?>&loan_id=<?= $customer['id']?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Verify">
                                            <button class="btn btn-success">Verify</button>
                                        </a>
                                        <a href="process/decline.php?id=<?= $customer['customer'] ?>&loan_id=<?= $customer['id']?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Decline">
                                            <button class="btn btn-danger">Decline</button>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>

</body>
</html>

<?php } ?>