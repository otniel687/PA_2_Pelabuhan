@extends('layouts.app')
@section('title', 'Daftar Kendaraan | Admin')
@section('judul', 'Data  Kendaraan')
@section('content')
    <div class="container mt-2">
                <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right mb-2">
                                <a class="btn btn-success" href="{{ route('kendaraans.create') }}"> Create New Post</a>
                            </div>
                        </div>
                    </div>
                
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                
                    <div class="table-responsive">
                        <table class="table ">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Nama</th>
                            <th>Jenis Kendaraan</th>
                            <th>No Polisi</th>
                            <th width="180px">Action</th>
                        </tr>
                        @foreach ($kendaraans as $kendaraan)
                            <tr>
                                <td>{{ $kendaraan->id }}</td>
                                <td>{{ $kendaraan->tanggal }}</td>
                                <td>{{ $kendaraan->waktu }}</td>
                                <td>{{ $kendaraan->nama }}</td>
                                <td>{{ $kendaraan->jenis }}</td>
                                <td>{{ $kendaraan->no_polisi }}</td>
                                <td>
                                    <form action="{{ route('kendaraans.destroy', $kendaraan->id) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('kendaraans.edit',$kendaraan->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    </div>

                    {!! $kendaraans->links() !!}
            </div>
@endsection