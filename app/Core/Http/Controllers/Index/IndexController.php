<?php

namespace App\Core\Http\Controllers\Index;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{

    public function index(): Renderable
    {

        return view('Index::index');
    }
}
