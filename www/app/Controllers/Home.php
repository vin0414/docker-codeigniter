<?php

namespace App\Controllers;
use App\Libraries\Hash;
class Home extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

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

    public function branchReport()
    {
        return view('branch-report');
    }

    public function users()
    {
        $accountModel = new \App\Models\accountModel();
        $account = $accountModel->findAll();
        //count all
        $builder = $this->db->table('tblaccount');
        $builder->select('COUNT(accountID)total');
        $total = $builder->get()->getResult();
        $data = ['account'=>$account,'total'=>$total];
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

    public function deactivateAccount()
    {
        $accountModel = new \App\Models\accountModel();
        $val = $this->request->getPost('value');
        $values = ['Status'=>0];
        $accountModel->update($val,$values);
        echo "success";
    }

    public function activateAccount()
    {
        $accountModel = new \App\Models\accountModel();
        $val = $this->request->getPost('value');
        $values = ['Status'=>1];
        $accountModel->update($val,$values);
        echo "success";
    }

    public function reset()
    {
        $accountModel = new \App\Models\accountModel();
        $accountID = $this->request->getPost('accountID');
        $defaultPassword = Hash::make('Mlhuillier1');
        $values = ['Password'=>$defaultPassword];
        $accountModel->update($accountID,$values);
        echo "success";
    }

    public function updateAccount()
    {
        $accountModel = new \App\Models\accountModel();
        $accountID = $this->request->getPost('accountID');
        $email = $this->request->getPost('email');
        $fullname = $this->request->getPost('fullname');
        $designation = $this->request->getPost('designation');
        $role  = $this->request->getPost('role');

        $values = ['EmailAddress'=>$email,'Fullname'=>$fullname,'Designation'=>$designation,'Role'=>$role];
        $accountModel->update($accountID,$values);
        echo "success";
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

    public function searchAccount()
    {
        $text = "%".$this->request->getGet('keyword')."%";
        $builder = $this->db->table('tblaccount');
        $builder->select('*');
        $builder->LIKE('EmailAddress',$text);
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <tr>
                <td>
                    <div class="ms-2">
                        <!--begin::Title-->
                        <a href="<?=site_url('edit-account/')?><?php echo $row->Token ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name"><?php echo $row->EmailAddress ?></a>
                        <!--end::Title-->
                    </div>
                </td>
                <td class="pe-0">
                    <span class="fw-bold ms-3"><?php echo $row->Fullname ?></span>
                </td>
                <td class="pe-0">
                    <span class="fw-bold ms-3"><?php echo $row->Designation ?></span>
                </td>
                <td class="pe-0">
                    <span class="fw-bold ms-3"><?php echo $row->Role ?></span>
                </td>
                <td class="pe-0">
                    <?php if($row->Status==1){ ?>
                        <div class="badge badge-light-success">Active</div>
                    <?php }else{ ?>
                        <div class="badge badge-light-danger">Inactive</div>
                    <?php } ?>
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions <i class="fa-solid fa-caret-down fs-5 ms-1"></i>                   
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="<?=site_url('edit-account/')?><?php echo $row->Token ?>" class="menu-link px-3">
                                Edit
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                </td>
            </tr>
            <?php
        }
    }

    public function zone()
    {
        return view('new-zone');
    }

    public function region()
    {
        return view('new-region');
    }

    public function branch()
    {
        return view('new-branch');
    }

}
