@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('articles.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                </div>

                <div class="card-body">
                    <p>Title: {{ $article->title }}</p>
                    <p>Content: {{ $article->content }}</p>

                    @if ($article->image)
                    <img src="{{ asset('storage/images/' . $article->image) }}" alt="Article Image" class="img-fluid">
                    @else
                    <p>No image available</p>
                    @endif

                    <p>Category: {{ $article->category->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection