<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        //
        $name = 'Nawshin Nasir';
        $gender = 'Female';
        $colors = [
            'Black',
            'White',
            'Yellow',
            'Red',
            'Blue',
            'Green',
            'Orange',
        ];
        return view('home',[
            'name' => $name,
            'gender' => $gender,
            'colors' => $colors
        ]);
    }

    public function about_us(){
        //
        return view('others\about-us');
    }
    public function contact(){
        //
        return view('others\contact');
    }

}
