@extends('layouts.adm')
@section('title', 'Daftar Kendaraan | Admin')
@section('judul', 'Data  Kendaraan')
@section('content')
    <div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('galeris.create') }}"> Create New Post</a>
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
                <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galeris as $galeri)
                    <tr>
                        <td>{{ $galeri->id }}</td>
                        <td><img src="{{ Storage::url($galeri->image) }}" height="75" width="75" alt="" /></td>
                        <td>{{ $galeri->title }}</td>
                        <td>
                            <form action="{{ route('galeris.destroy',$galeri->id) }}" method="POST">
                
                                <a class="btn btn-primary" href="{{ route('galeris.edit',$galeri->id) }}">Edit</a>
            
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