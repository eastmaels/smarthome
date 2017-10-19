#!/bin/bash
device=$1
path=/app/web

while true
do
 timeVal=$(cat $path/timers/$device)
 timeVal=`echo $timeVal`

 echo $(($timeVal - 1)) > $path/timers/$device

 if [ "$timeVal" -eq "0" ] || [[ -z "${timeVal// }" ]]; then
  echo "reset timer"
  
  ## declare an array variable
  declare -a devices=("aircon" "bedroomlight" "dininglight" "tv")

  ## now loop through the above array
  for i in "${devices[@]}"
  do
     echo "$i"

     # output to monthly consumption csv
     elapsedTime=$(cat $path/timers/$i)
     echo "$i, $elapsedTime" >> $path/timers/monthly.csv

     # reset timer to zero
     echo "0" > $path/timers/$i
  done
  
  echo "2592000" > $path/timers/$device
 fi

 sleep 1
done