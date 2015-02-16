<?php

   $url = "https://docs.google.com/spreadsheets/d/11PowoGolt96N0n5gDnvgvTaZUIAt8jhsm19kSxVm730/export?format=csv&id=11PowoGolt96N0n5gDnvgvTaZUIAt8jhsm19kSxVm730&gid=0";

   if (($handle = fopen($url, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
         $spreadsheet_data[]=$data;
      }
      fclose($handle);

      if(($handle = fopen('total.php', 'w')) !== FALSE){
         fwrite($handle, $spreadsheet_data[32][1]);
         fclose($handle);
      }

   } else {
      die('fuck');
   }