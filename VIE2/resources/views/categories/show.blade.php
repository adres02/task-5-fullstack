@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                </div>

                <div class="card-body">
                    <p>Category Name: {{ $category->name }}</p>
                    <p>Created By: {{ $category->user->name }}</p>
                    <p>Created At: {{ $category->created_at }}</p>
                    <p>Updated At: {{ $category->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection