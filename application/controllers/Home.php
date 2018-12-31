<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = 
		[
			'title' =>'Dashboard|' ,
			'sub_title' => 'Home' ,
			'content' => 'dashboard/home'
		];
		$this->load->view('template/my_template', $data);
	}

	public function home2()
	{
		$this->load->view('dashboard/home2'); //cara pannggilnya http://localhost/ci/home/home2
	}

}