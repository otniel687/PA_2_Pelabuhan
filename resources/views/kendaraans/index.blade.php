@extends('layouts.adm')
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

<section class="content">
    <div class="card shadow p-4">
        <div class="table-responsive">
            <table id="data" class="table table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Nama</th>
                    <th>Jenis Kendaraan</th>
                    <th>No Polisi</th>
                    <th width="120px">Action</th>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
  $(function () {
    $("#data").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#data_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
{!! $kendaraans->links() !!}
</div>
@endsection