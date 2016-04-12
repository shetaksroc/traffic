<?php


$st=$_POST['route'];
$wd=$_POST['date'];
$wn=$_POST['time'];
//$hr=$_POST['hr'];
//$mn=$_POST['mn'];


//$data = array($st,$wn, $wd);
$data = array(13, 2, 9,0,1); //id,weekday,hr ,min,weekno
$result= shell_exec('python traffic_prediction.py ' . escapeshellarg(json_encode($data)));
//$resultData = json_decode($result, true);
//var_dump($data);
echo $result;
//echo json_encode("success");
?>
