@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <!-- <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>-->
        <table>
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Lastname</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Image</td>
                <td>Category</td>
                <td>Description</td>
                <td>Location</td>
                <td>State</td>
                <td>Actions</td>
            </tr>
            @foreach($data as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->lastname}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->image}}</td>
                <td>{{$value->category}}</td>
                <td>{{$value->description}}</td>
                <td>{{$value->location}}</td>
                <td>{{$value->state}}</td>
                <td><a href=""><button>Edit</button></a><a href=""><button>Show</button></a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection




