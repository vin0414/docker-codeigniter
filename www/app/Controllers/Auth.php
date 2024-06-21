<?php

namespace App\Controllers;
use App\Libraries\Hash;

class Auth extends BaseController
{
    private $db;
    public function __construct()
    {
        helper(['url','form']);
        $this->db = db_connect();
    }
    public function auth()
    {
        $accountModel = new \App\Models\accountModel();

        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $validation = $this->validate([
            'email'=>'required|valid_email',
            'password'=>'required',
        ]);
        if(!$validation)
        {
            session()->setFlashdata('fail','Invalid! Please enter your email and/or password');
            return redirect()->to('/')->withInput();
        }
        else
        {
            $user_info = $accountModel->where('EmailAddress', $username)->WHERE('Status',1)->first();
            if(empty($user_info['accountID']))
            {
                session()->setFlashdata('fail','Invalid! Account is not registered. Please contact IT Support');
                return redirect()->to('/')->withInput();
            }
            else
            {
                $check_password = Hash::check($password, $user_info['password']);
                if(!$check_password || empty($check_password))
                {
                    session()->setFlashdata('fail','Invalid Username or Password!');
                    return redirect()->to('/')->withInput();
                }
                else
                {
                    session()->set('loggedUser', $user_info['accountID']);
                    session()->set('fullname', $user_info['Fullname']);
                    session()->set('role',$user_info['Role']);
                    return redirect()->to('/dashboard');
                }
            }
        }
    }

    public function logout()
    {
        if(session()->has('loggedUser'))
        {
            session()->remove('loggedUser');
            session()->destroy();
            return redirect()->to('/?access=out')->with('fail', 'You are logged out!');
        }
    }
}
