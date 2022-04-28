<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthObec implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        //if obec not logged in
        if(!session()->get('logged_in') || session()->get('role') != 'Obec') {
            return redirect()->to(base_url('/login'))->with('fail', 'คุณต้องเข้าสู่ระบบก่อน');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        //Do somthing

    }
}