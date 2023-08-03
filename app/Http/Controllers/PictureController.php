<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //!Mostriamo tutti i SUOI annunci all'utente
    public function index()
    {
        $pictures = Picture::all();

        return view('pictures.index', ['pictures'=>$pictures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $picture = new Picture();

        if($request->file('image')){
            $image_id = uniqid();
            $file_name = 'pictureImage-' . $image_id . '.' . $request->file('image')->extension();
            $picture->image_id = $image_id;
            $picture->image = $file_name;
            $image = $request->file('image')->storeAs('public', $file_name);
        }else {
            $picture->image = '';
            $picture->image_id = '';
        }
        $picture->title = $request->title;
        $picture->description = $request->description;
        $picture->price = $request->price;
        $picture->save();
        return redirect(route('homeUser'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $picture = Picture::find($id);
        return view('pictures.show', ['picture'=>$picture]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $picture = Picture::find($id);
        return view('pictures.edit', ['picture' => $picture]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $picture = Picture::find($id);
        if($request->file('image')){
            $image_id = $picture->image_id;
            $file_name = 'pictureImage-' . $image_id . '.' . $request->file('image')->extension();
            $picture->image_id = $image_id;
            $picture->image = $file_name;
            $image = $request->file('image')->storeAs('public', $file_name);
        }else {
            $picture->image_id = $picture->image_id;
            $picture->image = $picture->image;
        }
        $picture->title = $request->title;
        $picture->description = $request->description;
        $picture->price = $request->price;
        $picture->save();
        return redirect(route('homeUser'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);
        $picture->delete();
        return redirect(route('homeUser'));
    }
}
