<?php
header("Access-Control-Allow-Origin: *");

$device = strtolower(urldecode($_GET["device"]));
$status = strtolower(urldecode($_GET["status"]));
$timeNow = gmdate('Y-m-d h:i:s \G\M\T');

// write to device log
$deviceLog = fopen("./timers/logs/" . $device , "a") or die("Unable to open file!");
fputcsv($deviceLog, array($device, $status, $timeNow));
fclose($deviceLog);

// get process id
$pidFile = fopen("./timers/" . $device . "_pid", "r") or die("Unable to open file!");
$pid=fread($pidFile, filesize("./timers/" . $device . "_pid"));
fclose($pidFile);

// Turn ON if current status is OFF (PID is not set in <device>_pid)
if (strcasecmp($status,"on") == 0 && empty(trim($pid))) {
    $pid=shell_exec('nohup /var/www/scripts/start.sh ' . $device . " > /dev/null 2>&1 & echo $!");

    $pidFile = fopen("./timers/" . $device . "_pid", "w") or die("Unable to open file!");
    fwrite($pidFile, $pid);
    fclose($pidFile);
    
// Turn OFF if command/status is specified as OFF and is running (PID exists)
} elseif (strcasecmp($status,"off") == 0 && !empty(trim($pid))) {
    $kill=shell_exec("kill -9 " . $pid);
    exec("echo '' > " . "./timers/" . $device . "_pid");

}

// re-read process id
$pidFile = fopen("./timers/" . $device . "_pid", "r") or die("Unable to open file!");
$pid=fread($pidFile, filesize("./timers/" . $device . "_pid"));
fclose($pidFile);

$response = array(
    'device' => $device,
    'status' => (empty(trim($pid)) ? 'off' : 'on')
    );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>