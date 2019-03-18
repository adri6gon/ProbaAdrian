@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{$data}}</h2>
            <a href="{{'/'}}"><button>Back</button></a>
    </div>
</div>
@endsection
