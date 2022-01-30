@extends('layout.main')

@section('content')

<h1 class="text-center my-3">Dettagli Servizio</h1>
<div class="container mt-5 flex-grow-1">
        
        <h3 class="my-4">{{$service->name}}</h3>
        <div class="row justify-content-center">
            <div class="col-6">
                <img src="{{$service->image}}" alt="img">
            </div>
            <div class="col-6">
                <p>{{$service->description}}</p>

                <div class="d-flex">
                    <form action="{{route('services.destroy', $service->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                            Elimina
                        </button>
                    </form>
                    <button class="btn btn-success ms-3">
                        <a class="text-decoration-none text-white" href="{{route('services.index')}}">Home</a>
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection