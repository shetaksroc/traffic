<?php

$event_id=intval($_POST['events']);
$date=explode('-',$_POST['date']);
$time=explode(':',$_POST['time']);

$year=$date[0];
$month=$date[1];
$day=$date[2];
$hr=$time[0];
$mn=$time[1];
$week_day= date("N", strtotime($_POST['date']) )-1;
$week_number =floor(($day - 1) / 7 + 1);
$data = array($event_id,$week_number,$week_day,$hr,$mn);
#var_dump($data); 

#$data=array(5,1,1,6,0);

$result= shell_exec('python prediction_events_decision_tree.py ' . escapeshellarg(json_encode($data)));
//$resultData = json_decode($result, true);

#echo json_encode($result);
#echo json_encode("success")
echo $result;
?>
