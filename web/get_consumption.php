<?php
header("Access-Control-Allow-Origin: *");

$device = urldecode($_GET["device"]);
$ym = urldecode($_GET["ym"]);
$ym=str_replace("-", "", $ym);

$filePath="./timers/monthly/" . $device . "/" . $ym;
$consumptionFile = fopen($filePath, "r") or die("Unable to open file!");
$consumption=0;
if (0 < filesize($filePath)) {
    $consumption=fread($consumptionFile, filesize($filePath));
}
fclose($consumptionFile);

$response = array(
    'device' => $device,
    'consumption' => trim($consumption),
    'filepath' => $filePath
    );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>