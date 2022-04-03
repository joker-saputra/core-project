<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Token_core extends CI_Controller {

	function token()
	{
        $ch = curl_init($search);
        curl_setopt($ch, CURLOPT_URL, 'https://raw.githubusercontent.com/joker-saputra/core-project/main/core_test.html?token=GHSAT0AAAAAABTFDSZ2MICCMCU2EVMPMGYYYSJJT5A');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        $token = explode(',', $data);
        $sch = array_search($search, $token, TRUE);
        return $sch;
	}
}
