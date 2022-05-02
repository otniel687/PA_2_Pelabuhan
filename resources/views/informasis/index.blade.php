@extends('layouts.app')
@section('title', 'Daftar Kendaraan | Admin')
@section('judul', 'Data  Kendaraan')
@section('content')
    <div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('informasis.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="card shadow p-4">
            <div class="table-responsive">
                <table class="table " id="dataTable example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($informasis as $informasi)
                    <tr>
                        <td>{{ $informasi->id }}</td>
                        <td><img src="{{ Storage::url($informasi->image) }}" height="75" width="75" alt="" /></td>
                        <td>{{ $informasi->title }}</td>
                        <td>{{ $informasi->description }}</td>
                        <td>
                            <form action="{{ route('informasis.destroy',$informasi->id) }}" method="POST">
                
                                <a class="btn btn-primary" href="{{ route('informasis.edit',$informasi->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
</div>
@endsection