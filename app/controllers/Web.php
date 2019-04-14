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

    public function development()
        {
  			$this->template->set('title', 'contact us');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/development');
        }

    public function request_quote()
        {
  			$this->template->set('title', 'contact us');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/request_quote');
        }
      

	public function contact()
		{
			$this->template->set('title', 'contact us');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/contact');
		}

}
