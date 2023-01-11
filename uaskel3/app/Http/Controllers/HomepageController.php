<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Homepage' );
        return view('homepage.index', $data);
    }

    public function category()
    {
        $data = array('title' => 'category' );
        return view('homepage.category', $data);
    }

    public function produk()
    {
        $data = array('title' => 'produk' );
        return view('homepage.produk', $data);
    }

    public function client()
    {
        $data = array('title' => 'client' );
        return view('homepage.client', $data);
    }

    public function contact()
    {
        $data = array('title' => 'contact' );
        return view('homepage.contact', $data);
    }
}
