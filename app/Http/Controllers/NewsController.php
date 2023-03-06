<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resource\view;

class NewsController extends Controller
{
    //
    public function news($id = 0)
    {
        $total = 2;
        if ($id == 0) {
            return view('news.news');
        } else if ($id >= $total) {
            return view('news.newsOut');
        }
        for ($i = 0; $i <= $total; $i++) {
            if ($i == $id) {
                return view('news.news' . $id);
            }
        }
    }
}
