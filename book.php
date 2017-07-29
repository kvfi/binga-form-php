<?php

date_default_timezone_set('GMT'); // set default time zone

$storeId = ""; // store id
$privateKey = ""; // private key

try {
  if (isset($_POST['code'], $_POST['orderCheckSum']) {
    $code = $_POST['code'];
    $order_check_sum = $_POST['orderCheckSum'];
    if (md5("PRE-PAY" . $_POST['amount'] . $storeId, $_POST['externalId'] . $_POST['buyerEmail'] . $privateKey) == $order_check_sum) {
      // insérer le code binga dans votre base de données avec un status pending
      // Ne pas insérer des variables $_POST directement à la base de données, pensez à échapper les caractères spéciaux.
    } else {
      throw new Exception("Checksums do not match!");
    }
  }
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
