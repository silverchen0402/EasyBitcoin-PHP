<?php
require_once('easybitcoin.php');
$bitcoin = new Bitcoin('admin','1234','localhost','8332');
$rr=$bitcoin->getinfo();
print_r($rr);
?>