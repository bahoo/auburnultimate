<?php

   $total = file_get_contents('total.php');
   $float_total = (float)preg_replace('/\D/', '', $total)/100;

?>

<script>window.auburn_utlimate_sales_total = parseInt('<?php echo $float_total; ?>');</script>