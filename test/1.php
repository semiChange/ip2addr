<?php
// zhuan huan ip2addr
class Ip2addr
{
	private $ip_data;
	private $s = null;
	public function __construct($file)
	{
        $this->s = $this->s = new \Semi\Ss('/var/www/html/s.conf');
		$this->ip_data = $file;
	}
	// zhuanhuan
    // @s_ip    ["1.1.1.1"]
	public function toTranslate($argv)
	{
	    $s_ip = $argv[1];
	    $ip2addr = $this->s->conf['sip'];
        $a = [];

        $a_ip = json_decode($s_ip,true);

        if(is_array($a_ip))
        {
            foreach($a_ip as $v)
            {
                $a[$v] = $ip2addr->s_ip2addr($v,$this->ip_data);
            }
            return $a[$v];
        }
        else
        {
//            return $ip2addr->s_ip2addr($s_ip,$this->ip_data);
            return $ip2addr->s_ip2addr("1.1.1.1",$this->ip_data);
        }
	}

}

$ip = new Ip2addr("/root/ip2addr/ip_data.dat");

// 整体传入
$res = $ip->toTranslate($argv);
print_r( $res );
