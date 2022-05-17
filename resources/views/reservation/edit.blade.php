@extends('admin.master')

@section('content')

<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Edit Table {{ $post->id }}</h6>
        <form action="/reservation/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="no" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name', $post->name)}}" required>
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email',$post->email)}}" required>
                @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">No Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{old('phone',$post->phone)}}" required>
                @error('phone')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{old('date',$post->date)}}" required>
                @error('date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Time</label>
                <input type="text" class="form-control" id="time" name="time" value="{{old('time',$post->time)}}" required>
                @error('time')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <select class="form-select mb-3" aria-label="Default select example" name="of_people" value="{{old('of_people',$post->of_people)}}" required>
                    <option selected="">Number of people</option>
                    <option value="1">1</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="3">5</option>
                    <option value="3">More than 5</option>
                </select>
                @error('of_people')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no" class="form-label">Message</label>
                <input type="text-area" class="form-control" id="message" name="message" value="{{old('message',$post->message)}}" required>
                @error('time')
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