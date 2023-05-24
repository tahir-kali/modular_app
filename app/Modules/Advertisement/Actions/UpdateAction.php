<?php

namespace Modules\Advertisement\Actions;


use App\Core\Core\Actions\CoreAction;
use Modules\Advertisement\Entities\Advertisement;
use Modules\Advertisement\Http\Requests\Params\UpdateRequestParams;

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
