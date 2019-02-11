#!/bin/bash

# This bash script will read a number from the user and checks
# if it is equal to, less or greater than 100 and displays a message
# EDIT: Added while loop with way to exit the loop (Not on worksheet)

echo "In order to stop the loop enter the word 'exit'"

read -p "Enter a number: " num

while [ $num != 'exit' ]
do

if [ $num -eq 100 ]
then
echo "The number you have entered is equal to 100!"
fi

if [ $num -gt 100 ]
then
echo "The number you have entered is greater than 100!"
fi

if [ $num -lt 100 ]
then
echo "The number you have entered is less than 100!"
fi

read -p "Enter a number: " num

done
