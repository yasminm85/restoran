@extends('admin.master')

@section('content')

<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Edit Menu</h6>
        <form action="/menu/{{$post->id}}" method="POST"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="no" class="form-label">Name</label>
                <input type="text" class="form-control" id="name_menu" name="name_menu" value="{{old('name_menu', $post->name_menu)}}">
                @error('name_menu')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Cost</label>
                <input type="number" class="form-control" id="cost" name="cost">
                @error('cost')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok">
                @error('stok')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Image</label>
                <input type="file" class="form-control" id="img" name="img">
                @error('img')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection