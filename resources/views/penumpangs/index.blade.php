@extends('layouts.adm')
@section('title', 'Daftar Penumpang | Admin')
@section('judul', 'Data  Penumpang')
@section('content')
    <div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('penumpangs.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <section class="content">
        <div class="card shadow p-4">
            <div class="table-responsive">
                <table id="data" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>alamat</th>
                            <th width="120px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penumpangs as $penumpang)
                            <tr>
                                <td>{{ $penumpang->id }}</td>
                                <td>{{ $penumpang->nama }}</td>
                                <td>{{ $penumpang->jk }}</td>
                                <td>{{ $penumpang->umur }}</td>
                                <td>{{ $penumpang->alamat }}</td>
                                <td>
                                    <form action="{{ route('penumpangs.destroy', $penumpang->id) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('penumpangs.edit',$penumpang->id) }}">Edit</a>

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
    </section>
    
    {!! $penumpangs->links() !!}
</div>
@endsection