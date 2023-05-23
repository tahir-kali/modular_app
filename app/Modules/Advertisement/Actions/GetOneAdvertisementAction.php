<?php

namespace Modules\Advertisement\Actions;

use App\Core\Core\Actions\CoreAction;
use Modules\Advertisement\Entities\Advertisement;

class GetOneAdvertisementAction extends CoreAction
{
    public function handle(Advertisement $advertisement)
    {

        return Advertisement::where('id',$advertisement->id)->first();
    }
}
