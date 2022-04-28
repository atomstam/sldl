<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AlreadyLoggedin implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        //if user not logged in
        if(session()->get('logged_in')) {
            if (session()->get('role') == "Admin") {
				return redirect()->to(base_url('admin'));
			}

			if (session()->get('role') == "Obec") {
				return redirect()->to(base_url('obec'));
			}

			if (session()->get('role') == "Area") {
				return redirect()->to(base_url('area'));
			}

			if (session()->get('role') == "Teacher") {
				return redirect()->to(base_url('teacher'));
			}

			if (session()->get('role') == "Student") {
				return redirect()->to(base_url('student'));
			}

			if (session()->get('role') == "Population") {
				return redirect()->to(base_url('population'));
			}
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        //Do somthing

    }
}