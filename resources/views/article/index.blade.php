@extends('layouts.master')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">List Artikel</h1>

<div class="card card-widget">
    <div class="card-header">
        <div class="card-tools pull-right">
            <a class="btn btn-info btn-sm" href="{{ route('article.create') }}">
                <i class="fas fa-plus">
                </i>
                Create New Article
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col table-responsive">
                <table id="article-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ Str::limit($article->content, 60, $end='...') }}
                                <td class="text-right" style="max-width: 100px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('article.show', $article->id) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm"
                                        href="{{ route('article.edit', $article->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form style="display: inline;"
                                        action="{{ route('article.delete', $article->id) }}"
                                        method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </button>
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


@endsection

@push('script')
<script src="{{ asset('sbadmin2/js/swal.min.js')}}"></script>

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush