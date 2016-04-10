<?php

/*
$st=$_POST['st'];
$wd=$_POST['wd'];
$wn=$_POST['wn'];
$hr=$_POST['hr'];
$mn=$_POST['mn'];


*/
#$data = array($st,$wn, $wd, $hr,$mn);
$data = array(13, 2, 9,0,1); //id,weekday,hr ,min,weekno
$result= shell_exec('python traffic_prediction.py ' . escapeshellarg(json_encode($data)));
//$resultData = json_decode($result, true);

echo $result;
#echo json_encode("success")
?>
