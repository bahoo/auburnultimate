<?php

   $total = file_get_contents('total.php');
   $text_total = (float)preg_replace('/\D/', '', $total)/100;

?>

<script>window.auburn_utlimate_sales_total = parseInt('<?php echo $text_total; ?>');</script>