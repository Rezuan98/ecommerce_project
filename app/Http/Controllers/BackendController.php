<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function adminDashboard(){


        return view('backend.master.index');
    }
}
