<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public static function about() {

        $page = Page::findBySlug('about');
        return view('pages.about', ['page'=>$page]);
    }

    public static function contact() {

        $page = Page::findBySlug('contact');
        return view('pages.contact', ['page'=>$page]);
    }

}
