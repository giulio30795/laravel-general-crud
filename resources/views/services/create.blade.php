@extends('layout.main')

@section('content')
    <div class="container py-5 flex-grow-1">
        <form action="{{route('services.store')}}" method="POST">
            @csrf
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>

            <div>
                <label for="description" class="form-label">Description</label>
                <textarea id="description" rows="9" name="description" class="form-control"></textarea>
            </div>

            <div>
                <label for="image" class="form-label">Image</label>
                <input type="text" id="image" name="image" class="form-control">
            </div>

            <div>
                <label for="price" class="form-label">Price</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>

            <button type="submit" class=" mt-5 btn btn-primary">Aggiungi Servizio</button>
        </form>
    </div>
@endsection