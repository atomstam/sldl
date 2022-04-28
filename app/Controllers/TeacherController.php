<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\CoursesModel;

class TeacherController extends Controller {

    public function index() {
        helper('form');
        $usersModel = new UsersModel;
        $data['user'] = $usersModel->where('ID', session()->get('id'))->first();
        echo view('templates/frontend/header', $data);
        echo view('Teacher/index', $data);
        echo view('templates/frontend/footer', $data);
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
            return redirect()->to(base_url('/teacher'))->with('msg', 'ปรับปรุงข้อมูลส่วนตัวสำเร็จ');
        } else {
            helper(['form']);
            $userModel = new UsersModel;
            $data['validation'] = $this->validator;
            $data['user'] = $userModel->where('ID', session()->get('id'))->first();
            echo view('templates/frontend/header', $data);
            echo view('Teacher/index', $data);
            echo view('templates/frontend/footer', $data);
        }
    }

    public function manageMyCourses() {
        $coursesModel = new CoursesModel;
        $data['courses'] = $coursesModel->getCourses(session()->get('id'));
        echo view('templates/frontend/header', $data);
        echo view('Teacher/manageMyCourses', $data);
        echo view('templates/frontend/footer', $data);
    }
} 