<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	private $_template = 'template';

	public function __construct()
	    {
	 	    parent::__construct();
	    }

	public function index()
		{
			$this->template->set('title', 'Web Design Development Company, Best Digital Marketing Agency India');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/home');
		}

	public function about()
        {
  			$this->template->set('title', 'About us');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/about');
        }

    public function social_media_optimization()
       {
			$this->template->set('title', 'Terms');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/social_media_optimization');
       }

    public function ecommerce_development()
       {
			$this->template->set('title', 'Terms');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/ecommerce_development');
       }


    public function wordpress_development()
       {
			$this->template->set('title', 'Terms');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/wordpress_development');
       }

    public function android_development()
       {
			$this->template->set('title', 'Terms');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/android_development');
       }

   public function ios_development()
       {
			$this->template->set('title', 'Terms');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/ios_development');
       }

    public function pay_per_click()
       {
			$this->template->set('title', 'Terms');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/pay_per_click');
       }

       

    public function terms()
        {
  			$this->template->set('title', 'Terms');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/terms');
        }

    public function error_404()
        {
  			$this->template->set('title', 'Terms');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/404');
        }


    public function mobile_ui_ux()
        {
  			$this->template->set('title', 'Mobile Ui Ux');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/mobile_ui_ux');
        }

    public function social_media_marketing()
        {
  			$this->template->set('title', 'Mobile Ui Ux');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/social_media_marketing');
        }


    
    public function privacy()
        {
  			$this->template->set('title', 'Privacy');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/privacy');
        }

    public function webdesign()
        {
  			$this->template->set('title', 'Web Design');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/design');
        }

    public function seo()
        {
  			$this->template->set('title', 'Seo');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/seo');
        }

    public function logodesign()
		{
			$this->template->set('title', 'Logo Design');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/logodesign');
		}


    public function development()
        {
  			$this->template->set('title', 'Web Development');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/development');
        }

    public function portfolio()
        {
  			$this->template->set('title', 'Portfolio');
			$this->template->set('description', 'description');
			$this->template->set('keywords', 'keywords');
			$this->template->load_main($this->_template, 'pages/portfolio');
        }

    public function request_quote()
        {
                $this->load->helper(array('form', 'url'));
			    $this->load->library('form_validation');
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
				$this->form_validation->set_rules('tell_us_project', 'Project Description', 'trim|required');
				$this->form_validation->set_rules('budget', 'Budget', 'trim|required');
				$this->form_validation->set_rules('service', 'Service', 'trim|required');
				$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'trim|required|callback_valid_captcha');
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

				if ($this->form_validation->run() == FALSE)
					{
						$this->template->set('title', 'Request Quote');
						$this->template->set('description', 'description');
						$this->template->set('keywords', 'keywords');
						$this->template->load_main($this->_template, 'pages/request_quote');
					}
				else
					{
						$this->load->view('formsuccess');
					}

        }
      

	public function contact()
		{
				$this->load->helper(array('form', 'url'));
			    $this->load->library('form_validation');
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
				$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
				$this->form_validation->set_rules('message', 'Message', 'trim|required');
				$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'trim|required|callback_valid_captcha');
				$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

				if ($this->form_validation->run() == FALSE)
					{
							$this->template->set('title', 'Contact us');
							$this->template->set('description', 'description');
							$this->template->set('keywords', 'keywords');
							$this->template->load_main($this->_template, 'pages/contact');
					}
				else
					{
							
					}
		}

	public function valid_captcha($recaptchaResponse  = "")
	 {
	 	$userIp = $this->input->ip_address();
     
        $secret = $this->config->item('secret_key');
   
        $url    = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
 
        $ch     = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);      
         
        $status = json_decode($output, true);
 
        if ($status['success']) {
            return true;
        } else {
            $this->form_validation->set_message('valid_captcha', 'Please complete the reCAPTCHA challenge!');
            return false;
        }

	 }

}
