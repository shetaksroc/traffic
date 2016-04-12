<?php


$event_id=$_POST['route'];
$date=explode('-',$_POST['date']);
$time=explode(':',$_POST['time']);

$year=$date[0];
$month=$date[1];
$day=$date[2];
$hr=$time[0];
$mn=$time[1];
$week_day= date("N", strtotime($_POST['date']) )-1;
$week_number =floor(($day - 1) / 7 + 1);
//$data = array($st,$wn, $wd);
$data = array($event_id, $week_day, $week_number,$hr,$mn); //id,weekday,hr ,min,weekno
$result= shell_exec('python traffic_prediction.py ' . escapeshellarg(json_encode($data)));
//$resultData = json_decode($result, true);
//var_dump($data);
echo $result;
//echo json_encode("success");
?>
