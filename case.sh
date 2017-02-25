#!/bin/bash

clear
echo " ================== case esac=================="
echo "Enter option"
read -p "[ a,b,c,or x ] : " opt

case "$opt" in
    "a") echo " You have selected a "
    ;;
    "b") echo " You have selected b"
    ;;
    "c") echo " You have selected c"
    ;;
    "x") exit
    ;;
esac