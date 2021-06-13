<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function titleFix($title){
        $title = preg_replace('/\s+/', '_', $title);
        return $title;
    }
}
