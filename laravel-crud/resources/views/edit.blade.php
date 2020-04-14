@extends('master')

<!-- Isi title -->
@section('title', 'Edit Data')

<!-- Isi bagian judul halaman -->
@section('judul_halaman', 'Edit Data Mahasiswa')

<!-- Isi bagian konten -->
@section('konten')
    <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
    <br/>
    <br/>
    @foreach($mahasiswa as $mhs)
    <form action="/mahasiswa/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$mhs->id}}"> <br/>
        <div class="form-group">
            <label for="namamhs">Nama</label>
            <input type="text" class="form-control" required="required" name="namamhs"> <br/>
        </div>
        <div class="form-group">
            <label for="nimmhs">NIM</label>
            <input type="number" class="form-control" required="required" name="nimmhs"> <br/>
        </div>
        <div class="form-group">
            <label for="emailmhs">Email</label>
            <input type="email" class="form-control" required="required" name="emailmhs"> <br/>
        </div>
        <div class="form-group">
            <label for="jurusanmhs">Jurusan</label>
            <input type="text" class="form-control" required="required" name="jurusanmhs"> <br/>
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Simpan Data</button>
        </form>
        @endforeach
@endsection