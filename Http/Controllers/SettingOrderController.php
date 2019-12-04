<?php

namespace Modules\SettingOrder\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\SettingOrder\Entities\SettingOrder;

class SettingOrderController extends Controller
{

    public function update(Request $request, SettingOrder $setting_order)
    {
        $setting_order->update($request->all());
        return back()->with('success', 'Configuração de pedido alterado.');
    }


}
