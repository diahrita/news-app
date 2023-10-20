<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function articleView()
    {
        $data['allDataArticle'] = Article::all();
        return view('backend.article.view_article', $data);
    }

    public function articleAdd()
    {
        return view('backend.article.add_article');
    }
    public function articleStore(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:png,jpg',
        ]);

        $image = $request->file('image');
        $slug = Str::slug($image->getClientOriginalName());
        $new_image = time() . '_' . $slug;
        $image->move('images/', $new_image);

        $data = new Article();
        $data->judul = $request->judul;
        $data->konten = $request->konten;
        $data->category_id = $request->category_id;
        $data->slug = $request->slug;
        $data->kutipan = $request->kutipan;
        $data->image = 'images/' . $new_image;
        $data->published_at = $request->published_at;
        $data->save();

        return redirect()->route('article.view')->with('info', 'Tambah article Berhasil');
    }
    public function articleEdit($id)
    {
        $editData = Article::find($id);
        return view('backend.article.edit_article', compact('editData'));
    }
    public function articleUpdate(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'judul' => 'required',
        //     'konten' => 'required',
        //     'category_id' => 'required',
        //     'image' => 'required|image|mimes:png,jpg',
        // ]);

        $data = Article::find($id);
        $data->judul = $request->judul;
        $data->konten = $request->konten;
        $data->category_id = $request->category_id;
        $data->slug = $request->slug;
        $data->kutipan = $request->kutipan;
        $data->published_at = $request->published_at;
        $data->save();

        if ($request->hasFile('image')) {
            $validateData = $request->validate([
                'image' => 'required|image|mimes:png,jpg|max:2040'
            ]);
            File::delete($data->image);
            $image = $request->image;
            $slug = Str::slug($image->getClientOriginalName());
            $new_image = time() . '_' . $slug;
            $image->move('app/public/images/', $new_image);
            $data->image = 'app/public/images/' . $new_image;
        }

        $notification = array(
            'message'
        );
        return redirect()->route('article.view')->with('info', 'Update article Berhasil');
    }
    public function articleDelete($id)
    {
        $deleteData = Article::find($id);
        $deleteData->delete();

        return redirect()->route('article.view')->with('info', 'Delete article Berhasil');
    }
}
