<?php

namespace App\Modules\Advertisement\app\Actions;


use App\Core\Actions\CoreAction;
use App\Modules\Advertisement\app\Http\Requests\Params\UpdateRequestParams;
use App\Modules\Advertisement\app\Models\Advertisement;

class UpdateAction extends CoreAction
{
    public function handle(Advertisement $advertisement,UpdateRequestParams $params): Advertisement
    {
        if(!isset($advertisement->id)){
            $advertisement = Advertisement::where('id',$params->id)->first();
        }

        $advertisement->Update([
            "id"=>$params->id,
            "title"=>$params->title,
            "description"=>$params->description,
            "price"=>$params->price,
            "category"=>$params->category,
            "is_active"=>$params->is_active
        ]);
        return $advertisement;
    }
}
