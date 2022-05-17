@extends('admin.master')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<a href="/menu/create" class="btn btn-primary mb-2">Tambah</a>
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Daftar Menu</h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Image</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($post as $key=>$value)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$value->name_menu}}</td>
                    <td>{{'$'}}{{$value->cost}}</td>
                    <td>{{$value->stok}}</td>
                    <td><img src="{{asset('uploads/image/'.$value->img)}}" alt="" srcset="" width="70" height="70"></td>
                    <td>
                        <a href="/menu/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/menu/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form></td>
                </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse 
            </tbody>
        </table>
    </div>
</div>
@endsection