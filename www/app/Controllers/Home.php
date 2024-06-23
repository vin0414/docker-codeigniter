<?php

namespace App\Controllers;
use App\Libraries\Hash;
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

    public function editAccount($id)
    {
        $accountModel = new \App\Models\accountModel();
        $account = $accountModel->WHERE('Token',$id)->first();
        $data = ['account'=>$account];
        return view('edit-account',$data);
    }

    public function saveAccount()
    {
        $accountModel = new \App\Models\accountModel();
        $token = $this->request->getPost('csrf_test_name');
        $email = $this->request->getPost('email');
        $fullname = $this->request->getPost('fullname');
        $designation = $this->request->getPost('designation');
        $role  = $this->request->getPost('role');
        $status = 1;
        $defaultPassword = Hash::make('Mlhuillier1');

        $validation = $this->validate([
            'email'=>'valid_email|is_unique[tblaccount.EmailAddress]'
        ]);

        if(!$validation)
        {
            echo "Email already registered. Please try again";
        }
        else
        {
            $values = ['EmailAddress'=>$email,'Password'=>$defaultPassword,'Fullname'=>$fullname,'Designation'=>$designation,'Status'=>$status,'Role'=>$role,'Token'=>$token];
            $accountModel->save($values);
            echo "success";
        }
    }

}
