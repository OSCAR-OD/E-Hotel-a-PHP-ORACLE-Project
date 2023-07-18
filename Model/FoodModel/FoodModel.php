<?php
include'../../Model/DBConnection.php';
//view
function FoodShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from food") ;
     $res = oci_execute($sql);
     return $sql;
}

//insert
function FoodInsert($f_name,$dic_price,$price){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO food(food_id,f_name,dic_price,price) VALUES (seq_food.nextval,'$f_name','$dic_price','$price')") ;
    $res = oci_execute($sql);
    return $res;
}
?>