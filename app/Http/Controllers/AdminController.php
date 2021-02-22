<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = Admin::all();

        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData= $request->validate([
            'name' => 'required',
            'lastname' => 'required'
        ]);
        Admin::create($validateData);
        $new_admin = Admin::orderBy('id', 'desc')->first();

        return redirect()->route('admins.show', $new_admin);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($admin)
    {
        //
        $admin = Admin::find($admin);

        return view('admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($admin)
    {
        //
        $admin = Admin::find($admin);
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $admin)
    {
        //
        $validateData= $request->validate([
            'name' => 'required',
            'lastname' => 'required'
        ]);

        $admin = Admin::find($admin);
        $admin->update($validateData);
        return redirect('/admins')->with('success', 'Admin salvato!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($admin)
    {
        //
        $admin = Admin::find($admin);
        $admin->delete();

        return redirect('/admins')->with('success', 'Admin Cancellato!');
    }
}
