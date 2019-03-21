@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-8">
       <!--<showtable-component fetch-url="{{ route('home') }}":columns="['id', 'name','lastname', 'phone','email','image','category','description','location','state','Actions']"></showtable-component>-->
        <table class="table">
           <thead>
            <tr>
               <th scope="col">id</td>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Location</th>
                <th scope="col">State</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $value)
            <tr>
                <th>{{$value->id}}</th>
                <th>{{$value->name}}</th>
                <th>{{$value->lastname}}</th>
                <th>{{$value->phone}}</th>
                <th>{{$value->email}}</th>
                <th>{{$value->image}}</th>
                <th>{{$value->category}}</th>
                <th>{{$value->description}}</th>
                <th>{{$value->location}}</th>
                <th>{{$value->state}}</th>
                <th><a href="{{'/edit-incidence?id='.$value->id}}"><button>Edit</button></a><a href="{{'/show?id='.$value->id}}"><button>Show</button></a></th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection




