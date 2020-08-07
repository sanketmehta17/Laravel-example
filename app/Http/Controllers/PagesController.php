<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data=array(
            'title'=>'Welcome to Laravel!'
        );
        return view('pages.index')->with($data);
    }

    public function about()
    {
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }
}
