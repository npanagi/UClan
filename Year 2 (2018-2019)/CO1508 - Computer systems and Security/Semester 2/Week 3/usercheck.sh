#!/bin/bash

# This bash script checks if the user is 'cisco' and if true
# it will display all the directories of the user and also
# output them in a file called Allfiles.txt

# The Allfiles.txt can be located in /home/'username'

username=$USER

if [ $username == 'cisco' ]
then
cd /home/$username
ls -LR
ls -LR > Allfiles.txt
else
echo "You are not the user 'cisco'!"
fi


