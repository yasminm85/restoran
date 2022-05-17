@extends('admin.master')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<a href="/category/create" class="btn btn-primary mb-2">Tambah</a>
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Category</h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Creat_at</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($post as $key=>$value)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td><img src="{{asset('choose/image/'.$value->img)}}" alt="" srcset="" width="70" height="70"></td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->category}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>
                        <a href="/category/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/category/{{$value->id}}" method="POST">
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