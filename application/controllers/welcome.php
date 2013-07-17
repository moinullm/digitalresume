<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    protected $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('WelcomeModel');
    }

    public function index()
	{
		$this->load->view('welcome_message');
	}

    public function checkHttpRequest()
    {
        $httpRequest = $this->WelcomeModel->checkHttpRequest();

        print_r($httpRequest);exit;
    }
}
