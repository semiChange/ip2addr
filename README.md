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

---
```php
<?php
// 新的版本 semi.so新版还没有上传
class Ip2addr
{
	private $ip_data;
	private $s = null;
	public function __construct($file)
	{
        $this->s = $this->s = new \Semi\Ss('/var/www/html/s.conf');
		$this->ip_data = $file;
	}
	public function toTranslate($s_ip)
	{

		$sip = $this->s->conf['sip'];
        return $sip->s_ip2addr($s_ip,$this->ip_data);

	}

}

$ip = new Ip2addr("/root/ip2addr/ip_data.dat");
$param = $argv[1];
$res = $ip->toTranslate($param);
print_r($res);
```
