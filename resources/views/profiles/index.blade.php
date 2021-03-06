@extends('layouts.adm')
@section('title', 'Profil Website | Admin')
@section('judul', 'Data  Website')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('profiles.create') }}"> Create New Post</a>
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
            <th>Gambar</th>
            <th>Title</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($profiles as $profile)
        <tr>
            <td>{{ $profile->id }}</td>
            <td><img src="{{ Storage::url($profile->image1) }}" height="75" width="75" alt="" /></td>
            <td>{{ $profile->title }}</td>
            <td>
                <form action="{{ route('profiles.destroy',$profile->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('profiles.edit',$profile->id) }}">Edit</a>
   
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