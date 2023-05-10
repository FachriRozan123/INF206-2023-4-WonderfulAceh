@extends('layouts.app')

@section('content')
    <div class="col">
        <h2>DAFTAR TEMPAT WISATA</h2>
        <form action="{{ route('holiday.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input name="image" type="file" class="form-control-file" id="image">
                    <small class="form-text text-muted">Upload an image for the place.</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_tempat" class="col-sm-2 col-form-label">Nama Tempat</label>
                <div class="col-sm-10">
                    <input name="nama_tempat" type="text" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input name="alamat" type="text" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pemilik" class="col-sm-2 col-form-label">Nama Pemilik</label>
                <div class="col-sm-10">
                    <input name="nama_pemilik" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor_pemilik" class="col-sm-2 col-form-label">Nomor Pemilik</label>
                <div class="col-sm-10">
                    <input name="nomor_pemilik" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <input name="kategori" list="kategori" type="select" class="form-control"/>
                    <datalist id="kategori">
                        @foreach ($category as $value)
                            <option value="{{ $value->category }}"></option>
                        @endforeach
                    </datalist> 
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea name="deskripsi" class="form-control" rows="5"></textarea>
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
