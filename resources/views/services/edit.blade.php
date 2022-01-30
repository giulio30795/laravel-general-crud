@extends('layout.main')

@section('content')
<div class="container flex-grow-1 py-5">
    <h1>Modifica il Servizio</h1>
    <form action="{{route('services.update', $service->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$service->name}}">
            
        </div>

        <div>
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control">{{$service->description}}</textarea>
        </div>

        <div>
            <label for="image" class="form-label">Image</label>
            <input type="text" id="image" name="image" class="form-control" value="{{$service->image}}">
        </div>

        <div>
            <label for="price" class="form-label">Price</label>
            <input type="text" id="price" name="price" class="form-control" value="{{$service->price}}">
        </div>

        <button type="submit" class=" mt-5 btn btn-primary">Modifica Servizio</button>
    </form>
</div>
@endsection