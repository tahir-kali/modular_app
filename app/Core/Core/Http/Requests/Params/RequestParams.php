<?php

namespace App\Core\Core\Http\Requests\Params;

use App\Core\Core\Http\Requests\CoreFormRequest;
use Spatie\LaravelData\Data;

abstract class RequestParams extends Data
{
    public static function fromRequest(CoreFormRequest $request): RequestParams
    {
        return new static(...$request->toArray());
    }
}
