#!/bin/bash
device=$1
path=/app/web
while true
do
 timeVal=$(cat $path/timers/$device)
 echo $(($timeVal + 1)) > $path/timers/$device
 echo $(cat $path/timers/$device)
 sleep 1
done