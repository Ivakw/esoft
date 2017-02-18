#!/bin/bash
clear
echo "Emp ID"
read empId;
echo "Enter First Name ";
read fName;
echo "Enter Last Name ";
read lName;



echo -e "\n\n"

echo "===============EMPLOYES======================";

echo $empId":"$fName":"$lName >>empdata.txt; 


