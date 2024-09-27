<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use function Termwind\render;

class FrontendController extends Controller
{
    public function index(){
        return Inertia::render('Frontend/Home');
    }

    public function about(){
        return Inertia::render('Frontend/About',[
            'title'=>'About Us',
        ]);
    }

    public function contact(){
        return Inertia::render('Frontend/Contact');
    }
}
