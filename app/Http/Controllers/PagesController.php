<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function __construct(){
    $causes = Cause::all();

    // Sharing is caring
    View::share('causes', $causes);
    }
}
