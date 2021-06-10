<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UsersAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('role_id') == '') {
            session()->setFlashdata('larangan', 'Untuk mengakses halaman ini silahkan Login terlebih dahulu');
            return redirect()->back();
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('role_id') == '2') {
            return redirect()->to(base_url('/home'));
        }
    }
}
