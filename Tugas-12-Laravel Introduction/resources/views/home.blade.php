@extends('master')

@section('content')
<h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>
    <p>Belajar dan Berbagi agar hidup ini semakin berkualitas</p>
    <h2>Benefit Join di SanberBook</h2>
    <ul>
        <li>Mendapatkan Motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sambercode</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h2>Cara Bergabung ke SanberBook</h2>
    <ol>
        <li>Mengunjungi Website ini</li>
        <li>Mendaftar di <a href="{{url('/register')}}">Form Sign Up</a></li>
        <li>Selesai!</li>
    </ol>
@endsection