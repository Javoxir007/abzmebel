<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;

class DesignAdminController extends Controller
{
    
    public function freeDesignAdmin()
    {
        $data = Design::where('type', 1)->orderBy('id', 'desc')->paginate(10);

        return view('admin.free_design', compact('data'));
    }

    public function callSpecialistAdmin()
    {
        $data = Design::where('type', 2)->orderBy('id', 'desc')->paginate(10);

        return view('admin.call_specialist', compact('data'));
    }

}
