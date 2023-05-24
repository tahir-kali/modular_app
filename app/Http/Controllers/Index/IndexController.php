<?php

namespace App\Http\Controllers\Index;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
class IndexController extends Controller
{
    public function index(): Renderable
    {

        return view('Index::welcome');
    }
}
