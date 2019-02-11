#!/bin/bash
daylist='Mon Tue Wed Thu Fri Sat Sun'
z=1

for i in $daylist
do
echo Day $((z++)) = $i!
done
