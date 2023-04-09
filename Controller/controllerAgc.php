<?php 
include_once 'Card.php';
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
 
echo '<h3>วันเกิด </h3>';
 
$dateOfBirth = '1987-11-12'; //วันเกิด รูปแบบ ปี เดือน วัน
$currentDate  = date('Y-m-d'); //วันที่ปัจจุบัน
 
echo 'เกิดวันที่ : ' .$dateOfBirth;
echo '<hr>';
echo 'วันที่ปัจจุบัน ' .$currentDate;
echo '<hr>';
 
$diff = abs(strtotime($currentDate) - strtotime($dateOfBirth));
 
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
 
echo '<h4> สรุป  มีอายุ : ';
printf("%d ปี, %d เดือน, %d วัน\n", $years, $months, $days);
 
 
//https://stackoverflow.com/questions/676824/how-to-calculate-the-difference-between-two-dates-using-php
?>