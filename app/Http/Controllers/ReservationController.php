<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
class ReservationController extends Controller
{
    public function create(){
        return view('reservation.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'of_people' => 'required',
            'message' => 'required',
        ]);
        Reservation::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date' => $request->date,
                'time' => $request->time,
                'of_people' => $request->of_people,
                'message' => $request->message
                ]);
        return redirect('/reservation')->with('success', 'Table berhasil ditambahkan');
    }
    public function index()
    {
        $post = Reservation::all();
        return view('reservation.index', compact('post'));
    }
    public function edit($id)
    {
        $post = Reservation::find($id);
        return view('reservation.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'of_people' => 'required',
            'message' => 'required',
        ]);
        $post = Reservation::find($id);
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->date = $request->date;
        $post->time = $request->time;
        $post->of_people = $request->of_people;
        $post->message = $request->message;
        $post->update();
        return redirect('/reservation')->with('success', 'Table berhasil diupdate');
}
    public function destroy($id)
    {
        $post = Reservation::find($id);
        $post->delete();
        return redirect('/reservation');
    }
}
