@extends('layout')

@section('konten')
<h4>Tambah siswa</h4>

<form action="{{route('siswa.submit')}}" method="post">
    @csrf
    <label>NPM</label>
    <input type="number" name="npm" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>No. Hp</label>
    <input type="text" name="no_hp" class="form-control mb-2">
    <label>Jenis kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2">
    <label>Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection