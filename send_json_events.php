<?php

/*
$st=$_POST['st'];
$wd=$_POST['wd'];
$wn=$_POST['wn'];
$hr=$_POST['hr'];
$mn=$_POST['mn'];


*/
#$data = array($st,$wn, $wd, $hr,$mn);
$data = array(3,2,19,0,2);   //id,weekday,hr ,min,weekno
$result= shell_exec('python prediction_events_decision_tree.py ' . escapeshellarg(json_encode($data)));
//$resultData = json_decode($result, true);

echo json_encode($result);
#echo json_encode("success")
?>
