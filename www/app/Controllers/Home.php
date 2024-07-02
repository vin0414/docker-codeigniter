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
        $username = $this->request->getPost('username');
        $fullname = $this->request->getPost('fullname');
        $designation = $this->request->getPost('designation');
        $role  = $this->request->getPost('role');

        $values = ['Username'=>$username,'Fullname'=>$fullname,'Designation'=>$designation,'Role'=>$role];
        $accountModel->update($accountID,$values);
        echo "success";
    }

    public function saveAccount()
    {
        $accountModel = new \App\Models\accountModel();
        $token = $this->request->getPost('csrf_test_name');
        $username = $this->request->getPost('username');
        $fullname = $this->request->getPost('fullname');
        $designation = $this->request->getPost('designation');
        $role  = $this->request->getPost('role');
        $status = 1;
        $defaultPassword = Hash::make('Mlhuillier1');

        $validation = $this->validate([
            'username'=>'is_unique[tblaccount.Username]'
        ]);

        if(!$validation)
        {
            echo "Email already registered. Please try again";
        }
        else
        {
            $values = ['Username'=>$username,'Password'=>$defaultPassword,'Fullname'=>$fullname,'Designation'=>$designation,'Status'=>$status,'Role'=>$role,'Token'=>$token];
            $accountModel->save($values);
            echo "success";
        }
    }

    public function searchAccount()
    {
        $text = "%".$this->request->getGet('keyword')."%";
        $builder = $this->db->table('tblaccount');
        $builder->select('*');
        $builder->LIKE('Fullname',$text);
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <tr>
                <td>
                    <div class="ms-2">
                        <!--begin::Title-->
                        <a href="<?=site_url('edit-account/')?><?php echo $row->Token ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name"><?php echo $row->Username ?></a>
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
                    <a href="<?=site_url('edit-account/')?><?php echo $row->Token ?>" class="btn btn-light-primary btn-sm">
                        <i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit
                    </a>
                </td>
            </tr>
            <?php
        }
    }

    public function zone()
    {
        return view('new-zone');
    }

    public function saveZone()
    {
        $zoneModel = new \App\Models\zoneModel();
        $val = $this->request->getPost('zone_name');
        if(empty($val))
        {
            echo "Please enter new name";
        }
        else
        {
            $validation = $this->validate([
                'zone_name'=>'is_unique[tblzone.Name]'
            ]);

            if(!$validation)
            {
                echo $val. " already exist. Please try again";
            }
            else
            {
                $values = ['Name'=>$val,'DateCreated'=>date('Y-m-d')];
                $zoneModel->save($values);
                echo "success";
            }
        }
    }

    public function deleteZone()
    {
        $val = $this->request->getPost('value');
        $builder = $this->db->table('tblzone');
        $builder->WHERE('zoneID',$val);
        $builder->delete();
        echo "success";
    }

    //zone,region, branch functions
    public function fetchZones()
    {
        $builder = $this->db->table('tblzone');
        $builder->select('zoneID,Name,DateCreated');
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->Name ?></td>
                <td><?php echo $row->DateCreated ?></td>
                <td>
                    <button type="button" class="btn btn-light-primary btn-sm delete" value="<?php echo $row->zoneID?>">
                        <i class="fa-solid fa-trash"></i>&nbsp;Delete
                    </button>
                </td>
            </tr>
            <?php
        }
    }

    public function searchZones()
    {
        $val = "%".$this->request->getGet('keyword')."%";
        $builder = $this->db->table('tblzone');
        $builder->select('zoneID,Name,DateCreated');
        $builder->LIKE('Name',$val);
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->Name ?></td>
                <td><?php echo $row->DateCreated ?></td>
                <td>
                    <button type="button" class="btn btn-light-primary btn-sm delete" value="<?php echo $row->zoneID?>">
                        <i class="fa-solid fa-trash"></i>&nbsp;Delete
                    </button>
                </td>
            </tr>
            <?php
        }
    }

    
    public function region()
    {
        $zoneModel = new \App\Models\zoneModel();
        $zone = $zoneModel->findAll();
        $data = ['zone'=>$zone];
        return view('new-region',$data);
    }

    public function fetchRegions()
    {
        $builder = $this->db->table('tblregion a');
        $builder->select('a.RegionName,a.DateCreated,a.regionID,b.Name');
        $builder->join('tblzone b','b.zoneID=a.zoneID','LEFT');
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->Name ?></td>
                <td><?php echo $row->RegionName ?></td>
                <td><?php echo $row->DateCreated ?></td>
                <td>
                    <button type="button" class="btn btn-light-primary btn-sm delete" value="<?php echo $row->regionID?>">
                        <i class="fa-solid fa-trash"></i>&nbsp;Delete
                    </button>
                </td>
            </tr>
            <?php
        }
    }

    public function searchRegions()
    {
        $val = "%".$this->request->getGet('keyword')."%";
        $builder = $this->db->table('tblregion a');
        $builder->select('a.RegionName,a.DateCreated,a.regionID,b.Name');
        $builder->join('tblzone b','b.zoneID=a.zoneID','LEFT');
        $builder->LIKE('a.RegionName',$val);
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->Name ?></td>
                <td><?php echo $row->RegionName ?></td>
                <td><?php echo $row->DateCreated ?></td>
                <td>
                    <button type="button" class="btn btn-light-primary btn-sm delete" value="<?php echo $row->regionID?>">
                        <i class="fa-solid fa-trash"></i>&nbsp;Delete
                    </button>
                </td>
            </tr>
            <?php
        }
    }

    public function saveRegion()
    {
        $regionModel = new \App\Models\regionModel();
        $zone = $this->request->getPost('zone');
        $regionName = $this->request->getPost('region_name');
        if(empty($zone)||empty($regionName))
        {
            echo "Please fill in the form to continue";
        }
        else
        {
            $validation = $this->validate([
                'region_name'=>'is_unique[tblregion.RegionName]'
            ]);

            if(!$validation)
            {
                echo $regionName. " already exist. Please try again";
            }
            else
            {
                $values = ['zoneID'=>$zone,'RegionName'=>$regionName,'DateCreated'=>date('Y-m-d')];
                $regionModel->save($values);
                echo "success";
            }
        }
    }

    public function deleteRegion()
    {
        $val = $this->request->getPost('value');
        $builder = $this->db->table('tblregion');
        $builder->WHERE('regionID',$val);
        $builder->delete();
        echo "success";
    }

    public function listRegions()
    {
        $val = $this->request->getGet('value');
        $builder = $this->db->table('tblregion');
        $builder->select('RegionName,regionID');
        $builder->WHERE('zoneID',$val);
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <option value="<?php echo $row->regionID ?>"><?php echo $row->RegionName ?></option>
            <?php
        }
    }
    
    public function branch()
    {
        $zoneModel = new \App\Models\zoneModel();
        $zone = $zoneModel->findAll();
        $data = ['zone'=>$zone];
        return view('new-branch',$data);
    }

    public function editBranch($id)
    {
        $branchModel = new \App\Models\branchModel();
        $branch = $branchModel->WHERE('branchID',$id)->first();
        //zone
        $zoneModel = new \App\Models\zoneModel();
        $zone = $zoneModel->WHERE('zoneID',$branch['zoneID'])->first();
        //region
        $regionModel = new \App\Models\regionModel();
        $region = $regionModel->WHERE('regionID',$branch['regionID'])->first();
        $data = ['branch'=>$branch,'zone'=>$zone,'region'=>$region];
        return view('edit-branch',$data);
    }

    public function updateBranch()
    {
        $branchModel = new \App\Models\branchModel();
        $id = $this->request->getPost('branchID');
        $zone = $this->request->getPost('zone');
        $region = $this->request->getPost('region');
        $branchName = $this->request->getPost('branchName');
        $branchType = $this->request->getPost('branchType');
        $code = $this->request->getPost('code');
        $status = $this->request->getPost('status');

        $values = [
            'regionID'=>$region,'zoneID'=>$zone,'BranchName'=>$branchName,
            'BranchType'=>$branchType,'BranchCode'=>$code,'Status'=>$status
            ];
        $branchModel->update($id,$values);
        echo "success";
    }

    public function fetchBranches()
    {
        $builder = $this->db->table('tblbranches a');
        $builder->select('a.*,b.RegionName,c.Name');
        $builder->join('tblregion b','b.regionID=a.regionID','LEFT');
        $builder->join('tblzone c','c.zoneID=a.zoneID','LEFT');
        $builder->groupBy('a.branchID')
        ->orderBy('a.BranchCode','ASC')
        ->orderBy('b.RegionName','ASC');
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->Name ?></td>
                <td><?php echo $row->RegionName ?></td>
                <td><?php echo $row->BranchName ?></td>
                <td><?php echo $row->BranchCode ?></td>
                <td><?php echo $row->BranchType ?></td>
                <td>
                    <?php if($row->Status==1){ ?>
                        <span class="badge badge-light-success">Active</span>
                    <?php }else{ ?>
                        <span class="badge badge-light-danger">Inactive</span>
                    <?php } ?>
                </td>
                <td>
                    <a href="<?=site_url('edit-branch/')?><?php echo $row->branchID ?>" class="btn btn-light-primary btn-sm">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>&nbsp;
                    <button type="button" class="btn btn-light-primary btn-sm delete" value="<?php echo $row->branchID?>">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
            <?php
        }
    }

    public function searchBranches()
    {
        $val = "%".$this->request->getGet('keyword')."%";
        $builder = $this->db->table('tblbranches a');
        $builder->select('a.*,b.RegionName,c.Name');
        $builder->join('tblregion b','b.regionID=a.regionID','LEFT');
        $builder->join('tblzone c','c.zoneID=a.zoneID','LEFT');
        $builder->LIKE('a.BranchName',$val);
        $builder->groupBy('a.branchID')
        ->orderBy('a.BranchCode','ASC')
        ->orderBy('b.RegionName','ASC');
        $data = $builder->get();
        foreach($data->getResult() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->Name ?></td>
                <td><?php echo $row->RegionName ?></td>
                <td><?php echo $row->BranchName ?></td>
                <td><?php echo $row->BranchCode ?></td>
                <td><?php echo $row->BranchType ?></td>
                <td>
                    <?php if($row->Status==1){ ?>
                        <span class="badge badge-light-success">Active</span>
                    <?php }else{ ?>
                        <span class="badge badge-light-danger">Inactive</span>
                    <?php } ?>
                </td>
                <td>
                    <a href="<?=site_url('edit-branch/')?><?php echo $row->branchID ?>" class="btn btn-light-primary btn-sm">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>&nbsp;
                    <button type="button" class="btn btn-light-primary btn-sm delete" value="<?php echo $row->branchID?>">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
            <?php
        }
    }

    public function saveBranch()
    {
        $branchModel = new \App\Models\branchModel();
        $zone = $this->request->getPost('zone');
        $region = $this->request->getPost('region');
        $branchName = $this->request->getPost('branch_name');
        $branchType = $this->request->getPost('branchType');
        $code = $this->request->getPost('code');
        if(empty($zone)||empty($region)||empty($branchName)||empty($branchType)||empty($code))
        {
            echo "Please fill in the form";
        }
        else
        {
            //validate if exist per region
            $branch = $branchModel->WHERE('regionID',$region)->WHERE('BranchCode',$code)->first();
            if(!empty($branch['BranchName']))
            {
                echo $branchName. " already added. Please try again";
            }
            else
            {
                $values = [
                    'regionID'=>$region,'zoneID'=>$zone,'BranchName'=>$branchName,
                    'BranchType'=>$branchType,'BranchCode'=>$code,'Status'=>1
                    ];
                $branchModel->save($values);
                echo "success";
            }
        }
    }

    public function deleteBranch()
    {
        $val = $this->request->getPost('value');
        $builder = $this->db->table('tblbranches');
        $builder->WHERE('branchID',$val);
        $builder->delete();
        echo "success";
    }

    public function uploadFile()
    {
        return view('upload-file');
    }
}
