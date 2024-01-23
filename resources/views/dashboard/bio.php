@extends('layouts.app')

@section('content')
<script>
    $(document).ready(function () {
        $("#dashboardIcon").click(function () {
            console.log("Dashboard icon diklik");
            window.location.href = "{{ url('/dashboard') }}"; // Menggunakan url() untuk mendapatkan URL lengkap
        });

        // Handling click on menu Keanggotaan
        $(".keanggotaan-menu").click(function () {
            console.log("Menu Keanggotaan diklik");
            window.location.href = "/keanggotaan";
        });

        // Dropdown Keanggotaan
        var dropdown = $("#dropdownKeanggotaan");
        var keanggotaanIcon = $("#keanggotaanIcon");

        keanggotaanIcon.hover(function () {
            dropdown.slideDown();
        });

        // Handling click on submenu items
        $(".dropdown-menu-item").click(function (e) {
            e.stopPropagation(); // Mencegah event klik menyebar ke elemen lain dan menutup dropdown
            var targetUrl = $(this).data("target");
            console.log("Sub menu diklik, navigasi ke: " + targetUrl);

            // Navigasikan ke URL tujuan
            window.location.href = targetUrl;
        });

        // Menutup dropdown saat mengklik di luar dropdown
        $(document).click(function (e) {
            if (!$(e.target).closest(dropdown).length) {
                dropdown.slideUp();
            }
        });







        //         function bukaHalamanBaru() {
        //     // Ganti URL dengan URL halaman baru yang ingin Anda buka
        //     // Misalnya, jika menggunakan route di Laravel:
        //     var url = '{{ route("perguruan-tinggi.index") }}';

        //     // Atau jika menggunakan URL statis:
        //     // var url = '{{ url("/perguruanTinggi") }}';

        //     window.location.href = url;
        // }


        // Tambahkan fungsi serupa untuk menu-menu lainnya
        // ...
    });

</script>


<!-- <div style="width: 1440px; height: 1709px; position: relative; background: white"> -->
<div style="width: 386.50px; height: 194.50px; left: 1142px; top: 81px; position: absolute">
    <div
        style="width: 276px; height: 85px; left: 0px; top: 0px; position: absolute; background: #CB4649; border-radius: 60px">
    </div>
    <div
        style="left: 90px; top: 35px; position: absolute; color: white; font-size: 34px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">
        Biodata</div>
    <div style="width: 100px; height: 100px; left: 286.50px; top: 94.50px; position: absolute"></div>
</div>

<div
    style="width: 454px; height: 2028px; left: 0px; top: -19px; position: absolute; background: white; box-shadow: 5px 35px 10px rgba(112.62, 110.65, 110.65, 0.15)">
</div>

<div
    style="width: 100%; height: 115px; background: white; box-shadow: 5px 4px 10px rgba(0, 0, 0, 0.15); position: absolute; right: 0;">
</div>
<img style="width: 166px; height: 101px; left: 17px; top: 13px; position: absolute"
    src="{{ asset('images/logo umm.jpg') }}" />
<!-- Dashboard -->
<div id="dashboardIcon" class="icon-container" style="left: 41px; top: 178px;">
    <i class="fas fa-tachometer-alt" style="color: #FEB1B3;"></i>
</div>
<div class="text-container" style="left: 100px; top: 184px; color: #1E1E1E;">Dashboard</div>

<!-- Perwakilan -->
<a href="{{ route('perwakilan') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 323px;">
        <i class="fas fa-building" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 323px; color: #1E1E1E;">Perwakilan</div>
</a>

<!-- Pertemuan Ilmiah -->
<a href="{{ route('pertemuan_ilmiah') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 402px;">
        <i class="fas fa-book" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 402px; color: #1E1E1E;">Pertemuan Ilmiah</div>
</a>

<!-- Penghargaan/Tanda Jasa -->
<a href="{{ route('penghargaan_tanda_jasa') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 477px;">
        <i class="fas fa-award" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 477px; color: #1E1E1E;">Penghargaan/Tanda Jasa</div>
</a>

<!-- Buku Pelajaran -->
<a href="{{ route('buku_pelajaran') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 556px;">
        <i class="fas fa-book-open" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 556px; color: #1E1E1E;">Buku Pelajaran</div>
</a>

<!-- Olahraga/Humainora -->
<a href="{{ route('olahraga_humainora') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 635px;">
        <i class="fas fa-dumbbell" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 635px; color: #1E1E1E;">Olahraga/Humainora</div>
</a>

<!-- Tim Penilaian -->
<a href="{{ route('tim_penilaian') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 714px;">
        <i class="fas fa-users" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 714px; color: #1E1E1E;">Tim Penilaian</div>
</a>

<!-- Biodata -->
<a href="{{ route('biodata') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 793px;">
        <i class="fas fa-address-card" style="color: #FF5054;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 793px; color: #FF5054;">Biodata</div>
</a>

<!-- Data Saya -->
<a href="{{ route('data_saya') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 872px;">
        <i class="fas fa-solid fa-database" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container"
        style="left: 100px; top: 872px; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word;">
        Data Saya</div>
</a>

<img style="width: 78px; height: 78px; position: absolute; border-radius: 50px; border: 4px #1E1E1E solid; top: 10px; right: 10px; z-index: 100;"
    src="https://via.placeholder.com/78x78" />

<img style="width: 131px; height: 67px; left: 209px; top: 22px; position: absolute; box-shadow: 0px 4px 1px rgba(0, 0, 0, 0.05)"
    src="{{ asset('images/Logo prestasi.png') }}" />
<div id="keanggotaanIcon" class="icon-container" style="left: 41px; top: 249px;">
    <i class="fas fa-user" style="color: #FEB1B3;"></i>
</div>
<!-- <div id="keanggotaanIcon" class="icon-container" style="left: 61px; top: 249px;" >
    <i class="fas fa-user" style="color: #FEB1B3;"></i>
</div> -->
<div class="text-container" style="left: 100px; top: 249px; color: #1E1E1E;">Keanggotaan</div>

<!-- Dropdown Keanggotaan -->
<div id="dropdownKeanggotaan" class="dropdown" style="position: absolute; left: 100px; top: 288px;">
    <div class="dropdown-menu-item" id="perguruanTinggi" data-target="{{ route('perguruan-tinggi.index') }}"
        style="color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Perguruan Tinggi</div>
    <div style="width: 267px; height: 0px; border: 1px #CB4649 solid"></div>
    <div class="dropdown-menu-item" id="lembagaPemerintah"
        style="color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Lembaga Pemerintah</div>
    <div style="width: 267px; height: 0px; border: 1px #CB4649 solid"></div>
    <div class="dropdown-menu-item" id="organisasiProfesi"
        style="color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Organisasi Profesi</div>
    <div style="width: 267px; height: 0px; border: 1px #CB4649 solid"></div>
    <div class="dropdown-menu-item" id="delegasiNasional"
        style="color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Delegasi Nasional</div>
    <div style="width: 267px; height: 0px; border: 1px #CB4649 solid"></div>
</div>
</div>

<!-- INI DIV UNTUK  DARI GAMBAR KEBAWAH -->
<div>
    @foreach($biodatas as $biodata)
    <img style="width: 355px; height: 355px; left: 770px; top: 238px; position: absolute; border-radius: 10px"
        src="https://via.placeholder.com/355x355" />
    <div
        style="left: 506px; top: 707px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        NIP</div>
    <div
        style="width: 883px; height: 64px; left: 506px; top: 746px; position: absolute; background: #FFFDFD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px">
    </div>
    <div
        style="left: 539px; top: 760px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        196207161990031004</div>
    <div
        style="width: 618px; left: 639px; top: 624px; position: absolute; text-align: center; color: #1E1E1E; font-size: 30px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">
        {{ $biodata->name }}</div>
    <div
        style="width: 23px; height: 23px; padding-top: 2.90px; padding-bottom: 2.88px; padding-left: 2.88px; padding-right: 2.88px; left: 1339px; top: 764px; position: absolute; justify-content: center; align-items: center; display: inline-flex">

    </div>
    <div
        style="left: 506px; top: 832px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Pangkat/Golongan Ruang</div>
    <div
        style="width: 883px; height: 64px; left: 506px; top: 871px; position: absolute; background: #FFFDFD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px">
    </div>
    <div
        style="left: 539px; top: 885px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Pembina/IVa</div>
    <div
        style="width: 23px; height: 23px; padding-top: 2.90px; padding-bottom: 2.88px; padding-left: 2.88px; padding-right: 2.88px; left: 1339px; top: 889px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
    </div>
    <div
        style="left: 506px; top: 957px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Jabatan</div>
    <div
        style="width: 883px; height: 64px; left: 506px; top: 996px; position: absolute; background: #FFFDFD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px">
    </div>
    <div
        style="left: 539px; top: 1010px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Ketua Jurusan Fakultas Teknik</div>
    <div
        style="width: 23px; height: 23px; padding-top: 2.90px; padding-bottom: 2.88px; padding-left: 2.88px; padding-right: 2.88px; left: 1339px; top: 1014px; position: absolute; justify-content: center; align-items: center; display: inline-flex">

    </div>
    <div
        style="left: 506px; top: 1082px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Unit Kerja</div>
    <div
        style="width: 883px; height: 64px; left: 506px; top: 1121px; position: absolute; background: #FFFDFD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px">
    </div>
    <div
        style="left: 539px; top: 1135px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        Universitas Muhammadiyah Malang</div>
    <div
        style="width: 23px; height: 23px; padding-top: 2.90px; padding-bottom: 2.88px; padding-left: 2.88px; padding-right: 2.88px; left: 1339px; top: 1139px; position: absolute; justify-content: center; align-items: center; display: inline-flex">

    </div>
    <div style="width: 28px; height: 26.70px; left: 0px; top: 0px; position: absolute">
        <div style="width: 28px; height: 26.70px; left: 0px; top: 0px; position: absolute; background: white"></div>
        <div style="width: 6px; height: 5.72px; left: 11px; top: 16.21px; position: absolute; background: white"></div>
    </div>
</div>
<div
    style="left: 506px; top: 1205px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
    Email Pribadi</div>
<div
    style="width: 883px; height: 64px; left: 506px; top: 1244px; position: absolute; background: #FFFDFD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px">
</div>
<div
    style="left: 539px; top: 1258px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
    annisaartanti77@gmail.com</div>
<div style="width: 23px; height: 23px; left: 1339px; top: 1262px; position: absolute">

</div>
<div
    style="left: 506px; top: 1330px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
    Email Institusi</div>
<div
    style="width: 883px; height: 64px; left: 506px; top: 1369px; position: absolute; background: #FFFDFD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px">
</div>
<div
    style="left: 539px; top: 1383px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
    annisaartanti77@webmail.umm.ac.id</div>
<div style="width: 23px; height: 23px; left: 1339px; top: 1387px; position: absolute">

</div>
<div
    style="left: 506px; top: 1455px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
    Nomor Telepon</div>
<div
    style="width: 883px; height: 64px; left: 506px; top: 1494px; position: absolute; background: #FFFDFD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px">
</div>
<div
    style="left: 539px; top: 1508px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
    +62 812-1720-1130</div>
<div style="width: 23px; height: 23px; left: 1339px; top: 1512px; position: absolute">

</div>
<div
    style="left: 506px; top: 1580px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
    Alamat</div>
<div
    style="width: 883px; height: 64px; left: 506px; top: 1619px; position: absolute; background: #FFFDFD; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px">
</div>
<div
    style="left: 539px; top: 1633px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
    Perum GPA Blok HD No 77, Ngijo, Karangploso, Malang, Jawa Timur </div>
<div style="width: 23px; height: 23px; left: 1339px; top: 1637px; position: absolute"></div>

<div
    style="position: absolute; top: 1800px; left: 1235px; transform: translateX(-50%); text-align: center; width: 100%;">
    <button
        style="width: 335px; height: 64px; background: #CB4649; border: none; border-radius: 20px; cursor: pointer; color: white; font-size: 26px; font-family: Fredoka One; font-weight: 400; line-height: 64px;">Simpan
        Perubahan</button>
</div>
</div>
</div>

@endsection