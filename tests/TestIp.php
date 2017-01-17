<?php
require __DIR__.'/../vendor/autoload.php';
use Zhuzhichao\IpLocationZh\Ip;

class TestIp extends PHPUnit_Framework_TestCase {
	public function testIpLocation() {
        $this->assertEquals(['中国', '河南', '郑州', '', '410100'], Ip::find('171.12.10.156'));
        $this->assertEquals(['中国', '山东', '', '', '370000'], Ip::find('110.223.0.43'));
        $this->assertEquals(['本机地址', '本机地址', '', '', ''], Ip::find('127.0.0.1'));
		$this->assertEquals(['中国', '浙江', '杭州', '', '330100'], Ip::find('110.75.115.70'));
	}
}