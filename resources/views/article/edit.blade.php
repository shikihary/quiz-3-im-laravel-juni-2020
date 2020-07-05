@extends('layouts.master')

@section('content')
<div class="m-5 p-2 col-sm-8">
    <h1 class="h3 mb-2 text-gray-800">Ubah Artikel</h1>
    <div class="card">
        <form action="{{ url('/articles/'.$article->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$article->title}}" placeholder="Judul">
            </div>
            <div class="form-group">
                <label for="content">Isi artikel</label>
                <input type="text" class="form-control" name="tag" id="tag" value="{{$article->tag}}" placeholder="Tag">
            </div>
            <div class="form-group">
                <label for="tag">Isi artikel</label>
                <textarea rows="5" class="form-control" name="content" id="content">{{$article->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection