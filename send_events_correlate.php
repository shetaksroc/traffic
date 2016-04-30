<?php

$event_id=4;
$date=explode('-',$_POST['date']);
$time=explode(':',$_POST['time']);



$year=$date[0];
$month=$date[1];
$day=$date[2];
$hr=$time[0];
$mn=$time[1];
$week_day= date("N", strtotime($_POST['date']) )-1;
$week_number =floor(($day - 1) / 7 + 1);

$matc=array(2,7,12,11,14,17,18);
$hrc=array(24,28,5,7,11);
if (in_array($day, $matc) && in_array($day, $hrc)) {
    $prio=1;
}
else if(in_array($day, $matc))
{
	$prio=2;
}
else if(in_array($day, $hrc))
{
	$prio=3;
}
else
{
	$prio=0;
}

$data = array($event_id,$week_number,$week_day,$hr,$mn,$prio); 
//$data=array(4,2,3,18,0,0);


$result= shell_exec('python prediction_events_decision_tree.py ' . escapeshellarg(json_encode($data)));
//$resultData = json_decode($result, true);

#echo json_encode($result);
#echo json_encode("success")
echo $result;
?>
