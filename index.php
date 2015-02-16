<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="fundraiser.css" />
  <?php
    include('math.php');
    if(isset($_GET['force'])){
      $float_total = min($_GET['force'], 8000);
    }
    $funding_progress = $float_total/8000;
    $midway_progress = $float_total/4000;
  ?>
  <style>

  <?php
    /*
      // static ($8000)
      @-webkit-keyframes disc_fly_x {
        0%   { -webkit-transform: translateX(62%); -webkit-animation-timing-function: ease-out; }
        100% { -webkit-transform: translateX(4%); -webkit-animation-timing-function: ease-in; }
      }

      @-webkit-keyframes disc_fly_y {
        0%   { -webkit-transform: translateY(920%); -webkit-animation-timing-function: ease-out; }
        50%   { -webkit-transform: translateY(500%); -webkit-animation-timing-function: ease-in; }
        100% { -webkit-transform: translateY(530%); }
      }

      // static ($4000)
      @-webkit-keyframes disc_fly_x {
        0%   { -webkit-transform: translateX(62%); -webkit-animation-timing-function: ease-out; }
        100% { -webkit-transform: translateX(30%); -webkit-animation-timing-function: ease-in; }
      }

      @-webkit-keyframes disc_fly_y {
        0%   { -webkit-transform: translateY(920%); -webkit-animation-timing-function: ease-out; }
        100%   { -webkit-transform: translateY(500%); -webkit-animation-timing-function: ease-in; }
      }

    */
  ?>
      @-webkit-keyframes disc_fly_x {
        0%   { -webkit-transform: translateX(62%); -webkit-animation-timing-function: ease-out; }
        100% { -webkit-transform: translateX(<?php echo 62 - $funding_progress*58; ?>%); -webkit-animation-timing-function: ease-in; }
      }

      @-webkit-keyframes disc_fly_y {
        0%   { -webkit-transform: translateY(920%); -webkit-animation-timing-function: ease-out; }
        <?php if($float_total <= 4000): ?>
          100% { -webkit-transform: translateY(<?php echo 500 + (1 - $midway_progress) * 500 ; ?>%); -webkit-animation-timing-function: ease-out; }
        <?php else: ?>
          <?php echo 50 + ($float_total-4000)/4000 * 100; ?>%   { -webkit-transform: translateY(500%); -webkit-animation-timing-function: ease-in; }
          100% { -webkit-transform: translateY(<?php echo 500 + $funding_progress*30; ?>%); }
        <?php endif; ?>
      }
  </style>
  <title>Auburn Ultimate - We're going to California!</title>
  <meta name="viewport" content="initial-scale=1.0; width=device-width;" />
</head>
<body>
  <div class="header">
    <p>Dear Auburn and Auburn Ultimate Family,</p>
    <h2>We're going to</h2>
    <h1>CALI<span class="fornia">FORNIA</span></h1>
    <p>for the <a href="http://play.usaultimate.org/events/Stanford-Invite-2015/" target="_blank">2015 Stanford Invitational</a></p>
  </div>

  <div id="map-widget">
    <div class="disc-wrapper"><div class="disc"><span class="duckets">$<?php echo number_format($float_total, 2); ?></span></div></div>
    <img src="us-map-blank.svg" class="map" />
  </div>

  <div class="letter">

    <p>And we need your help getting there!</p>

    <h3>We've got merchandise for sale:</h3>
    <ul class="clearfix pics">
      <li><img src="merch1.jpg" /></li>
      <li><img src="merch2.jpg" /></li>
      <li><img src="merch3.jpg" /></li>
      <li><img src="merch4.jpg" /></li>
      <li>
    </ul>
    <p><a href="https://drive.google.com/folderview?id=0B0d8lHBCAsDpc1d0a1hRb0xFeHc&amp;usp=sharing" target="_blank">CHECK IT OUT</a></p>
    <p>and <a href="https://docs.google.com/spreadsheets/d/11PowoGolt96N0n5gDnvgvTaZUIAt8jhsm19kSxVm730/edit#gid=0" target="_blank">PLACE A BID</a> when you're ready!</p>

    <h3>or you can donate to us with PayPal:</h3>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_donations">
      <input type="hidden" name="business" value="multima@auburn.edu">
      <input type="hidden" name="lc" value="US">
      <input type="hidden" name="item_name" value="Auburn Ultimate">
      <input type="hidden" name="no_note" value="0">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
      <input type="text" name="amount" value="25.00" placeholder="25.00" style="font-size: 1.5em" />
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" style="display: block; margin: 1em auto; border: 0;" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

    <p>Hey thanks a ton, we promise we'll make you proud!</p>

    <p>&lt;3, Auburn Ultimate</p>

    <p>WAR DAMN EAGLE</p>

  </div>

</body>
</html>