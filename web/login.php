<?php
/**
 * Created by PhpStorm.
 * User: kinngaileung
 * Date: 22/10/2016
 * Time: 8:16 PM
 */
include  'connectDB.php';

$username = $_POST['name'];
$pw = $_POST['password'];

//echo 'login';
//echo $username;
//echo $pw;
// Find username  and check pw

// get data from Single Sign on
if (!empty($username)&&!empty($pw)) {
    $query = "SELECT * FROM user WHERE name = '$username'";
    $result = mysqli_query($mysqli, $query);
   //echo json_encode($result->fetch_object());
    if ($result) {
        $user = $result->fetch_object();
        //echo $user->user_id;
echo json_encode($user);
//echo $user->password;
//echo $user['name'];
        session_start();
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['username'] = $user->name;
        $_SESSION['isMarco'] = $user->is_marco;
        $_SESSION['flight'] = $user->flight;
        $_SESSION['seat'] = $user->seat;
echo $_SESSION['isMarco'];
        //echo json_encode($_SESSION['user_id']);
//echo $_SESSION['username'];
        //redirect to index
        header("Location: /index.php");
    }
}







?>