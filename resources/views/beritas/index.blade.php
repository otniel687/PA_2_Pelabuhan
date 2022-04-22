@extends('layouts.app')
@section('title', 'Daftar Kendaraan | Admin')
@section('judul', 'Data  Kendaraan')
@section('content')
    <div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('beritas.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table ">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Tanggal Berita</th>
            <th>Title</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($beritas as $berita)
        <tr>
            <td>{{ $berita->id }}</td>
            <td><img src="{{ Storage::url($berita->image) }}" height="75" width="75" alt="" /></td>  
            <td>{{ $berita->tgl_berita }}</td>
            <td>{{ $berita->title }}</td>
            <td>
                <form action="{{ route('beritas.destroy',$berita->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('beritas.edit',$berita->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection