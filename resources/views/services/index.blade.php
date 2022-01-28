@extends('layout.main')

@section('content')
    <div class="container">
        <h1>Dashboard Servizi sito DoulaCristina</h1>
        <button class="btn btn-success">
            <a href="{{route('services.create')}}"></a>
            Aggiungi Servizio
        </button>
        
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th colspan="3">Actions</th>
                    </tr>
                    @foreach ($services as $service)
                    <tr>
                        <td>
                            {{ $service->id }}
                        </td>
                        <td>
                            {{ $service->name }}
                        </td><td>
                            {{ $service->price }}
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                View Details
                            </button>
                            <button class="btn btn-warning mx-2">
                                Edit
                            </button>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </td>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection