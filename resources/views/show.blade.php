@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table class="table">
                <tr><td>id</td><td>{{$incidence->id}}<td></tr>
                <tr><td>Name</td><td>{{$incidence->name}}</td></tr>
                <tr><td>Lastname</td><td>{{$incidence->lastname}}</td></tr>
                <tr><td>Phone</td><td>{{$incidence->phone}}</td></tr>
                <tr><td>Email</td><td>{{$incidence->email}}</td></tr>
                <tr><td>Image</td><td>{{$incidence->image}}</td></tr>
                <tr><td>Category</td><td>{{$incidence->category}}</td></tr>
                <tr><td>Description</td><td>{{$incidence->description}}</td></tr>
                <tr><td>Location</td><td>{{$incidence->location}}</td></tr>
                <tr><td>State</td><td>{{$incidence->state}}</td></tr>
        </table>
        <a href="{{'/home'}}"><button>Back</button>
    </div>
</div>
@endsection




