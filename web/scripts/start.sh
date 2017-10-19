#!/bin/bash
device=$1
timeVal=$(cat ~/workspace/timers/$device)
while true
do
 timeVal=$(cat ~/workspace/timers/$device)
 echo $(($timeVal + 1)) > ~/workspace/timers/$device
 echo $(cat ~/workspace/timers/$device)
 sleep 1
done