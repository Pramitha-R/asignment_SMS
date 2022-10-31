<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/dashboard');
    }
    public function service(){
        $service=service::all();
        return view('admin/service/show',compact('service'));
    }
    public function addservice(){
        return view('admin/service/add');
    }
    public function storeService(Request $request){
        $request ->validate([
            'service'=>'required',
            'duration'=>'required',
            'price'=>'required',
            
        ]);
        service::create($request->all());
        return redirect('/addservice');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        return view('admin/service/edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $request ->validate([
            'service'=>'required',
            'duration'=>'required',
            'price'=>'required',
            
        ]);
        $service->update($request->all());
        return redirect('/addservice');
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $s)
    {
        $s->delete();
        return redirect('/service')->with('success','successfully deleted');
    }
}
