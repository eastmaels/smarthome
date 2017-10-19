#!/bin/bash
while true
do
 timeVal=$(cat ./../timers/$device)
 echo $device
 echo $(($timeVal + 1))
 elapsed = `cat ../timers/tv`
 echo elapsed+1
 sleep 1
done