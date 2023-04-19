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
    h1{
        color:#fffff;
    }
</style>
<body>
<div class="col">
<h2>DAFTAR TEMPAT WISATA</h2>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="image">Image</label>
    <div class="col-sm-10">
        <input name="image" type="file" class="form-control-file" id="image">
        <small class="form-text text-muted">Upload an image for the place.</small>
    </div>
        <label class="col-sm-2 col-form-label"for="room_id">Room</label>
        <div class="col-sm-10">
            <select name="room_id" class="form-control" id="room_id" required>
                
            </select>
            <small class="form-text text-muted">The room number being booked.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label"for="user_id">User</label>
        <div class="col-sm-10">
            <select name="user_id" class="form-control" id="user_id" required>
                
            </select>
            <small class="form-text text-muted">The user booking the room.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="start">Start Date</label>
        <div class="col-sm-10">
            <input name="start" type="date" class="form-control" required placeholder="yyyy-mm-dd"/>
            <small class="form-text text-muted">The start date for the booking.</small>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="start">End Date</label>
        <div class="col-sm-10">
            <input name="end" type="date" class="form-control" required placeholder="yyyy-mm-dd"/>
            <small class="form-text text-muted">The end date for the booking.</small>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2">Paid Options</div>
        <div class="col-sm-10">
            <div class="form-check">
                <input name="is_paid" type="checkbox" class="form-check-input" value="1"/>
                <label class="form-check-label" for="start">Pre-Paid</label>
                <small class="form-text text-muted">If the booking is being pre-paid.</small>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="notes">Notes</label>
        <div class="col-sm-10">
            <input name="notes" type="text" class="form-control" placeholder="Notes"/>
            <small class="form-text text-muted">Any notes for the booking.</small>
        </div>
    </div>

    <input type="hidden" name="is_reservation" value="1"/>

    <!-- @csrf -->
    <div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary float-right">Daftar</button>
    </div>
    <div class="col-sm-10">
        <a href="/" class="btn btn-secondary float-right">Cancel</a>
    </div>
</div>
</div>
</div>
</body>
</html>
@endsection