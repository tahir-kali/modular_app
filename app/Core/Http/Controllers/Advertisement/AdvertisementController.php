<?php

namespace App\Core\Http\Controllers\Advertisement;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Advertisement\Actions\GetAction;
use Modules\Advertisement\Actions\StoreAction;
use Modules\Advertisement\Http\Requests\StoreRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdvertisementController extends Controller
{
    public function index(GetAction $action): Renderable
    {
        $ads = $action->execute();
        return view('advertisement',compact('ads'));
    }
    public function store(StoreRequest $request, StoreAction $action): JsonResponse
    {
        $action->execute($request->getParams());
        return response()->json(["msg"=>"Succcess!"]);
    }
    public function show(GetAction $action){
        return $action->execute();
    }

}
