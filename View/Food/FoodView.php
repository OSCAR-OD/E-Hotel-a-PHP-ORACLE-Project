<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Table.css">
    <link rel="stylesheet" href="../../CSS/Header.css">
   
    <title>Table View</title>
</head>
<body>
<?php

include '../../View/Header.php';
include '../../Model/FoodModel/FoodModel.php';
?>


<div class="title">
    <h1>Available Foods</h1>
</div>

<div class="heading-table">
    <h1>Food:</h1>
</div>
<table border="2">
    <tr>
    <th>Food Id</th>
    <th>Food Name</th>
    <th>Quantity</th>
    <th>branch Id</th>
    <th>discounted Price</th>
    <th>Normal Price</th>
    </tr>
    <?php
    $res =FoodShow();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

</body>
</html>