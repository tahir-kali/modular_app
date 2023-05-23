<?php

namespace Modules\Advertisement\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Advertisement\Entities\Advertisement;

class AdvertisementController extends Controller
{

    public function index(): Renderable
    {
        return view('advertisement');
    }
    public function store(Advertisement $advertisement): bool|string
    {
        return json_encode(["msg"=>"Success!","ad"=>$advertisement]);
    }
}
