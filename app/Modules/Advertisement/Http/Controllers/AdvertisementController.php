<?php

namespace Modules\Advertisement\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdvertisementController extends Controller
{

    public function index(): Renderable
    {
        return view('index');
    }



    public function create(): Renderable
    {
        return view('advertisement::create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('advertisement::show');
    }

    public function edit($id)
    {
        return view('advertisement::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
