@extends('layout.main')

@section('content')

<h1 class="text-center">Dettagli Servizio</h1>
<div class="container mt-5">
        
        <h2>{{$service->name}}</h2>
        <div class="row justify-content-center">
            <div class="col-6">
                <img src="{{$service->image}}" alt="img">
            </div>
            <div class="col-6">
                <p>{{$service->description}}</p>
            </div>
        </div>
    </div>
@endsection