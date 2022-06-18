@extends('app')

@section('content')

<div class="container">

        @foreach ($articles as $article)
        <div class="card mt-3">
            <div class="card-body">
                <div class="fw-bold">{{ $article->user_id }}</div>
                <div class="card-text">{{ $article->created_at }}</div>
            </div>
            <div class="card-body pt-0 pb-3">
                <div class="card-text">{{ $article->body }}</div>
            </div>
        </div>
        @endforeach

</div>

@endsection
