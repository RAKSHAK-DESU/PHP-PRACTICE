<?php
  //  $file="text.txt";

   // $fp= fopen("text.txt","a");

 //   echo fread($fp,filesize("text.txt"));

 //  echo fwrite($fp," The Alter Ego of Shay");

 //  $fp1= fopen("Welcome.txt","w");
  // echo fwrite($fp1,"Welcome PHP");

  // $fp2= fopen($file,"r");
   //echo fread($fp2,filesize("text.txt"));
  // while($line= fgets($fp2)){
  //  echo $line."<br>";
  // }
//  readfile("text.txt");

  $data= file_get_contents("php://input");
 $data= json_decode($data);
 print_r($data);
?>
