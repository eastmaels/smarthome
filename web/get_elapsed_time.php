<?php
header("Access-Control-Allow-Origin: *");

$device = urldecode($_GET["device"]);

$file = fopen("./timers/" . $device, "r") or die("Unable to open file!");
$elapsed_time=fread($file, filesize("./timers/" . $device));
fclose($file);

// get process id
$pidFile = fopen("./timers/" . $device . "_pid", "r") or die("Unable to open file!");
$pid="";
if (0 < filesize("./timers/" . $device . "_pid")) {
    $pid=fread($pidFile, filesize("./timers/" . $device . "_pid"));
}
fclose($pidFile);

$response = array(
    'device' => $device,
    'elapsed' => trim($elapsed_time),
    'status' => (empty(trim($pid)) ? 'off' : 'on'),
    'pid' => $pid
    );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>