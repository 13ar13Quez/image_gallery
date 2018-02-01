<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $picture = Picture::enable()->get()->toArray();
        $data['count_file'] = count($picture);
        $data['total_size'] = 0;
        foreach ($picture as $value) {
            $data['total_size'] += $value['pic_size'];
        }
        $data['total_size_mb'] = ($data['total_size']/1024)/1024;
        return view('home', $data);
    }
}
