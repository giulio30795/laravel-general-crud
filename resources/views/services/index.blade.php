@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="my-3">Dashboard Servizi sito DoulaCristina</h1>
        <button class="btn btn-success my-3">
            <a class="text-decoration-none text-white" href="{{ route('services.create') }}">
                Aggiungi Servizio
            </a>
        </button>
        
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr class="text-center">
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
                        <td class="d-flex justify-content-center">
                            <button class="btn btn-primary">
                                <a class="text-decoration-none text-white" href="{{route('services.show', $service->id)}}">Vedi Dettagli</a>
                            </button>
                            <button class="btn btn-warning mx-2">
                                <a class="text-decoration-none text-white" href="{{route('services.edit', $service->id)}}">Modifica</a>
                            </button>

                            <form action="{{route('services.destroy', $service->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">
                                Elimina
                            </button>
                            </form>
                        </td>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection