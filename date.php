<?php
date_default_timezone_set("Asia/Kolkata");

echo date("l-d-M-Y\n"); //Tuesday-25-Sept-2025
echo date("d M Y\n") ; //25 Nov 2025
echo date("Y-n-j"); //2025-11-25
echo date("h:i:s:A"); 
echo date_default_timezone_get();
echo date("y-m-d h:i:s",time()); // gives time in number of seconds
echo date("l Y-m-d h:i:s A",strtotime("2weeks"));
?>