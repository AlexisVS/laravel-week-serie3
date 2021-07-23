<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index () {
        $home = Home::all();
        return view('back.backOffice', compact("home"));
    }
}
