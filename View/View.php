<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/View.css">
    <title>View</title>
</head>

<body>
    <?php

    include '../View/Header.php';
    include '../Model/ViewModel.php';
    ?>
    <div class="title">
        <h1>View</h1>
    </div>
    <div class="heading-table">
        <p>Create a view customer_view for showing customer information with customer details. </p>
    </div>
    <table border="2">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Pone</th>
            <th>City</th>
        </tr>
        <?php
        $res = view1();
        while ($row = oci_fetch_array($res, OCI_RETURN_NULLS + OCI_ASSOC)) {

            echo '<tr>';
            foreach ($row as $item) {
                echo '<td>' . ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp') . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>

    <div class="heading-table">
        <p>Create a view reservaton_view based on Reservation table to get the customer resrvation room.</p>
    </div>
    <table border="2">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Location</th>
            <th>Category</th>
        </tr>
        <?php
        $res = view2();
        while ($row = oci_fetch_array($res, OCI_RETURN_NULLS + OCI_ASSOC)) {

            echo '<tr>';
            foreach ($row as $item) {
                echo '<td>' . ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp') . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>