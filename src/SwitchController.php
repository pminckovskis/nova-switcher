<?php

namespace Clarity\NovaSwitcher;

use Laravel\Nova\Http\Requests\ResourceDetailRequest;

class SwitchController
{
    public function __invoke (ResourceDetailRequest $request)
    {
        $success = false;

        if ($request->resource()) {
            $resourceClass = $request->resource();
            $modelClass = $resourceClass::$model;
            $model = $modelClass::withoutGlobalScopes()->find($request->post('resourceId'));

            if($model) {
                $model->{$request->post('fieldName')} = (bool)$request->post('value');
                $model->save();
                $success = true;
            }
        }

        return compact('success');
    }
}
