<!-- resources/views/halaman_depan.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Konten spesifik untuk tampilan halaman_depan -->
    <div style="width: 1440px; height: 1024px; position: relative; background: white">
        <div style="position: absolute; left: 850px; top: 150px;">
            <img style="width: 653px; height: 605px;" src="{{ asset('images/panel1.png') }}" />
        </div>
        <img style="width: 234px; height: 142px; left: 51px; top: 20px; position: absolute" src="{{ asset('images/logo umm.jpg') }}" />
        <div style="left: 86px; top: 301px; position: absolute; color: #1E1E1E; font-size: 32px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Halo, Selamat Datang !</div>
        <div style="left: 86px; top: 501px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Prestasi Terbaik Adalah Prestasi Anda. <br/>Catat dan Banggakan dengan PrestasiPlus</div>
        <div style="width: 731px; height: 129px; left: 86px; top: 356px; position: absolute; color: #1E1E1E; font-size: 40px; font-family: Bevan; font-weight: 400; word-wrap: break-word">Catat dan Raih Prestasi Hebatmu Bersama PrestasiPlus!</div>

        <!-- Mengubah elemen Login menjadi tombol -->
        <div style="width: 246px; height: 85px; left: 89px; top: 633px; position: absolute; text-align: center; z-index: 1;">
            <div style="width: 246px; height: 85px; left: 0px; top: 0px; position: absolute; background: #CB4649; border-radius: 20px; z-index: -1;"></div>
            <!-- Menambahkan link ke halaman login -->
            <a href="{{ route('login') }}" style="text-decoration: none; color: white; font-size: 29px; font-family: Fredoka One; font-weight: 400; line-height: 85px; display: block; position: relative; z-index: 2;">Login</a>
        </div>

        <img style="width: 180px; height: 92px; left: 325px; top: 32px; position: absolute; box-shadow: 0px 4px 1px rgba(0, 0, 0, 0.05)" src="{{ asset('images/Logo prestasi.png') }}" />
    </div>
@endsection
