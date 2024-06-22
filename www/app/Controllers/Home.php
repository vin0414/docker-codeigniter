<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function report()
    {
        return view('reports');
    }

    public function users()
    {
        $accountModel = new \App\Models\accountModel();
        $account = $accountModel->findAll();
        $data = ['account'=>$account];
        return view('list-users',$data);
    }

    public function newAccount()
    {
        return view('new-account');
    }
}
