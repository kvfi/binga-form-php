<?
date_default_timezone_set('GMT'); // set default time zone

// remplacer par le StoreId et PrivateKey fournis
$storeId = "";
$privateKey = "";

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
<form method="post" action="http://preprod.binga.ma:8080/bingaApi/order/prePay.action">
  <input type="hidden" name="apiVersion" value="1.1">
    <input type="hidden" name="externalId" value="<? echo $externalId ?>">
    <input type="hidden" name="expirationDate" value="<? echo $expirationDate ?>">
    <input type="hidden" name="amount" value="<? echo $amount ?>">
    <input type="hidden" name="buyerFirstName" value="<? echo $firstName ?>">
    <input type="hidden" name="buyerLastName" value="<? echo $lastName ?>">
    <input type="hidden" name="buyerEmail" value="<? echo $email ?>">
    <input type="hidden" name="buyerAddress" value="<? echo $address ?>">
    <input type="hidden" name="buyerPhone" value="<? echo $phone ?>">
    <input type="hidden" name="storeId" value="<? echo $storeId ?>">
    <input type="hidden" name="successUrl" value="http://www.example.com/successUrl">
    <input type="hidden" name="failureUrl" value="http://www.example.com/failureUrl">
    <input type="hidden" name="bookUrl" value="http://www.example.com/updateUrl">
    <input type="hidden" name="payUrl" value="http://www.example.com/payUrl">
    <input type="hidden" name="orderCheckSum" value="<? echo $checksum ?>">
    <input type="submit" name="paiement" value="Payer avec binga">
  </form>
</html>
