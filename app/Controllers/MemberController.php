<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MemberModel; 
class MemberController extends BaseController
{
    public function index()
    {
        $memberModel = new MemberModel();
        $data['members'] = $memberModel->findAll();

        return view('members/index', $data);
    }

    public function create()
    {
        return view('members/create');
    }

    public function store()
    {
        $memberModel = new MemberModel();

        $data = [
            'organization_id' => $this->request->getPost('organization_id'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
        ];

        $memberModel->insert($data);

        return redirect()->to('/members');
    }
}
