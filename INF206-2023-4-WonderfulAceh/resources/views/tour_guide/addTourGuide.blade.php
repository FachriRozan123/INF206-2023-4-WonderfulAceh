@extends('layouts.app')

@section('content')
<div class="col">
    <h2>DAFTAR TOUR GUIDE</h2>
    <form action="{{ route('tour_guide.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="image" name="image">
                <small class="form-text text-muted">Upload an image for the place.</small>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
        </div>

        <div class="form-group row">
            <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_tempat_id" class="col-sm-2 col-form-label">Nama Tempat Wisata yang ingin dilamar</label>
            <div class="col-sm-10">
                <input type="select" class="form-control" id="nama_tempat_id" name="nama_tempat_id" list="nama_tempat_list">
                <datalist id="nama_tempat_list">
                    @foreach ($tempat_wisata as $value)
                        <option value="{{ $value->nama_tempat }}">
                    @endforeach
                </datalist> 
            </div>
        </div>

        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi dan Pengalaman</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">Daftar</button>
                <a href="/" class="btn btn-secondary float-right" style="margin-left: 5px;">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection
