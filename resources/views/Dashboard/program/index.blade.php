
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
    <h1 class="h2">Daftar Programz</h1>
        </div><div class="table-responsive col-lg-8 justify-content-center align-items-center">
    <a class="btn btn-info mb-3" href="/dashboard/program/create">Tambahkan Program Baru</a>
      <table class="table table-striped table-lg">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama Program</th>
                <th scope="col">Action</th>
            </tr>
            <tbody>
                <div class="d-flex align-items-center">

                    @foreach ($programs as $program)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ Storage::url($program->foto) }}" class="img-fluid" style="max-width: 150px"></td>
                        <td>{{ $program->judul }}</td>
                        <td>
                          <a class="badge btn-info" href="/dashboard/program/{{ $program->id }}/edit"><i class="fa-solid fa-pencil" style="font-size: 15px"></i></a>
                          <form action="/dashboard/program/{{ $program->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Kamu Yakin Menghapus program ini?')"><i class="fa-solid fa-trash" style="font-size: 15px"></i></button>
                              </form>
                              
                            </td>
                        
                    </tr>
                    @endforeach
                </div>
  @endsection