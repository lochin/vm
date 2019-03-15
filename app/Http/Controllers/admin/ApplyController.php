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

    public function show(Apply $apply)
    {
//        return response()->json(array('apply'=> $apply), 200);
        $apply->status = 1;
        $apply->save();
        return response()->json(array('apply'=> $apply), 200);

    }
}