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

    // add cat
    public function add(Request $request)
    {
        $cat = new Cat([
            'image_url' => $request->input('image_url')
            'breed' => $request->input('breed')
            'age' => $request->input('age')
            'color' => $request->input('color')
            'active' => $request->input('active')
        ]);
        $cat->save();
        return response()->json('This Cat was successfully added');
    }

    // edit cat
    public function edit($id)
    {
        $cat = Cat::find($id);
        return response()->json($cat);
    }

    // update cat
    public function update($id, Request $request)
    {
        $cat = Cat::find($id);
        $book->update($request->all());
        return response()->json('The Cat was successfully updated');
    }

    // delete cat
    public function delete($id)
    {
        $cat = Cat::find($id);
        $cat->delete();
        return response()->json('This was was successfully removed!');
    }
}


