<?php

namespace App\Http\Controllers\admin;

use App\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    public function index()
    {
        $applies = Apply::Latest()->paginate(10);
        return view('admin.index', ['applies'=>$applies]);
    }
}
