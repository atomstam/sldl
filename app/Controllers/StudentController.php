<?php namespace App\Controllers;

use CodeIgniter\Controller;

class StudentController extends Controller {

    public function index() {
        $data = [];
        echo view('templates/frontend/header', $data);
        echo view('Student/index', $data);
        echo view('templates/frontend/footer', $data);
    }
}