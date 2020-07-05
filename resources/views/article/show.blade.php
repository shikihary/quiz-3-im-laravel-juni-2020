@extends('layouts.master')

@section('content')
<div class="m-5 p-2 col-sm-8">
    <h1 class="h3 mb-2 text-gray-800">Detail Artikel</h1>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $article->title }}</h4><br>
            <p>Slug :{{ $article->slug }}</p>
            <p><span class="float-left">Dibuat: <i>{{ $article->created_at }}</i></span>
            <span class="float-right">Diupdate: <i>{{ $article->updated_at }}</i></span></p><br>
            <hr>
            <p>{{ $article->content }}</p>
            <p>{{ $article->tag }}</p>
            <hr>
            <a class="btn btn-sm btn-primary" href="{{ url('/articles/'.$article->id.'/edit') }}"><i class="fa fa-edit"></i></a>
            <form action="{{ url('/articles/'.$article->id) }}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger ml-2"><i class="fa fa-trash"></i></button>
            </form>
        </div>
    </div>
</div>
@endsection