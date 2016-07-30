<!DOCTYPE HTML>

<html>

<head>
  <title>FarhadExchange API for WebMoney Gateway</title>
</head>

<body>
<form action='https://farhadexchange.com/exchange_step.php' method=post >
<input type='hidden' name='API_REFERENCE'  value='API_REFERENCE' /> // A unique number you assing to the transaction
<input type='hidden' name='UUID'  value='UUID' />     // Your ID on FarhadExchange.com Website
<input type='hidden' name='CALLBACK'  value='CALLBACK' />   // YourWebsite.com without http or https
<input type='hidden' name='STEP'  value='goTopaY' />
<input type='hidden' name='EMAIL'  value='EMAIL' /> // you@yourwebsite.com
<input type='hidden' name='srcID'  value='9' />
<input type='hidden' name='dstID'  value='11' />
<input type='hidden' name='SRC_AMOUNT'  value='SRC_AMOUNT' />// The amount your client should pay
<input type='hidden' name='DST_ACCOUNT'  value='DST_ACCOUNT' />//Your WMZ purse number as  Z300310298720
<p>Please Click on the button below to use FarhadExchange.com to Pay WebMoney to us: </p>  <br>
<input type='submit' value='PAY ONLINE' /></form>
</body>

</html>
