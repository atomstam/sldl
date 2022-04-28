<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller {

    public function index() {
        return view('frontend/index');
        
    }

    public function view($page = 'home') {
        if (!is_file(APPPATH.'/Views/'.$page.'.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);
        echo view('templates/frontend/header', $data);
        echo view('frontend/'.$page, $data);
        echo view('templates/frontend/footer', $data);

    }

}