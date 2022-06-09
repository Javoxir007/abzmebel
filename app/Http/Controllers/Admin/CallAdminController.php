<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Call;

class CallAdminController extends Controller
{

    public function index()
    {
        $data = Call::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.call', compact('data'));
    }


}
