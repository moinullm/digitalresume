<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
    protected $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('IndexModel');
        $this->layout->setLayout('front');		
    }

    public function index()
	{
		//$this->load->view('welcome_message');

        $message = $this->session->flashdata('message');
        if ($message) {
            $data['message'] = $message;
        } else {
            $data['message'] = "";
        }
		
		$this->layout->view('front/index', $data);
	}

    public function profile()
    {
        $message = $this->session->flashdata('message');
        if ($message) {
            $data['message'] = $message;
        } else {
            $data['message'] = "";
        }

        $this->layout->view('front/profile', $data);
    }

    public function contact()
    {
        $message = $this->session->flashdata('message');
        if ($message) {
            $data['message'] = $message;
        } else {
            $data['message'] = "";
        }

        $this->layout->view('front/contact', $data);
    }

    public function aboutus()
    {
        $message = $this->session->flashdata('message');
        if ($message) {
            $data['message'] = $message;
        } else {
            $data['message'] = "";
        }

        $this->layout->view('front/aboutus', $data);
    }

    public function gallery()
    {
        $message = $this->session->flashdata('message');
        if ($message) {
            $data['message'] = $message;
        } else {
            $data['message'] = "";
        }

        $this->layout->view('front/gallery', $data);
    }

    public function public_profile($id)
    {
        $message = $this->session->flashdata('message');
        if ($message) {
            $data['message'] = $message;
        } else {
            $data['message'] = "";
        }

        $this->layout->view('front/public', $data);
    }

    public function signup()
    {
        echo $_POST['p_key'].'-'.$_POST['email'].'-'.$_POST['password'].'-'.$_POST['c_password']; die;

        /*$httpSignup = $this->IndexModel->signup();

        print_r($httpSignup);exit;*/
    }

    public function login()
    {
        $httpLogin = $this->IndexModel->login();

        print_r($httpLogin);exit;
    }

    public function checkHttpGet()
    {
        $httpGet = $this->IndexModel->checkHttpGet();

        print_r($httpGet);exit;
    }

    public function checkHttpPost()
    {
        $httpPost = $this->IndexModel->checkHttpPost();

        print_r($httpPost);exit;
    }

    public function checkHttpPut()
    {
        $httpPut = $this->IndexModel->checkHttpPut();

        print_r($httpPut);exit;
    }

    public function checkHttpDelete()
    {
        $httpDelete = $this->IndexModel->checkHttpDelete();

        print_r($httpDelete);exit;
    }
}
