@extends('layouts.master')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Buat Artikel Baru</h1>

<div class="card card-widget">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h4>{{ $article->title }}</h4>
                <p class="description">
                    {{ $article->slug }}
                </p>
                <hr>
                <p class="content">
                    {{ $article->content }}
                </p>
                <hr>
                @foreach (explode(' ', $article->tag) as $tag)
                <p class="badge badge-success p-2 text-white">
                    {{ $tag }}
                </p>
                @endforeach
                
            </div>
        </div>
    </div>
</div>


@endsection
