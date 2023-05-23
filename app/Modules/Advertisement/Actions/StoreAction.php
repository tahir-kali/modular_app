<?php

namespace Modules\Advertisement\Actions;


use App\Core\Core\Actions\CoreAction;
use Modules\Advertisement\Entities\Advertisement;
use Modules\Advertisement\Http\Requests\Params\StoreRequestParams;

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
