<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



/**
* 
*/


class MY_Model extends CI_Model
{
	
	var $sms_api = '171789AYBkainQ59a1540e';
	var $crypto = array('btc'=>'Bitcoin','ltc'=>'Litecoin','zedx'=>'Zedexcoin','dash'=>'Dashcoin');
	var $rpc = array(
			
			'ltc_user'  => 'litecoinrpc',
			'ltc_pwd'   => 'kishoreamit56400215',
			'ltc_host'  => '165.227.100.74',
			'ltc_port'  => '9332',
			'btc_user'  => 'bitcoinrpc',
			'btc_pwd'   => 'kishoreamit56400215',
			'btc_host'  => '165.227.100.74',
			'btc_port'  => '8332',
			'dash_user' => 'dashcoinrpc',
			'dash_pwd'  => 'kishoreamit56400215',
			'dash_host' => '165.227.100.74',
			'dash_port' => '9998',
			'zedx_host'	=> '165.227.100.74',
			'zedx_port'	=> '8521',
			'zedx_user'	=> 'zedexcoinrpc',
			'zedx_pwd'	=> 'kishoreamit56400215'

	);
	


	function __construct()
	{
		parent::__construct();
	}


}