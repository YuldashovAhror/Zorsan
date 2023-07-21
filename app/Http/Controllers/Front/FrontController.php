<?php

namespace App\Http\Controllers\Front;

use App\Models\Arxitektura;
use App\Models\Block;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Presentation;
use App\Models\ProductShow;
use App\Models\SecondSlider;

class FrontController
{
    public function index()
    {
        if (session()->get('locale') == '') {
            session()->put('locale', 'ru');
            app()->setLocale('ru');
        } else {
            app()->setLocale(session()->get('locale'));
        }
        $lang = session()->get('locale');
        $block = Block::find(1);
        $p = Presentation::find(1);
        $secondslider = SecondSlider::find(1);
        $arxitektura = Arxitektura::find(1);
        $productshows = ProductShow::orderBy('id', 'desc')->get();
        $galleries = Gallery::orderBy('id', 'desc')->get();
        $categories = Category::with('products')->orderBy('id', 'desc')->get();
        return view('front.welcome', [
            'block'=>$block,
            'lang'=>$lang,
            'secondslider'=>$secondslider,
            'productshows'=>$productshows,
            'arxitektura'=>$arxitektura,
            'galleries'=>$galleries,
            'categories'=>$categories,
            'p'=>$p,
        ]);
    }
}
