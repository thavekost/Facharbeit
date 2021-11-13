@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Autor</th>
            <th scope="col">Titel</th>
            <th scope="col">erstellt am</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->author}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->created_at}}</td>
                <td>
                    <form action="{{route('article.destroy', $article->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Loeschen</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
