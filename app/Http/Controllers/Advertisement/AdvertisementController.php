<?php

namespace App\Http\Controllers\Advertisement;

use App\Modules\Advertisement\app\Models\Advertisement;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use App\Modules\Advertisement\app\Actions\GetAction;
use App\Modules\Advertisement\app\Actions\GetOneAdvertisementAction;
use App\Modules\Advertisement\app\Actions\StoreAction;
use App\Modules\Advertisement\app\Actions\UpdateAction;
use App\Modules\Advertisement\app\Http\Requests\StoreRequest;
use App\Modules\Advertisement\app\Http\Requests\UpdateRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdvertisementController extends Controller
{
    public function index(GetAction $action): Renderable
    {
        $ads = $action->execute();
        return view('Advertisement::advertisement',compact('ads'));
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
        return view('Advertisement::edit',compact('ad'));
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
