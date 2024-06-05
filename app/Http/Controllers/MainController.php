<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Exception;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
        
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
        try {
            $m = new NewsCategory();
            $m->name = 'Gossip';
            $m->photo = 'no_image.jpg';
            $m->details = 'News details about gossip.';
            $m->save();
            echo 'Category saved successfully!';
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

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
        $cats = NewsCategory::whereIn('id', [1, 3, 5])->get();

        echo '<h2>WHERE IN</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        //order by
        $cats = NewsCategory::where([])
            ->orderBy('id', 'desc')
            ->get();
        echo '<h2>ORDER BY</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        //Limit
        $cats = NewsCategory::where([])
            ->limit(4)
            ->get();
        echo '<h2>LIMIT</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        //find
        $cat = NewsCategory::find(9);
        echo '<h2>FIND</h2>';
        if ($cat != null) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        //sum
        $sum = NewsCategory::where([])
            ->sum('id');
        echo '<h2>SUM</h2>';
        echo "$sum <br>";

        //Average
        $avg = NewsCategory::where([])
            ->avg('id');
        echo '<h2>AVERAGE</h2>';
        echo "$avg <br>";

        //quary
        $cats = NewsCategory::where('id', '<', 4)
            ->get();
        echo '<h2>QUARY SCOPE</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        //like
        $cats = NewsCategory::where('name', 'like', '%i%')
            ->get();
        echo '<h2>LIKE</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        //append
        $cats = NewsCategory::where([])
            ->get();
        echo '<h2>APPEND</h2>';
        foreach ($cats as $key => $cat) {
            echo "{$cat->id}.{$cat->short_name}<br>";
        }

        

        //ALL
        $categories = NewsCategory::all();
        echo '<h2>ALL</h2>';
        foreach ($categories as $key => $cat) {
            echo "{$cat->id}.{$cat->name}<br>";
        }

        die('');
    }
}
