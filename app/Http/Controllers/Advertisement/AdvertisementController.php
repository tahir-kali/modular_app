<?php

namespace App\Http\Controllers\Advertisement;
use App\Modules\Advertisement_Package\src\Actions\GetAction;
use App\Modules\Advertisement_Package\src\Actions\GetOneAdvertisementAction;
use App\Modules\Advertisement_Package\src\Actions\StoreAction;
use App\Modules\Advertisement_Package\src\Actions\UpdateAction;
use App\Modules\Advertisement_Package\src\Models\Advertisement;
use App\Modules\StoreRequest;
use App\Modules\UpdateRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdvertisementController extends Controller
{
    public function index(GetAction $action): Renderable
    {
        $ads = $action->execute();
        return view('Advertisement_Package::list',compact('ads'));
    }
    public function store(StoreRequest $request, StoreAction $action): JsonResponse
    {
        $action->execute($request->getParams());
        return response()->json(["msg"=>"Succcess!"]);
    }
    public function show(GetAction $action){
        return $action->execute();
    }
    public function edit(Advertisement $advertisement,GetOneAdvertisementAction $action)
    {

        $ad = $action->execute($advertisement);
        return view('Advertisement_Package::edit',compact('ad'));
    }
    public function update(Advertisement $advertisement,UpdateRequest $request,UpdateAction $action):JsonResponse|Redirector
    {
        $action->execute($advertisement,$request->getParams());
       if($request->wantsJson()){
           return response()->json(["msg"=>"Succcess!"]);
       }
        return redirect(route('advertisement.index', compact('advertisement')))
            ->with('success', __('Success'));
    }

}
