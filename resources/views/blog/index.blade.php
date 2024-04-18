@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog / Noticiero</h1>

        <div class="row">
            @foreach($news->articles as $article)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->description }}</p>
                            <p class="card-text">Autor: {{ $article->author->name->first }} {{ $article->author->name->last }}</p>
                            <a href="{{ $article->url }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection