<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page'] = 'home';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('pages/index');
        echo view('templates/footer');
    }

    public function about()
    {
        $data['page'] = 'about';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('pages/about');
        echo view('templates/footer');
    }

    public function contact()
    {
        $data['page'] = 'contact';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('pages/contact');
        echo view('templates/footer');
    }

    public function mt5()
    {
        $data['page'] = 'mt5';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('pages/mt5');
        echo view('templates/footer');
    }

    public function send_message()
    {
        $session = session();
       $email = \Config\Services::email();
       $from = $this->request->getVar('email');
       $name = $this->request->getVar('name');
       $to = 'info@nakigafx.com';
       
       //$phone =$this->request->getVar('contact');
       $subject =$this->request->getVar('subject');
       $message =$this->request->getVar('message');

        //Send Messsage
        $email->setFrom($from, $name);
        $email->setTo($to);
        $email->setSubject($subject);
        $email->setMessage("<b>Message:</b> <br> ". $message);

         if ($email->send())
		{
            echo $action="success";
            session()->setFlashdata('message', 'Send Message Successfully!');
            session()->setFlashdata('alert-class', 'alert-success');
        }
		else
		{
            echo $action="failed";
            session()->setFlashdata('message', 'Message Not Send, Please Check Your Email Id...!!!');
            session()->setFlashdata('alert-class', 'alert-danger');
        }

       return $this->response->redirect(site_url('contact'));
    }
}
