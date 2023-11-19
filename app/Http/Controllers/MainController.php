<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $company;
    public function __construct(){
        $this->company = [];
    }

    public function index(){
        return view('front.index');
    }
}
