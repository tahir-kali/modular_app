<?php

namespace Modules\Index\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{

    public function index(): Renderable
    {
        return view('index');
    }
}
