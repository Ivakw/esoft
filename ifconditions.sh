#!/bin/bash

clear;
echo -n "Enter User name :- ";
read userName;

echo -n "Password" :-
read password


if [ $userName == "test"  -a $password == "123" ] 
then
    echo "WELCOME";

else
    echo "COME AGAIN";

fi