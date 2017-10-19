#!/bin/bash
device=$1
while true
do
 timeVal=$(cat /app/web/timers/$device)
 echo $(($timeVal + 1)) > /app/web/timers/$device
 echo $(cat /app/web/timers/$device)
 sleep 1
done