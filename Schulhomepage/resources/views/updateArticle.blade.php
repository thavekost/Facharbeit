@extends('layouts.app')
<form method="POST" action="{{url("article/{$article->id}")}}">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="author" class="form-label">Autor</label>
        <textarea class="form-control" name="author" placeholder="Autor">{{$article->author}}</textarea>
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Titel</label>
        <textarea class="form-control" name="title" placeholder="Titel">{{$article->title}} </textarea>
    </div>
    <div class="form-group">
        <label for="body" class="form-label">Artikel</label>
        <textarea name="body" class="form-control" rows="3">{{$article->body}}</textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Speichern</button>
    </div>
</form>
