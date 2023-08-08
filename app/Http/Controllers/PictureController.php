<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Picture;
use App\Models\Category;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //!Mostriamo tutti i SUOI annunci all'utente
    public function index()
    {
        $userID = auth()->user()->id;
        $pictures = User::find($userID)->pictures;

        return view('pictures.index', ['pictures'=>$pictures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pictures.create', ['categories'=>$categories]);
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
        $picture->user_id = auth()->user()->id;
        $picture->save();

        $categories = $request->categories;
        $current_picture = Picture::find($picture->id);

        foreach($categories as $category){
            $current_picture->categories()->attach($category);
        }

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
        $categories = Category::all();
        $picture = Picture::find($id);
        if(auth()->user()->id !== $picture->user_id){
            return redirect(route('home'));
        }else {
            return view('pictures.edit', [
                'picture' => $picture,
                'categories' => $categories
            ]);
        }
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

        $last_picture_id = Picture::find($picture->id);
        
        //!prendo tutte le categorie dalla loro tabella
        $allCategories = Category::all();
        //!elimino tutte le categorie che aveva il quadro
        foreach($allCategories as $singleCategory){
            $last_picture_id->categories()->detach($singleCategory);
        }

        //!salvo nella variabile l'array di categorie che mi restituisce l'utente al submit del form
        $editCategories = $request->categories;
        //!aggiorno le categorie del quadro come da modifica utente
        foreach ($editCategories as $editCategory){
            $last_picture_id->categories()->attach($editCategory);
        }

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

    public function indexOrders(){
        $userID = auth()->user()->id;
        $customers = User::find($userID)->customers;

        return view('pictures.orders-index', ['customers' => $customers]);
    }
}
