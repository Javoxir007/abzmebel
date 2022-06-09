<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FreeDesignRequest;
use App\Models\Design;

class DesignController extends Controller
{

    public function freeDesign(FreeDesignRequest $request)
    {
        $validated = $request->validated();
        $validated['phone_number'] = '+998'.''.$validated['phone_number'];
        $data = Design::create($validated);

        if($data){
            return redirect()->route('index', app()->getLocale())->with(['good' => 'Отправлен']);
        }
        return redirect()->back();
        
    }

}
