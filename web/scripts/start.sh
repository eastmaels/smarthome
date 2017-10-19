#!/bin/bash
device=$1
timeVal=$(cat ~/web/timers/$device)
while true
do
 timeVal=$(cat ~/web/timers/$device)
 echo $(($timeVal + 1)) > ~/web/timers/$device
 echo $(cat ~/web/timers/$device)
 sleep 1
done