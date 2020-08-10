@extends('layouts.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Buat Proyek</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/proyek/{{$data->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="title">Nama Proyek</label>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$data->nama_proyek}}">
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi</label>
                @error('desc')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <textarea class="form-control" id="desc" rows="3" placeholder="Your description here..." name="desc">{{$data->deskripsi}}</textarea>
            </div>
            <div class="form-group">
                <label for="mulai">Mulai Proyek</label>
                @error('mulai')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="date" class="form-control" id="mulai"  name="mulai" value="{{$data->tgl_mulai}}">
            </div>
            <div class="form-group">
                <label for="dl">Deadline Proyek</label>
                @error('dl')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="date" class="form-control" id="dl"  name="dl" value="{{$data->tgl_deadline}}">
            </div>
            <div class="form-group">
                <label for="manager">Manager Proyek</label>
                @error('manager')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <select class="custom-select" id="inputGroupSelect01">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection