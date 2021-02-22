<?php

namespace App\Http\Controllers;

use App\Editor;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $editors = Editor::all();

        return view('editors.index', compact('editors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('editors.create');
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
        Editor::create($validateData);
        $new_editor = Editor::orderBy('id', 'desc')->first();

        return redirect()->route('editors.show', $new_editor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function show($editor)
    {
        //
        $editor = Editor::find($editor);

        return view('editors.show', compact('editor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function edit($editor)
    {
        //
        $editor = Editor::find($editor);
        return view('editors.edit', compact('editor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $editor)
    {
        //
        $validateData= $request->validate([
            'name' => 'required',
            'lastname' => 'required'
        ]);

        $editor = Editor::find($editor);
        $editor->update($validateData);
        return redirect('/editors')->with('success', 'Editor salvato!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function destroy($editor)
    {
        //
        $editor = Editor::find($editor);
        $editor->delete();

        return redirect('/editors')->with('success', 'Editor Cancellato!');
    }
}
