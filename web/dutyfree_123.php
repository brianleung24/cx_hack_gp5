<?php

include 'connectDB.php';

if(isset($_POST['submit'])) {
    
    //$u_id = $_POST[];
    // = $_POST[f_id];
    
    if($_POST['submit'] == "Submit") {
        $p_id = $_POST['id'];
        $tc = $_POST['tc'];
        $quatity = $_POST['qty'];
        
        $query_orderproduct = 'insert into hackaton.order_product(product_id, user_id, qty, price) values ('.$p_id.',1,'.$quatity.','.$tc.');';
        $result_orderproduct = $mysqli->query($query_orderproduct);
        
        if ($result_orderproduct) {
            $status = 'SUCCESS';
        } else {
            $status = 'FAILED';
        }
        echo $status;
        
    }/* elseif ($_POST['submit'] == "Change") {
        
        //$query_changeorder = 'update `order_food` set `food_id` ='.$f_id.' where `user_id`= '.$u_id.';';
        //$result_changeorder = $conn->query($query_changeorder);
        
        echo '<script>alert("Order Food Changed");</script>';
        
    } */elseif ($_POST['submit'] == "select_product") {
        $id = $_POST['id'];
        $qty = $_POST['quatity'];
        
        $query_q = 'select * from hackaton.product where product_id = '.$id.';';
        $result_q = $mysqli->query($query_q);
        $q = $result_q->fetch_object();
        
        $price = $q->price;
        
        $total_price = (int)$price * $qty;
        
        echo $total_price;
        
    }
}

