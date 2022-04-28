<?php namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class Login extends Controller {
    public function index() {
        helper(['form']);
        $data = [];
        echo view('templates/frontend/header', $data);
        echo view('frontend/login', $data);
        echo view('templates/frontend/footer', $data);
    }

    public function auth() {
        $session = session(); 
        $model = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where(['email' => $email, 'status' => '1'])->first();
        if($data) {
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if($verify_password) {
                $ses_data = [
                    'id' => $data['ID'],
                    'firstName' => $data['firstName'],
                    'lastName' => $data['lastName'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'role' => $data['role'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/login'));
            } else {
                $session->setFlashdata('msg', 'รหัสผ่านไม่ถูกต้อง');
                return redirect()->to(base_url('/login'));
            }
        } else {
            $session->setFlashdata('msg', 'อีเมลไม่ถูกต้อง');
            return redirect()->to(base_url('/login'));
        }

    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }
}