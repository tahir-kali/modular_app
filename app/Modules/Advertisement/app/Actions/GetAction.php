<?php

namespace App\Modules\Advertisement\app\Actions;


use App\Core\Actions\CoreAction;
use App\Modules\Advertisement\app\Models\Advertisement;

class GetAction extends CoreAction
{
    public function handle()
    {

    return Advertisement::get();
    }
}
