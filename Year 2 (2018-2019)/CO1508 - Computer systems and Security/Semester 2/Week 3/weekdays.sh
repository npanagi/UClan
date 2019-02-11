#!/bin/bash

# This file will print the number from 1 until the last number of the
# last item given in the list plus the weekday read from the list

# EXAMPLE OUTPUT
# Day 1 = Mon!
# Day 2 = Tue!
# Day 3 = Wed!
# Day 4 = Thu!
# Day 5 = Fri!
# Day 6 = Sat!
# Day 7 = Sun!


daylist='Mon Tue Wed Thu Fri Sat Sun'
z=1

for i in $daylist
do
echo Day $((z++)) = $i!
done
