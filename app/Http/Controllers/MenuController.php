<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
class MenuController extends Controller
{
    public function create(){
        return view('menu.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name_menu' => 'required|unique:_menus_',
            'cost' => 'required',
            'stok' => 'required',
            'img' => 'mimes:jpeg,jpg,png',
        ]);
        $img = $request->img;
        $new_img = time() . ' - '.$img->getClientOriginalName();

        $post = menu::create([
            'name_menu' => $request->name_menu,
            'cost' => $request->cost,
            'stok' => $request->stok,
            'img' => $new_img,
        ]);
           $img->move('uploads/image/', $new_img);

           
                
        return redirect('/menu')->with('success', 'Menu berhasil ditambahkan');
    }
    public function index()
    {
        $post = menu::all();
        return view('menu.index', compact('post'));
    }
    public function edit($id)
    {
        $post = menu::findorfail($id);
        return view('menu.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_menu' => 'required|unique:_menus_',
            'cost' => 'required',
            'stok' => 'required',
            'img' => 'required',
        ]);
        $post = menu::findorfail($id);
        if($request->has('img')){
            $path = "uploads/image/";
            $img = $request->img;
            $new_img = time() . ' - '.$img->getClientOriginalName();
            $img->move('uploads/image/', $new_img);
            $post_data = [
                'name_menu' => $request->name_menu,
                'cost' => $request->cost,
                'stok' => $request->stok,
                'img' => $new_img,

            ];
        }else{
            $post_data = [
            'name_menu' => $request->name_menu,
            'cost' => $request->cost,
            'stok' => $request->stok,
            ];
        }
        $post->update($post_data);
        return redirect('/menu')->with('success', 'Table berhasil diupdate');
}

public function destroy($id)
{
    $post = menu::findorfail($id);
    $path = public_path()."/uploads/image/".$post->img;
    unlink($path);
    $post->delete();
    return redirect('/menu');
}
}
