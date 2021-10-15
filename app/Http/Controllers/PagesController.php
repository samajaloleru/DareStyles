<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel !!!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    
    public function blog() {
        $title = 'Service We Offer';
        return view('pages.blog')->with('title', $title);
    }
    public function shop() {
        return view('pages.shop');
    }

    public function about() {
        $data = array(
            'title' => 'About Us',
            'about' => ['We want to know you', 'We want you to know us', 'let know eachother']
        );
        return view('pages.about')->with($data);
    }

    public function contact() {
        $data = array(
            'title' => 'contact Us',
            'contact' => ['We want to know you', 'We want you to know us', 'let know eachother']
        );
        return view('pages.contact')->with($data);
    }
    
}
