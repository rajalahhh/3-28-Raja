@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contact.store')}}">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="inputnama">Nama</label>
    <input type="text" class="form-control" id="inputnama" placeholder="Masukan Nama" name="name">
    </div>
    <div class="mb-3">
        <label for="inputemail">Email</label>
        <input type="email" class="form-control" id="inputemail" placeholder="Masukan Email" name="email">
    </div>
    <div class="mb-3">
        <label for="inputnote">Pesan</label>
        <textarea class="form-control" id="inputnote" placeholder="Masukan Pesan" style="height: 100px" name="pesan"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">kirim</button>
</form>

@endsection