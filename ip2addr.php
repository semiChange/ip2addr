<?php
class Ip2addr
{
	private $ip_data;
	private $s = null;
	public function __construct($file)
	{
		$this->ip_data = $file;
	}
	public function toTranslate($a_ip,Semi $s=null)
	{
		if(empty($this->s))
		{
			$this->s = new Semi\Semi('/var/www/html/s.conf');
		}
		foreach($a_ip as $v)
		{
			$a[$v] = $this->s->s_ip2addr($v,$this->ip_data);
		}
		return $a[$v];
	}

}

$ip = new Ip2addr("/root/ip2addr/ip_data.dat");
//$res = $ip->toTranslate(["116.62.244.112","192.168.2.5"]);
$res = $ip->toTranslate(json_decode($argv[1],true));
print_r($res);
