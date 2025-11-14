<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return $this->show();
    }
    
    private function show()
    {
        return 'hello world';   
    }
}
