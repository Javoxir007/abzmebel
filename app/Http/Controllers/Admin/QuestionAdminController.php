<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionAdminController extends Controller
{
    
    public function index()
    {
        $data = Question::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.question', compact('data'));
    }

}
