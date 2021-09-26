<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function setForm($action, $method, $view, array $formParams, $_method = 'POST', $enctype = false)
    {
        return [
            'action'        => $action ?? 'javascript::void(0)',
            'method'        => in_array($method, ['GET', 'POST']) ? $method : 'POST',
            'enctype'       => $enctype,
            '_method'       => $_method,
            'include_view'  => $view,

            'id'            => $formParams['form_id'] ?? 'form__global',
            'name'          => $formParams['form_name'] ?? 'form__global',
            'crud_action'   => $formParams['crud_action'] ?? 'Save',
        ];
    }

    protected function renderView($view, array $withParams = [])
    {
        $params = [
            'actions' => [
                'view'   => trans('lang.actions.view'),
                'add'   => trans('lang.actions.add'),
                'edit'  =>  trans('lang.actions.edit'),
                'delete' => trans('lang.actions.delete'),
                'enable' => trans('lang.actions.enable'),
                'disable' => trans('lang.actions.disable'),
            ],
            'modalDelete' => 'dashboard.globals.modal.modal__delete',
        ];
        return view($view)->with(array_merge($withParams, $params));
    }
}
