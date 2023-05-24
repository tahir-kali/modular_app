<?php

namespace App\Modules\Advertisement\app\Actions;


use App\Core\Actions\CoreAction;
use App\Modules\Advertisement\app\Models\Advertisement;

class GetOneAdvertisementAction extends CoreAction
{
    public function handle(Advertisement $advertisement)
    {

        return Advertisement::where('id',$advertisement->id)->first();
    }
}
