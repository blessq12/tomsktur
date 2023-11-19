<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $company;
    public function __construct(){
        $this->company = Company::first();
    }

    public function index(){
        return view('front.index',[
            'company' => $this->company
        ]);
    }
}
