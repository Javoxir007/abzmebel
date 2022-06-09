<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use App\Models\Question;

class QuestionController extends Controller
{
    
    public function question(QuestionRequest $request)
    {
        $validated = $request->validated();
        $validated['phone_number_q'] = '+998'.''.$validated['phone_number_q'];
        $data = Question::create($validated);

        if($data){
            return redirect()->route('index', app()->getLocale())->with(['good' => 'Отправлен']);
        }
        return redirect()->back();
    }

}
