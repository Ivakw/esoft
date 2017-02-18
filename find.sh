#!/bin/bash
clear
echo "Select Column Number";
read col
echo "==========================="
cut -d ":" -f$col empdata.txt 
