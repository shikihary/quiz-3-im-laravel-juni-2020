@extends('layouts.master')

@section('content')
<div class="m-5 p-2">
    <h1 class="h3 mb-2 text-gray-800">Daftar Artikel</h1>
    <a class="btn btn-primary mb-2" href="{{ url('/articles/create') }}">Artikel Baru</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tag</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($articles as $key => $article)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->tag }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ url('/articles/'.$article->id) }}">Show</a>
                        <a class="btn btn-sm btn-secondary ml-2" href="{{ url('/articles/'.$article->id.'/edit') }}">Edit</a>
                        <form action="{{ url('/articles/'.$article->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger ml-2"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @php $no++; @endphp
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('/sbadmin2/js/swal.min.js') }}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush