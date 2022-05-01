<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class AdminController extends Controller {

    public function index() {
        echo view('templates/admin/header');
        echo view('templates/admin/navbar');
        echo view('templates/admin/sidebar');
        echo view('Admin/index');
        echo view('templates/admin/footer');
    }

    public function listUsers() {
        $userModel = new UsersModel;
        $data['users'] = $userModel->orderBy('ID', 'DESC')->findAll();
        return view('templates/admin/header').view('templates/admin/navbar').view('templates/admin/sidebar').view('Admin/listUsers', $data).view('templates/admin/footer');
    }

    public function createUser() {
        helper(['form']);
        return view('templates/admin/header').view('templates/admin/navbar').view('templates/admin/sidebar').view('admin/createUser').view('templates/admin/footer');
    }

    public function storeUser() {
        helper(['form']);
        $rules = [
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Role ไม่สามารถเว้นว่างได้'
                ]
            ],
            'prefix' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'คำนำหน้า ไม่สามารถเว้นว่างได้'
                ]
            ],
            'firstName' => [
                'rules' => 'required|min_length[2]|max_length[50]',
                'errors' => [
                    'required' => 'ชื่อ ไม่สามารถเว้นว่างได้',
                    'min_length' => 'ชื่อ อย่างน้อย 2 ตัวอักษร',
                    'max_length' => 'ชื่อ ใส่มากสุดได้ 50 ตัวอักษร',
                ]
            ],
            'lastName' => [
                'rules' => 'required|min_length[2]|max_length[50]',
                'errors' => [
                    'required' => 'นามสกุล ไม่สามารถเว้นว่างได้',
                    'min_length' => 'นามสกุล อย่างน้อย 2 ตัวอักษร',
                    'max_length' => 'นามสกุล ใส่มากสุดได้ 50 ตัวอักษร'
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'อีเมล ไม่สามารถเว้นว่างได้',
                    'min_length' => 'อีเมล อย่างน้อย 6 ตัวอักษร',
                    'max_length' => 'อีเมล ใส่มากสุดได้ 50 ตัวอักษร',
                    'valid_email' => 'อีเมล รูปแบบไม่ถูกต้อง ไม่สามารถใช้งานได้',
                    'is_unique' => 'อีเมล นี้มีในระบบแล้ว'
                ]
            ],
            'phone' => [
                'rules' => 'required|min_length[10]|max_length[20]',
                'errors' => [
                    'required' => 'หมายเลขโทรศัพท์ ไม่สามารถเว้นว่างได้',
                    'min_length' => 'หมายเลขโทรศัพท์ ให้ใส่ 10 หลัก',
                    'max_length' => 'หมายเลขโทรศัพท์ เกินจำนวน'
                ]
            ],
            'idCard' => [
                'rules' => 'required|min_length[13]|max_length[20]',
                'errors' => [
                    'required' => 'เลขบัตร ปชช. ไม่สามารถเว้นว่างได้',
                    'min_length' => 'เลขบัตร ปชช. ใส่ 13 หลัก',
                    'max_length' => 'เลขบัตร ปชช. เกินจำนวน'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[50]',
                'errors' => [
                    'required' => 'รหัสผ่าน ไม่สามารถเว้นว่างได้',
                    'min_length' => 'รหัสผ่าน อย่างน้อย 6 ตัวอักษร',
                    'max_length' => 'รหัสผ่าน ใส่มากสุดได้ 200 ตัวอักษร'
                ]
            ]
        ];
        
        if($this->validate($rules)) {
            $model = new UsersModel();
            $data = [
                'role' => $this->request->getVar('role'),
                'prefix' => $this->request->getVar('prefix'),
                'firstName' => $this->request->getVar('firstName'),
                'lastName' => $this->request->getVar('lastName'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'idCard' => $this->request->getVar('idCard'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'status' => $this->request->getVar('status')
            ];
            $model->save($data);
            return redirect()->to(base_url('/Admin/listUsers'))->with('msg', 'เพิ่มผู้ใช้สำเร็จ');
        } else {
            $data['validation'] = $this->validator;
            echo view('templates/admin/header', $data);
            echo view('templates/admin/navbar', $data);
            echo view('templates/admin/sidebar', $data);
            echo view('admin/createUser', $data);
            echo view('templates/admin/footer', $data);
        }
        
    }

    public function singleUser($id = null) {
        $userModel = new UsersModel;
        $data['user_obj'] = $userModel->where('ID', $id)->first();
        //return view('/admin/editUser', $data);
        echo view('templates/admin/header', $data);
        echo view('templates/admin/navbar', $data);
        echo view('templates/admin/sidebar', $data);
        echo view('/Admin/editUser', $data);
        echo view('templates/admin/footer', $data);
    }

    public function updateUser() {
        $userModel = new UsersModel;
        $id = $this->request->getVar('id');
        $data = [
            'prefix' => $this->request->getVar('prefix'),
            'firstName' => $this->request->getVar('firstName'),
            'lastName' => $this->request->getVar('lastName'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'idCard' => $this->request->getVar('idCard'),
            'role' => $this->request->getVar('role'),
            'status' => $this->request->getVar('status')
        ];
        $userModel->update($id, $data);
        return redirect()->to(base_url('/Admin/listUsers'))->with('msg', 'แก้ไขข้อมูลผู้ใช้สำเร็จ');
    }

    public function deleteUser($id = null) {
        $userModel = new UsersModel;
        $data['user'] = $userModel->where('ID', $id)->delete($id);
        return redirect()->to(base_url('/Admin/listUsers'))->with('msg', 'ลบข้อมูลผู้ใช้สำเร็จ');
    }

    public function profile() {
        helper(['form']);
        $userModel = new UsersModel;
        $data['profile'] = $userModel->where('ID', session()->get('id'))->first();
        echo view('templates/admin/header', $data);
        echo view('templates/admin/navbar', $data);
        echo view('templates/admin/sidebar', $data);
        echo view('/Admin/profile', $data);
        echo view('templates/admin/footer', $data);
    }

    public function updateProfile() {
        helper(['form']);
        $rules = [
            'prefix' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'คำนำหน้า ไม่สามารถเว้นว่างได้'
                ]
            ],
            'firstName' => [
                'rules' => 'required|min_length[2]|max_length[50]',
                'errors' => [
                    'required' => 'ชื่อ ไม่สามารถเว้นว่างได้',
                    'min_length' => 'ชื่อ อย่างน้อย 2 ตัวอักษร',
                    'max_length' => 'ชื่อ ใส่มากสุดได้ 50 ตัวอักษร',
                ]
            ],
            'lastName' => [
                'rules' => 'required|min_length[2]|max_length[50]',
                'errors' => [
                    'required' => 'นามสกุล ไม่สามารถเว้นว่างได้',
                    'min_length' => 'นามสกุล อย่างน้อย 2 ตัวอักษร',
                    'max_length' => 'นามสกุล ใส่มากสุดได้ 50 ตัวอักษร'
                ]
            ],
            'phone' => [
                'rules' => 'required|min_length[10]|max_length[20]',
                'errors' => [
                    'required' => 'หมายเลขโทรศัพท์ ไม่สามารถเว้นว่างได้',
                    'min_length' => 'หมายเลขโทรศัพท์ ให้ใส่ 10 หลัก',
                    'max_length' => 'หมายเลขโทรศัพท์ เกินจำนวน'
                ]
            ],
            'idCard' => [
                'rules' => 'required|min_length[13]|max_length[20]',
                'errors' => [
                    'required' => 'เลขบัตร ปชช. ไม่สามารถเว้นว่างได้',
                    'min_length' => 'เลขบัตร ปชช. ใส่ 13 หลัก',
                    'max_length' => 'เลขบัตร ปชช. เกินจำนวน'
                ]
            ]
        ];
        
        if($this->validate($rules)) {
            $userModel = new UsersModel;
            $id = session()->get('id');
            $data = [
                'prefix' => $this->request->getVar('prefix'),
                'firstName' => $this->request->getVar('firstName'),
                'lastName' => $this->request->getVar('lastName'),
                'phone' => $this->request->getVar('phone'),
                'idCard' => $this->request->getVar('idCard')
            ];
            $userModel->update($id, $data);
            return redirect()->to(base_url('/admin/profile'))->with('msg', 'แก้ไขข้อมูลส่วนตัวสำเร็จ');
        } else {
            helper(['form']);
            $userModel = new UsersModel;
            $data['profile'] = $userModel->where('ID', session()->get('id'))->first();
            $data['validation'] = $this->validator;
            echo view('templates/admin/header', $data);
            echo view('templates/admin/navbar', $data);
            echo view('templates/admin/sidebar', $data);
            echo view('Admin/profile', $data);
            echo view('templates/admin/footer', $data);
        }
    }

    public function changePassword() {
        helper('form');
        echo view('templates/admin/header');
        echo view('templates/admin/navbar');
        echo view('templates/admin/sidebar');
        echo view('Admin/changePassword');
        echo view('templates/admin/footer');
    }

    public function updatePassword() {
        helper('form');
        $rules = [
            'oldPassword' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'รหัสผ่านปัจจุบัน ไม่สามารถเว้นว่างได้'
                ]
            ],
            'newPassword' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'รหัสผ่านใหม่ ไม่สามารถเว้นว่างได้',
                    'min_length' => 'รหัสผ่านใหม่ อย่างน้อย 6 ตัวอักษร'
                ]
            ],
            'confPassword' => [
                'rules' => 'required|matches[newPassword]',
                'errors' => [
                    'required' => 'ยืนยันรหัสผ่าน ไม่สามารถเว้นว่างได้',
                    'matches' => 'ยืนยันรหัสผ่านไม่ตรงกัน'
                ]
            ]
        ];

        if($this->validate($rules)) {
            $userModel = new UsersModel;
            $id = session()->get('id');
            $oldPassword = $this->request->getVar('oldPassword');
            $getData = $userModel->where('ID', $id)->first();
            if($getData) {
                $pass = $getData['password'];
                $verify_password = password_verify($oldPassword, $pass);
                if($verify_password) {
                    $newPassword = $this->request->getVar('newPassword');
                    $data = [
                        'password' => password_hash($newPassword, PASSWORD_DEFAULT)
                    ];
                    $userModel->update($id, $data);
                    return redirect()->to(base_url('/admin/changePassword'))->with('msg-success', 'เปลี่ยนรหัสผ่านสำเร็จ');
                } else {
                    return redirect()->to(base_url('/admin/changePassword'))->with('msg-error', 'รหัสผ่านปัจจุบันไม่ถูกต้อง');
                }
            }
        } else {
            helper('form');
            $data['validation'] = $this->validator;
            echo view('templates/admin/header', $data);
            echo view('templates/admin/navbar', $data);
            echo view('templates/admin/sidebar', $data);
            echo view('Admin/changePassword', $data);
            echo view('templates/admin/footer', $data);
        }
        

    }
}