<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class indexcontroller extends Controller
{
    public function index() {
        return view('index');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function video(){
        return view('pages.video');
    }

    public function story() {
        $post = DB::table('story')->get();
        return view('pages.story', compact('post'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
