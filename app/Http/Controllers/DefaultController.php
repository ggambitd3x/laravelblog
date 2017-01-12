<?php


namespace App\Http\Controllers;


use App\Models\News;

class DefaultController extends Controller
{

    public function index()
    {
        $news = News::findOrFail(21);

        return view('default.index',
            [
                'news' => $news,
            ]);
    }

}