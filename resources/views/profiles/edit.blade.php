@extends('layouts.app')
@section('title', 'Daftar profile | Admin')
@section('judul', 'Data profile')
@section('content')
    <div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit profile</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profiles.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
   
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
  
    <form action="{{ route('profiles.update',$profile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Title:</strong>
                    <input type="text" name="title" value="{{ $profile->title }}" class="form-control" placeholder="Post Title">
                    @error('title')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Post content:</strong>
                        <textarea class="form-control" style="height:150px" name="content1" placeholder="Post content">{{ $profile->content1 }}</textarea>
                        @error('content1')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Image:</strong>
                    <input type="file" name="image1" class="form-control" placeholder="Post Title">
                    @error('image1')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">

                <img src="{{ Storage::url($profile->image1) }}" height="200" width="200" alt="" />

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Post content:</strong>
                        <textarea class="form-control" style="height:150px" name="content2" placeholder="Post content">{{ $profile->content2 }}</textarea>
                        @error('content2')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Image:</strong>
                    <input type="file" name="image2" class="form-control" placeholder="Post Title">
                    @error('image2')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">

                <img src="{{ Storage::url($profile->image2) }}" height="200" width="200" alt="" />

                </div>
            </div>    
              <button type="submit" class="btn btn-primary ml-3">Submit</button>
          
        </div>
   
    </form>
</div>
@endsection