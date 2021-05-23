<?php
require_once('easybitcoin.php');
$bitcoin = new Bitcoin('admin','1234','localhost','8332');
$bitcoin->getinfo();
?>