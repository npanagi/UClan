#!/bin/bash

# This file will print all the files in the derectory
# Each time checking if it is a file, readable and the size
# is greater than 0

# EXAMPLE OUTPUT

#2. weekdays.sh

#This is a file!
#This file is readable!
#The file size is greater than 0!


z=1

for i in *
do
echo $((z++)). $i
echo ""
if [ -f $i ]
then
echo "This is a file!"
fi
if [ -r $i ]
then
echo "This file is readable!"
fi
if [ -s $i ]
then
echo "The file size is greater than 0!"
fi
echo ""
done