# ip2addr
translate ip to physical address

## how to use

demo1.php
```php
<?php
// create object
$I = new Ip2addr("ip_data.dat",new \Semi\Semi('s.conf'));
// totranslate
print_r( $I->toTranslate("116.62.244.112"));
```

demo2.php
```php
<?php
// create object
$S = new \Semi\Semi('s.conf');
$I = new Ip2addr("ip_data.dat",$S);
// get parma ip
// ["116.62.244.112","192.168.2.5"]
$arr = $argv[1];    
$res = $ip->toTranslate();
// totranslate
print_r( $I->toTranslate(json_decode($arr,true)));
```




