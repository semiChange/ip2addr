<?php
require_once "Ip2addr.class.php";
// create object
$I = new Ip2addr("ip_data.dat",new \Semi\Semi('s.conf'));
// totranslate
print_r( $I->toTranslate(["116.62.244.112"]));
