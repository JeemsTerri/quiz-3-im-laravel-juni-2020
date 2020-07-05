@extends('layouts.master')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Artikel</h1>

<div class="card card-widget">
    <form action="{{ route('article.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                      </div>
                      <div class="form-group">
                        <label for="content">Isi Artikel</label>
                        <textarea class="form-control" name="content"  cols="30" rows="10">{{ $article->content }}</textarea>
                      </div>

                      <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" name="tag" value="{{ $article->tag }}">
                      </div>
                      <input type="hidden" name="user_id" value="{{ $article->user_id }}"> 
                      {{-- Dummy pakai user id 1 --}}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@endsection