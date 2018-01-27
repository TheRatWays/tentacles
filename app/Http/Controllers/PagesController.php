<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = array(
            'videos' =>
            [
                'http://urlone.com',
                'http://urltwo.com',
                'http://urlthree.com'
            ]
        );
        return view('pages.index')->with($data);
    }

    public function categories()
    {
        return view('pages.categories');
    }
}
