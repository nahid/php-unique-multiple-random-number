PHP Unique Multiple Random Number Generator
==============================================

Its a PHP function for generate unique multiple random number as an array. 

Description
============

array/int randUniqueNum(int $min[, int $max[,int $limit]])

Parameters
============

###min
The lowest value of random number. If you ignore max then it will highest number and 0 will autometically set in min. and then the function return int value

###max
The highest value of random number. If you ignore limit then it will return a single int random number between min and max

###limit
Limit of random number. Example: If you set limit 3 then it return 3 unique random number as array

Return Value
================

A pseudo random value between min (or 0) and max according to limit

>If limit>max-min+1 then it return false

Example
========
$rand=randUniqueNum(5,10,4);

echo $rand[0].' '.$rand[1].' '.$rand[2].' '.$rand[4];

Thank you :)



