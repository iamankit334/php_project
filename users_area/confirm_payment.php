<?php
include("../includes/connect.php");
include("../functions/common_functions.php");
session_start();
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    $select_order_query = "SELECT * FROM `user_orders` WHERE order_id = '$order_id'";
    $select_order_result = mysqli_query($con, $select_order_query);
    $row_fetch = mysqli_fetch_array($select_order_result);
    $invoice_number = $row_fetch['invoice_number'];
    $amount_due = $row_fetch['amount_due'];
}
if (isset($_POST['confirm_payment'])) {
    // insert user payment
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $insert_payment_query = "INSERT INTO `user_payments` (order_id, invoice_number, amount, payment_method) VALUES ($order_id, $invoice_number, $amount, '$payment_method')";
    $insert_payment_result = mysqli_query($con, $insert_payment_query);
    if ($insert_payment_result) {
        echo "<script>window.alert('Payment completed successfully');</script>";
        echo "<script>window.open('profile.php?my_orders','_self');</script>";
    }
    // update user orders
    $update_orders_query = "UPDATE `user_orders` SET order_status = 'paid' WHERE order_id = $order_id";
    $update_orders_result = mysqli_query($con, $update_orders_query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .upper-nav {
            background-color: #2A91E7;
            color: white;
        }

        .upper-nav a {
            color: #fff;
            text-decoration: underline;
        }

        .btn-primary {
            background-color: #2A91E7;
            border-color: #2A91E7;
        }

        .btn-primary:hover {
            background-color: #1a6cb3;
            border-color: #1a6cb3;
        }

        .form-outline input,
        .form-outline select {
            border-color: #2A91E7;
        }

        .form-outline input:focus,
        .form-outline select:focus {
            border-color: #1a6cb3;
            box-shadow: 0 0 0 0.2rem rgba(42, 145, 231, 0.25);
        }

        .form-label {
            color: #2A91E7;
        }

        h1 {
            color: #2A91E7;
        }

        .card {
            border: 1px solid #2A91E7;
        }

        .card-header {
            background-color: #2A91E7;
            color: white;
        }
    </style>
</head>

<body>
    <!-- upper-nav -->
    <div class="upper-nav p-2 px-3 text-center text-break">
        <span>We are glad to help you | we wish buy again from our store</span>
    </div>
    <!-- upper-nav -->
    <div class="container my-5">
        <h1 class="text-center">Confirm Payment</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" class="d-flex flex-column gap-3 text-center" action="">
                    <div class="form-outline">
                        <label for="invoice_number" class="form-label">Invoice Number</label>
                        <input type="text" class="form-control" name="invoice_number" id="invoice_number" value="<?php echo $invoice_number; ?>" required>
                    </div>
                    <div class="form-outline">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount" id="amount" value="<?php echo $amount_due; ?>" required>
                    </div>
                    <div class="form-outline">
                        <select name="payment_method" id="payment_method" class="form-select" required>
                            <option selected disabled>Select payment method</option>
                            <option value="masr_bank">Masr Bank</option>
                            <option value="paypal">Paypal</option>
                            <option value="upi">UPI</option>
                            <option value="cash_on_delivery">Cash on delivery</option>
                        </select>
                    </div>
                    <div class="form-outline">
                        <input type="submit" value="Confirm" name="confirm_payment" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>
