<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="fundraiser.css" />
  <style>
    @-webkit-keyframes disc_fly {
      0%   { -webkit-transform: translate(600%,1100%); }
      100% { -webkit-transform: translate(20%,630%); }
    }
    @keyframes disc_fly {
      0%   { -webkit-transform: translate(64%,64%); }
      100% { -webkit-transform: translate(40%,40%); }
    }
    /*@-moz-keyframes disc_fly {
      0%   { -webkit-transform: translate (0px,10px); }
      100% { -webkit-transform: translate (0px,10px); }
    }
    @-o-keyframes disc_fly {
      0%   { -webkit-transform: translate (0px,10px); }
      100% { -webkit-transform: translate (0px,10px); }
    }*/
  </style>
  <title>Auburn Ultimate - We're going to California!</title>
  <meta name="viewport" content="initial-scale=1.0; width=device-width;" />
</head>
<body>

  <?php

    include('math.php');

  ?>

  <h2></h2>
  <div class="header">
    <p>Dear Auburn and Auburn Ultimate Family,</p>
    <h2>We're going to</h2>
    <h1>CALI<span class="fornia">FORNIA</span></h1>
    <p>for the <a href="http://play.usaultimate.org/events/Stanford-Invite-2015/" target="_blank">2015 Stanford Invitational</a></p>
  </div>

  <div id="map-widget">
    <div class="disc"></div>
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