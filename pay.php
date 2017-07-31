<?php

date_default_timezone_set('GMT'); // set default time zone

$storeId = ""; // store id
$privateKey = ""; // private key

try {
  if (isset($_POST['code'], $_POST['orderCheckSum']) {
    $code = $_POST['code'];
    $order_check_sum = $_POST['orderCheckSum'];
    if (md5("PAY" . $_POST['amount'] . $storeId . $_POST['externalId'] . $_POST['buyerEmail'] . $privateKey) == $order_check_sum) {
      // Le client a effectivement payé chez Wafa cash
      // Mettre la commande à jour sur base du code Binga précédemment insérer dans "book.php"
      // Ne pas insérer des variables $_POST directement à la base de données, pensez à échapper les caractères spéciaux.
      echo "100;" . date('Y-m-d\TH:i:se');
    } else {
      echo "000;" . date('Y-m-d\TH:i:se');
    }
  }

} catch (Exception $e) {
  echo "000;" . date('Y-m-d\TH:i:se');
}
