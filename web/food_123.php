<?php

include '../connectDB.php';

if(isset($_POST['submit'])) {
    
    //$u_id = $_POST[];
    // = $_POST[f_id];
    
    if($_POST['submit'] == "Submit") {
        $f_id = $_POST['oid'];
        
        $query_orderfood = 'insert into hackaton.order_food(food_id, user_id) values ('.$f_id.',1);';
        $result_orderfood = $conn->query($query_orderfood);
        
        if ($result_orderfood) {
            $status = 'SUCCESS';
        } else {
            $status = 'FAILED';
        }
        echo $status;
        
    } elseif ($_POST['submit'] == "Change") {
        
        //$query_changeorder = 'update `order_food` set `food_id` ='.$f_id.' where `user_id`= '.$u_id.';';
        //$result_changeorder = $conn->query($query_changeorder);
        
        echo '<script>alert("Order Food Changed");</script>';
        
    } elseif ($_POST['submit'] == "select_detail") {
        $id = $_POST['id'];
        
        $query = 'select * from hackaton.food where food_id = '.$id.';';
        $result = $conn->query($query);
        $r = $result->fetch_object();
        
        echo $r->description;
        
    }
}