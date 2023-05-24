<?php

namespace App\Modules\Advertisement\app\Actions;


use App\Core\Actions\CoreAction;
use App\Modules\Advertisement\app\Models\Advertisement;
use App\Modules\Advertisement\app\Http\Requests\Params\StoreRequestParams;

class StoreAction extends CoreAction
{
    public function handle(StoreRequestParams $params)
    {

       $ad = Advertisement::create([
           "title"=>$params->title,
           "description"=>$params->description,
           "price"=>$params->price,
           "category"=>$params->category,
           "is_active"=>$params->is_active
       ]);
       return $ad;
    }
}
