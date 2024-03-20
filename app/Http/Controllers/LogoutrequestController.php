<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\view;

class LogoutrequestController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('logoutrequest');
    }
    
    public function index(){

return view("welcome");

    }
}
