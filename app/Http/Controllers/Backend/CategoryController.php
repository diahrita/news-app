<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categoryView()
    {
        $data['allDataCategory'] = Category::all();
        return view('backend.category.view_category', $data);
    }

    public function categoryAdd()
    {
        return view('backend.category.add_category');
    }
    public function categoryStore(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        $data = new Category();
        $data->nama = $request->nama;
        $data->save();

        return redirect()->route('category.view')->with('info', 'Tambah Category Berhasil');
    }
    public function categoryEdit($id)
    {
        $editData = Category::find($id);
        return view('backend.category.edit_Category', compact('editData'));
    }
    public function categoryUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        $data = new Category();
        $data->nama = $request->nama;
        $data->save();

        $notification = array(
            'message'
        );
        return redirect()->route('category.view')->with('info', 'Update category Berhasil');
    }
    public function categoryDelete($id)
    {
        $deleteData = Category::find($id);
        $deleteData->delete();

        return redirect()->route('category.view')->with('info', 'Delete category Berhasil');
    }
}
