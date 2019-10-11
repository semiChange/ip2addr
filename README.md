# ip2addr
translate ip to physical address

## how to use

demo1.php
```php
<?php
require_once "Ip2addr.class.php";
// create object
$I = new Ip2addr("ip_data.dat",new \Semi\Semi('s.conf'));
// totranslate
print_r( $I->toTranslate(["116.62.244.112"]));
```

demo2.php
```php
<?php
require_once "Ip2addr.class.php";
// create object
$s = new \Semi\Semi('s.conf');
$i = new Ip2addr("ip_data.dat",$s);
// get parma ip
// ["116.62.244.112","192.168.2.5"]
$arr = $argv[1];    
// totranslate
print_r( $i->toTranslate(json_decode($arr,true)));
```




