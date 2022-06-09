<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CallRequest;
use App\Models\Call;

class CallController extends Controller
{
    
    public function callSpecialist(CallRequest $request)
    {
        $validated = $request->validated();
        $data = Call::create($validated);

        if($data){
            return redirect()->route('index', app()->getLocale())->with(['good' => 'Отправлен']);
        }
        return redirect()->back();
    }

}
