<?php
/**
 * Created by PhpStorm.
 * User: kinngaileung
 * Date: 22/10/2016
 * Time: 10:52 PM
 */
include 'connectDB.php';
//get the order that they want
$type = $_GET['type'];
$flight = $_GET['flight'];

$orderTable = 'order_'.$type;
$item_id = $type.'_id';
$item_name = $type.'_name';

if (isset($type) && isset($flight)) {// don't run if courseID is invaild
    $query = "SELECT item.$item_name , o.qty ,o.price,user.name , user.seat from $orderTable o
join $type item on item.$item_id = o.product_id
join user user on user.user_id = o.user_id where user.flight = '$flight'; ";
   // echo $query;
    $result = mysqli_query($mysqli, $query);
    if ($result) {
        $orderList = array();
        for ($x = 0; $row = $result->fetch_object(); $x++) {
            //$course = $row->courseID;
            array_push($orderList, $row);
            //echo $row->courseID;
            echo json_encode($orderList);
        }
    } else {
        echo $mysqli->error;//error message
    }
    $mysqli->close();
}




?>