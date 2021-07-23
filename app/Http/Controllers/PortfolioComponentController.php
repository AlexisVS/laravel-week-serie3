<?php

namespace App\Http\Controllers;

use App\Models\PortfolioComponents;
use Illuminate\Http\Request;

class PortfolioComponentController extends Controller
{
    public function index () {
        $portfolios = PortfolioComponents::all();
        return view('back.pages.portfolio', compact('portfolios'));
    }
}
