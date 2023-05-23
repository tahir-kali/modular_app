<?php
namespace Modules\Advertisement\Http\Requests;
use App\Core\Core\Http\Requests\CoreFormRequest;
use Modules\Advertisement\Http\Requests\Params\StoreRequestParams;

class StoreRequest extends CoreFormRequest
{
    protected string $params = StoreRequestParams::class;

    public function rules(): array
    {
        return [
            'title'  => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.max' => __('Заголовок не должен превышать :max символов'),
        ];
    }
}
