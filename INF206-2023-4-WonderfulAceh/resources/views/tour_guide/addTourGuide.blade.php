@extends('layouts.app')

@section('content')
    <div class="col">
        <!-- <div class="white-text"> -->
        <h2>DAFTAR TOUR GUIDE</h2>
        <form action="{{ route('tour_guide.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="image">Image</label>
                <div class="col-sm-10">
                    <input name="image" type="file" class="form-control-file" id="image">
                    <small class="form-text text-muted">Upload an image for the place.</small>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-10">
                            <input name="nama" type="text" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>        
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                        <div class="col-sm-10">
                            <input name="alamat" type="text" class="form-control" />
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="nomor_hp">Nomor HP</label>
                        <div class="col-sm-10">
                            <input name="nomor_hp" type="text" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="nama_tempat">Nama Tempat Wisata yang ingin
                            dilamar</label>
                        <div class="col-sm-10">
                            <input name="nama_tempat" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi dan Pengalaman</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-right"
                                style="margin-right: 5px;">Daftar</button>
                        </div>
        </form>
        <div class="col-sm-10">
            <a href="/" class="btn btn-secondary float-right" style="margin-left: 5px;">Cancel</a>
        </div>
        <!-- </div> -->
    </div>
@endsection
