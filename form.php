<?php
date_default_timezone_set('GMT'); // set default time zone

// remplacer par le StoreId et PrivateKey fournis
$storeId = "";
$privateKey = "";
$bingaUrl = "";

// variable à modifier afin de refléter la command du marchand
$amount_raw = 455.878; // montant à payer
$externalId = 123456; // id de la transaction du marchand
$expirationDate = date('Y-m-d\TH:i:se');
$amount = bcadd(round($amount_raw, 2), '0', 2); // arrondi  et converti en unités à virgule flottante en double précision
$firstName = "Ahmad";
$lastName = "bin Rochd";
$email = "example@example.com"; // email du client
$address = "Córdoba, Spain";
$phone = "+1 123 456 789";
$checksum = md5("PRE-PAY" . $amount . $storeId . $externalId . $email . $privateKey);
?>
<!DOCTYPE html>
<head>
  <title>Binga Form</title>
</head>
<form method="post" action="<?php echo $bingaUrl ?>">
  <input type="hidden" name="apiVersion" value="1.1">
    <input type="hidden" name="externalId" value="<?php echo $externalId ?>">
    <input type="hidden" name="expirationDate" value="<?php echo $expirationDate ?>">
    <input type="hidden" name="amount" value="<?php echo $amount ?>">
    <input type="hidden" name="buyerFirstName" value="<?php echo $firstName ?>">
    <input type="hidden" name="buyerLastName" value="<?php echo $lastName ?>">
    <input type="hidden" name="buyerEmail" value="<?php echo $email ?>">
    <input type="hidden" name="buyerAddress" value="<?php echo $address ?>">
    <input type="hidden" name="buyerPhone" value="<?php echo $phone ?>">
    <input type="hidden" name="storeId" value="<?php echo $storeId ?>">
    <input type="hidden" name="successUrl" value="http://www.example.com/successUrl">
    <input type="hidden" name="failureUrl" value="http://www.example.com/failureUrl">
    <input type="hidden" name="bookUrl" value="http://www.example.com/updateUrl">
    <input type="hidden" name="payUrl" value="http://www.example.com/payUrl">
    <input type="hidden" name="orderCheckSum" value="<?php echo $checksum ?>">
    <input type="submit" name="paiement" value="Payer avec binga">
  </form>
</html>
