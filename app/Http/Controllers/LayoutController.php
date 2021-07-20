<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function create(){
        return view('Event/form');
    }
    public function list(){
        return view('Event/list');
    }
    public function masterLayout(){
        return view('layout/master-layout');
    }

}
