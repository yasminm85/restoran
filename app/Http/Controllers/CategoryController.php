<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function create(){
        return view('category.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'img' => 'mimes:jpeg,jpg,png',
            'name' => 'required',
            'category' => 'required',
            
        ]);
        $img = $request->img;
        $new_img = time() . ' - '.$img->getClientOriginalName();

        $post = Category::create([
            'img' => $new_img,
            'name' => $request->name,
            'category' => $request->category,
           
        ]);
        $img->move('choose/image/', $new_img);
                
        return redirect('/category')->with('success', 'Category berhasil ditambahkan');
    }
    public function index()
    {
        $post = Category::all();
        return view('category.index', compact('post'));
    }
    public function edit($id)
    {
        $post = Category::findorfail($id);
        return view('category.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'img' => 'mimes:jpeg,jpg,png',
            'name' => 'required',
            'category' => 'required',
        ]);
        $post = Category::findorfail($id);
        if($request->has('img')){
            $path = "choose/image/";
            $img = $request->img;
            $new_img = time() . ' - '.$img->getClientOriginalName();
            $img->move('choose/image/', $new_img);
            $post_data = [
                'img' => $new_img,
                'name' => $request->name,
                'category' => $request->category,
            ];
        }else{
            $post_data = [
                'name' => $request->name,
            ];
        }
        $post->update($post_data);
        return redirect('/category')->with('success', 'Category berhasil diupdate');
}

public function destroy($id)
{
    $post = Category::findorfail($id);
    $path = public_path()."/choose/image/".$post->img;
    unlink($path);
    $post->delete();
    return redirect('/category');
}
}
