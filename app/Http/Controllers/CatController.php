<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::all()->toArray();
        return array_reverse($cats);
    }

    // add book
    public function add(Request $request)
    {
        $book = new Cat([
            'image_url' => $request->input('image_url')
            'breed' => $request->input('breed')
            'age' => $request->input('age')
            'color' => $request->input('color')
            'active' => $request->input('active')
        ]);
        $book->save();
        return response()->json('This Cat was successfully added');
    }

    // edit book
    public function edit($id)
    {
        $cat = Cat::find($id);
        return response()->json($cat);
    }

    // update book
    public function update($id, Request $request)
    {
        $book = Cat::find($id);
        $book->update($request->all());
        return response()->json('The Cat was successfully updated');
    }

    // delete book
    public function delete($id)
    {
        $book = Cat::find($id);
        $book->delete();
        return response()->json('This was was successfully removed!');
    }
}


