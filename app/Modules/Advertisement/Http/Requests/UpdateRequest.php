<?php

namespace Modules\Advertisement\Http\Requests;

use App\Core\Core\Http\Requests\CoreFormRequest;
use Modules\Advertisement\Http\Requests\Params\UpdateRequestParams;

class UpdateRequest extends CoreFormRequest
{
    protected string $params = UpdateRequestParams::class;

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.max' => __('Заголовок не должен превышать :max символов'),
        ];
    }
}
