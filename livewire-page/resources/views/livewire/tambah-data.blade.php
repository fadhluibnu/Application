@extends('layouts.app')

@section('content')
    <div>
        <p class="d-none" id="title">{{ $title }}</p>
        <h1>Tambah Data</h1>

        {{-- <a href="" class="btn btn-primary">Tambah Data Siswa</a> --}}
        <button wire:click="GoToAd()" class="btn btn-primary">Tambah Data Siswa</button>
    </div>
@endsection
