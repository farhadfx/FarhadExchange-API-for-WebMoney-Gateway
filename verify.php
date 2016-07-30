<?php
$data = file_get_contents ('https://farhadexchange.com/exchange_statusj.php?API_REFERENCE=API_REFERENCE');  // API_REFERENCE is unique order number on your website, you want to check its status
$data = json_decode($data, true); // Turns it into an array, change the last argument to false to make it an object
if ($data[0] = '9' && $data[1] = 'SRC_AMOUNT' && $data[3] = '11' && $data[6] = 'DST_ACCOUNT' && $data[7] = '1' && $data[13] = '1' && $data[14] = 'API_REFERENCE') {
echo 'The transaction Has been successfully completed!';
echo $data[2].'<br>'; // The batch number of the transaction in which the client has sent the WebMoney to FarhadExchange's account
echo $data[5].'<br>'; //The batch number of the transaction in which FarhadExchange has forwarded the WebMoney to your account
echo $data[8].'<br>'; // The email which you provided and the whole information of the transaction has been sent to it.
echo $data[9].'<br>'; // The unique order number related to this transaction on FarhadExchange - referenceid
echo $data[10].'<br>'; //Your client's WebMoney wmz purse.
echo $data[11].'<br>'; // The exact date and time your client has sent WebMoney to FarhadExchange
echo $data[12].'<br>'; // The exact date and time the WebMoney has been forwarded to you.
echo $data[15].'<br>'; //The CallBack URL you provided . All data are posted automatically to this URL and you can double check them
}
elseif ($data[1] != 'SRC_AMOUNT') {
echo 'You should check SRC_AMOUNT to be equal to the amount you want to receive from your client. Hack alert! ';
}
elseif ($data[6] != 'DST_ACCOUNT') {
echo 'This destination account does not match our account. Someone has tried to hack you';
}
if ($data[0] != '9' || $data[3] != '11') {
echo 'Exchange direction is not valid';
}
if ($data[7] = '0' && $data[13] = '1' ) {
echo 'The client has send the WbMoney succefully but farhadexchange.com has not forwarded it to your account yet. ';
}
if ($data[7] = '0' && $data[13] = '0' ) {
echo 'The client has not send the WbMoney succefully to FarhadExchange ';
}
?>
