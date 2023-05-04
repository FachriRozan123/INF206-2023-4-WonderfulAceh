@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<style>
    h2{
        color:#fffff;
    }
</style>
<body>
    <div class="col">
    <!-- <div class="white-text"> -->
<h2>DAFTAR TEMPAT WISATA</h2>
    <div class="form-group row">
    <label  for="image">Image</label>
    <div class="col-sm-10">
        <input name="image" type="file" class="form-control-file" id="image">
        <small class="form-text text-muted">Upload an image for the place.</small>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nama_tempat">Nama Tempat</label>
        <div class="col-sm-10">
            <input name="nama_tempat" type="text" class="form-control"/>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
        <div class="col-sm-10">
            <input name="alamat" type="text" class="form-control"/>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nama_pemilik">Nama Pemilik</label>
        <div class="col-sm-10">
            <input name="nama_pemilik" type="text" class="form-control">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nomor_pemilik">Nomor Pemilik</label>
        <div class="col-sm-10">
            <input name="nomor_pemilik" type="text" class="form-control">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
        <div class="col-sm-10">
            <input name="kategori" type="text" class="form-control"/>
        </div>
    </div>
    <br>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
    <div class="col-sm-10">
        <textarea name="deskripsi" class="form-control" rows="5"></textarea>
    </div>
</div>

    <br>
    <input type="hidden" name="tempat_wisata" value="1"/>
</div>
</div>

@csrf
<div class="col-sm-10">
    <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">Daftar</button>
</div>
<div class="col-sm-10">
    <a href="/" class="btn btn-secondary float-right" style="margin-left: 5px;">Cancel</a>
</div>
<!-- </div> -->
</div>
</body>
</html>
@endsection