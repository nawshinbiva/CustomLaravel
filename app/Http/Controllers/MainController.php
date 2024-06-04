<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
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
        return view('home', [
            'name' => $name,
            'gender' => $gender,
            'colors' => $colors
        ]);
    }

    public function about_us()
    {
        //
        return view('others\about-us');
    }

    public function contact()
    {
        //
        return view('others\contact');
    }

    public function model_saving()
    {

        $m = new NewsCategory();
        $m->name = 'Education';
        $m->photo = 'no_image.jpg';
        $m->details = 'News details about Education.';
        //$m->save();

        die('Done Processing!');
    }

    public function model_quary()
    {
        $categories= NewsCategory::all();
        dd($categories);

        die('Quary Done!');
    }

}
