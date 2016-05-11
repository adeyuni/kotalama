<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('themes_lib');
	}

	public function index()
	{
		$this->themes_lib->display('page/homepage');
	}

	public function aboutUs()
	{
		$this->themes_lib->display('welcome_message');
	}

	public function oldTown()
	{
		$this->themes_lib->display('welcome_message');
	}

	public function grandDesign()
	{
		$this->themes_lib->display('welcome_message');
	}

	public function news()
	{
		$this->themes_lib->display('welcome_message');
	}

	public function event()
	{
		$this->themes_lib->display('page/event');
	}

	public function communities()
	{
		$this->themes_lib->display('page/communities');
	}

	public function contact()
	{
		$this->themes_lib->display('page/contact_us');
	}
}
