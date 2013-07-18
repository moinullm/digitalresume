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

    public function checkHttpGet()
    {
        $httpGet = $this->WelcomeModel->checkHttpGet();

        print_r($httpGet);exit;
    }

    public function checkHttpPost()
    {
        $httpPost = $this->WelcomeModel->checkHttpPost();

        print_r($httpPost);exit;
    }

    public function checkHttpPut()
    {
        $httpPut = $this->WelcomeModel->checkHttpPut();

        print_r($httpPut);exit;
    }

    public function checkHttpDelete()
    {
        $httpDelete = $this->WelcomeModel->checkHttpDelete();

        print_r($httpDelete);exit;
    }
}
