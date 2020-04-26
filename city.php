
 <?php
session_start();
 $ip = file_get_contents('https://api6.ipify.org');
    
       
    // your ip address here
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    if($query && $query['status'] == 'success')
    { 
        $GLOBALS['city'] =  $query['city'];
    }

$_SESSION['loca']=$city;
echo $city;
    ?>
