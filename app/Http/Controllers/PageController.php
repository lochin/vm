<?php

namespace App\Http\Controllers;

use App\Apply;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('admin');
    }

    public function index()
    {
        return view('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        return view('admin');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
//        return $request;
        $request->validate([
            'firstname'=>'required|string',
            'lastname'=> 'required|string',
            'email' => 'required|email|string',
            'phone' =>'required|max:20',
            'region'=>'required|string',
            'district'=>'required|string',
            'message'=>'required|string',
            'file_url' => 'required',
            'file_url.*' => 'mimes:jpg,jpeg,png'

        ]);
        if($request->hasfile('file_url'))

        {

            foreach($request->file('file_url') as $file)

            {

                $name=$file->getClientOriginalName();

                $file->move(public_path().'/files/', $name);

                $data[] = $name;

            }

        }
        $message = new Apply([
            'firstname' => $request->get('firstname'),
            'lastname'=> $request->get('lastname'),
            'email'=> $request->get('email'),
            'phone'=> $request->get('phone'),
            'region'=> $request->get('region'),
            'district'=> $request->get('district'),
            'message'=> $request->get('message'),
            'file_url'=> 'hello/url',
            'status'=> 0,
        ]);
        $message->file_url=json_encode($data);
        $message->save();

        return redirect()->route('index')->with('success', 'Xabar jo\'natildi');
    }
}
