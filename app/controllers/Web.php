<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	private $_template = 'template';

	public function index()
		{
			$this->template->set('title', 'Home');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/home');
		}
}
