<?php

namespace Modules\Advertisement\Actions;

use App\Core\Core\Actions\CoreAction;
use Modules\Advertisement\Entities\Advertisement;

class GetAction extends CoreAction
{
    public function handle()
    {

    return Advertisement::get();
    }
}
