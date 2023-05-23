<?php

namespace App\Core\Contracts\Advertisement;

use Modules\Advertisement\Entities\Advertisement;

interface dvertisementStoreContract
{
    public function storeAds(Advertisement $advertisement): void;
}
