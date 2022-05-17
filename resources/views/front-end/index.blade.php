@extends('admin.master')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Daftar Reservation</h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Number Of People</th>
                    <th scope="col">Message</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($post as $key=>$value)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->date}}</td>
                    <td>{{$value->time}}</td>
                    <td>{{$value->of_people}}</td>
                    <td>{{$value->message}}</td>

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