<?php

session_start();


$mobile=$_SESSION['mobile'];

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');


$getting_id="select user_id from user_info where mobile='$mobile'";

$runit=mysqli_query($con,$getting_id);

$user_id=mysqli_fetch_row($runit);

$id=$user_id[0];

$delete_like="delete from post_like where user_id='$id'";
$delete_comment="delete from post_comment where user_id='$id'";
$delete_opinion="delete from opinion_datas where user_id='$id'";
$delete_notification="delete from notification where user_id='$id'";
$delete_reviews="delete from reviews where user_id='$id'";
$delete_reviews2="delete from reviews where mobile='$mobile'";

$delete_post="delete from photo_info where user_id='$id'";
$delete_id="delete from user_info where user_id='$id'";

$runit2=mysqli_query($con,$delete_like);
$runit3=mysqli_query($con,$delete_comment);

$runit4=mysqli_query($con,$delete_opinion);
$runit5=mysqli_query($con,$delete_notification);
$runit6=mysqli_query($con,$delete_reviews);
$runit7=mysqli_query($con,$delete_reviews2);
$runit8=mysqli_query($con,$delete_id);



// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
$a=1;
echo $a 



?>
