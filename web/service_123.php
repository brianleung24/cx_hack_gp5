<?php

include 'connectDB.php';

if(isset($_POST['submit'])) {
    
    //$u_id = $_POST[];
    // = $_POST[f_id];
    
    if($_POST['submit'] == "Submit") {
        $id = $_POST['id'];
        
        $query_orderservice = 'insert into hackaton.order_service(service_id, user_id) values ('.$id.',1);';
        $result_orderservice = $mysqli->query($query_orderservice);
        
        if ($result_orderservice) {
            $status = 'SUCCESS';
        } else {
            $status = 'FAILED';
        }
        echo $status;
        
    }
}