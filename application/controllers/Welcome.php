<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		echo "ini function index";
		//$this->load->view('welcome_message');
	}

	public function nama($param1, $param2)
	{
		echo "Hello Tof, " . $param1;
		echo " ".$param2;
	}
	public function biiodata()
	{
		echo "Nama lengkap saya Rifqi Althof";
		echo "<br>";
		echo "Apa kabar??";
	}
}
