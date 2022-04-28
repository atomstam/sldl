<?php namespace App\Controllers;

use CodeIgniter\Controller;

class AreaController extends Controller {

    public function index() {
        echo view('templates/admin/header');
        echo view('templates/admin/navbar');
        echo view('templates/admin/sidebar');
        echo view('Area/index');
        echo view('templates/admin/footer');
    }
}