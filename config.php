<?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = 'root';
$db['db_name'] = 'quiz_app_w3villa';

foreach($db as $key => $value){
	define(strtoupper($key), $value);
}
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if($con==true)
    {
       //echo "DB is connected";
    }
else
{
    echo "failed";
}

?>