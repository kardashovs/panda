<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {

        return view('welcome');
    }

    public function parent($parent)
    {
        $page = Page::where('slug', $parent)->firstOrFail();
        return view('front.page.'.$parent, ['page' => $page]);
    }

    public function child($parent, $child)
    {
        $page = Page::where('slug', $child)->firstOrFail();
        return view('front.page.'.$child, ['page' => $page]);
    }
}