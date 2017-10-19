#!/bin/bash
device=$1

while true
do
 timeVal=$(cat ~/workspace/timers/$device)
 timeVal=`echo $timeVal`

 echo $(($timeVal - 1)) > ~/workspace/timers/$device

 if [ "$timeVal" -eq "0" ] || [[ -z "${timeVal// }" ]]; then
  echo "reset timer"
  
  ## declare an array variable
  declare -a devices=("aircon" "bedroomlight" "dininglight" "tv")

  ## now loop through the above array
  for i in "${devices[@]}"
  do
     echo "$i"

     # output to monthly consumption csv
     elapsedTime=$(cat ~/workspace/timers/$i)
     echo "$i, $elapsedTime" >> ~/workspace/timers/monthly.csv

     # reset timer to zero
     echo "0" > ~/workspace/timers/$i
  done
  
  echo "2592000" > ~/workspace/timers/$device
 fi

 sleep 1
done