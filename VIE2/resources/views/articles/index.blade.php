@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Articles') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('articles.create') }}" class="btn btn-sm btn-primary">{{ __('Create Article') }}</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{__('#') }}</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Content') }}</th>
                                    <th>{{ __('Category') }}</th>
                                    <th>{{ __('Author') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->content }}</td>
                                    <td>{{ $article->category ? $article->category->name : '-' }}</td>
                                    <td>{{ $article->user->name }}</td>
                                    <td>
                                        @if($article->image)
                                        <img src="{{ asset('storage/images/' . $article->image) }}" alt="article image" style="max-width: 150px">
                                        @else
                                        No image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-secondary">{{ __('View') }}</a>
                                        <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection