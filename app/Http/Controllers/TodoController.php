<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = Todolist::get();
        return view ('todo.tampil',compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $todo=Todolist::get();
        return view('todo.tambah',['todo'=>$todo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=> 'required',
            'deskripsi'=> 'required', 
           
        ]);
        
        $todo = new Todolist;
        $todo->judul = $request->judul;
        $todo->deskripsi = $request->deskripsi;
        $todo->save();
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $todo = Todo::all();
        return view('todo.edit', ['todo'=>$todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todolist::where('id',$id)->first();
        return view('todo.edit',['todo'=>$todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Todolist::where('id',$id)->update([
            'judul'=> $request->judul ,
            'deskripsi'=>$request->deskripsi,
        ]);


        // $request->session()->flash('notifikasi');
        // notify()->warning('Data berhasil diubah');
        return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todolist::where('id',$id)->delete();
        return back();
    }
}
