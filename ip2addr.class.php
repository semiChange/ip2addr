<?php
class Ip2addr
{
	// ip data file
	private $ip_data;
	// common lib semi
	private $s = null;

	// construct
	public function __construct($file,$s=null)
	{
		$this->ip_data = $file;
		$this->s = $s;
	}

	// translate ip
	public function toTranslate($a_ip)
	{
		foreach($a_ip as $v)
		{
			$a[$v] = $this->s->s_ip2addr($v,$this->ip_data);
		}
		return $a[$v];
	}
}




