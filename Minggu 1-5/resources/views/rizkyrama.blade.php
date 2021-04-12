@extends('layouts.app')

@section('content')
    <div class="jumbatron-fluid">
        <div class="container">
            <hi class="display-4">Halaman Home</hi>
            <p class="lead">Halaman ini merupakan halaman home</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Mata Pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li>{{ $p }}</li>
            @endforeach
        </ul>
    </div>


