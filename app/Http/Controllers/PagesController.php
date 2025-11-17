<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use App\Models\MarketingPage;
use App\Models\ProductsPage;
use App\Models\SuperPowerPage;
use App\Models\Validation;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $main=MainPage::all();
        $super=SuperPowerPage::all();
        $validation=Validation::first();
        $porducts=ProductsPage::first();
        $marketing= MarketingPage::all();
        return view('pages.index',compact('main','super','validation','porducts','marketing'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function layout(){
        return view('pages.layout');
    }
}
