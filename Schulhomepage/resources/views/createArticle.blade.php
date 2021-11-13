@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route("article.store")}}">
        @csrf
        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input type="text" class="form-control" name="author" placeholder="Autor">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Titel</label>
            <input type="text" class="form-control" name="title" placeholder="Titel">
        </div>
        <div class="form-group">
            <label for="body" class="form-label">Artikel</label>
            <textarea name="body" class="form-control" rows="3"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Hochladen</button>
        </div>
    </form>
@endsection
