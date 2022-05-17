@extends('admin.master')

@section('content')

<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Edit Category</h6>
        <form action="/category/{{$post->id}}" method="POST"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="no" class="form-label">Image</label>
                <input type="file" class="form-control" id="img" name="img" value="{{old('img', $post->img)}}">
                @error('img')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $post->name)}}">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{old('category', $post->category)}}">
                @error('category')
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