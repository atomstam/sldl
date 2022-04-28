<?php namespace App\Controllers;

use CodeIgniter\Controller;

class PopulationController extends Controller {

    public function index() {
        $data = [];
        echo view('templates/frontend/header', $data);
        echo view('Teacher/index', $data);
        echo view('templates/frontend/footer', $data);
    }
}