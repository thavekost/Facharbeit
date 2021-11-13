@extends('layouts.app')
@section('content')
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0"
                                       src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..."/></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">Hier könnte Ihre Werbung stehen!</h1>
                <p>Wenn Sie auf unserer Webseite Werbung zeigen möchten und den Verein damit unterstützen wollen, melden Sie sich bitte beim Vereinspräsidenten.</p>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-success my-5 py-4 text-center">
            <div class="card-body"><p class="text-white m-0">Wir als TUS Musterstadt e.V. wollen alle Kinder aus Musterstadt für Sport begeistern!</p></div>
        </div>
        <!-- Content Row-->
        @foreach($articles as $article)

                    <div class="card mb-4 h-100">
                        <div class="card-body">
                            <h2 class="card-title">{{$article->title}}</h2>
                            <p class="card-text">geschrieben von: {{$article->author}}</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{url('/article/'.$article->id)}}">More Info</a></div>
                    </div>


        @endforeach
@endsection
