<?php 
	class Themes_lib{
		public $_ci;
		function __construct()
		{
			$this->_ci =&get_instance();
		}
		
		function display($content=null,$data=null)
		{
			$data['_header']=$this->_ci->load->view('template/header',$data, true);
			$data['_navbar']=$this->_ci->load->view('template/navbar',$data, true);
			$data['_footer']=$this->_ci->load->view('template/footer',$data, true);
			$data['_content']=$this->_ci->load->view($content,$data, true);
			$this->_ci->load->view('template/page.php',$data);
		}
	}
	
// end of file template.php
