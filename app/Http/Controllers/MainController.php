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

        //where
        $cats = NewsCategory::where([
            'name' => 'local',
            'id' => 7
        ])->get();

        echo '<h2>WHERE</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        //Orwhere
        $cats = NewsCategory::where([
            'name' => 'local'

        ])
            ->orWhere([
                'id' => 5
            ])->get();

        echo '<h2>OR WHERE</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }


        //Single where
        $cats = NewsCategory::where('name', 'local')->get();

        echo '<h2>SINGLE WHERE</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }


        //where in
        $cats = NewsCategory::whereIn('id',[1,3,5])->get();

        echo '<h2>WHERE IN</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        //order by
        $cats = NewsCategory::where([])
        ->orderBy('id','desc')
        ->get();
        echo '<h2>ORDER BY</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }




        $categories = NewsCategory::all();
        echo '<h2>ALL</h2>';
        foreach ($categories as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        die('');
    }
}
