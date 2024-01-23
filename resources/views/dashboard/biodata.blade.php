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
  <a href="/dashboard" style="text-decoration: none; color: inherit;">
    <div class="text-container" style="left: 100px; top: 184px; color: #1E1E1E;">Dashboard</div>
  </a>

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
    <div class="text-container" style="left: 100px; top: 872px; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word;">Data Saya</div>
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

<!-- Form Section -->
<form action="{{ route('submit_biodata') }}" method="post" enctype="multipart/form-data">
    @csrf
    <img style="width: 280px; height: 280px; left: 1100px; top: 238px; position: absolute; border-radius: 10px"
    src="{{ old('foto', asset('storage/uploads/' . ($userData->foto ?? 'placeholder.jpg'))) }}" />

    <!-- Lampiran (SKTMT) -->
    <div style="width: 280px; height: 280px; left: 1100px; top: 550px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
        <label for="lampiran_sktmt">Unggah Foto Baru</label>
        <div style="position: relative;">
            <input type="file" id="file_upload" name="file_upload" accept="image/*" style="display: none;">
            <input type="text" id="lampiran_sktmt" name="lampiran_sktmt" placeholder="Unggah foto" style="width: calc(100% - 40px); height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 10px;">
    
            <!-- Icon Font Awesome untuk unggah file -->
            <label for="file_upload" style="position: absolute; right: 35px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                <i class="fa fa-upload" style="font-size: 24px; color: #1E1E1E;"></i>
            </label>
    
            <!-- Input untuk unggah file (hidden) -->
        </div>
    </div>

    <!-- NIP -->
<div style="left: 507px; top: 189px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="nip">NIP</label>
    <input type="text" id="nip" name="nip" placeholder="NIP" value="{{ old('nip', $userData->nip ?? '') }}" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Pangkat/Golongan Ruang -->
<div style="left: 507px; top: 298px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="pangkat">Pangkat/Golongan Ruang</label>
    <input type="text" id="pangkat" name="pangkat" placeholder="Pembina/Pemimpin/..." value="{{ old('pangkat', $userData->pangkat ?? '') }}" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Jabatan -->
<div style="left: 507px; top: 400px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="jabatan">Jabatan</label>
    <input type="text" id="jabatan" name="jabatan" placeholder="Ketua/Wakil/.." value="{{ old('jabatan', $userData->jabatan ?? '') }}" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Unit Kerja -->
<div style="left: 507px; top: 500px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="unit_kerja">Unit Kerja</label>
    <input type="text" id="unit_kerja" name="unit_kerja" placeholder="Universitas Muhammadiyah Malang" value="{{ old('unit_kerja', $userData->unit_kerja ?? '') }}" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Email Pribadi -->
<div style="left: 507px; top: 600px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="email_pribadi">Email Pribadi</label>
    <input type="text" id="email_pribadi" name="email_pribadi" placeholder="annisaartanti77@gmail.com" value="{{ old('email_pribadi', $userData->email_pribadi ?? '') }}" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Email Institusi -->
<div style="left: 507px; top: 697px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="email_institusi">Email Institusi</label>
    <input type="text" id="email_institusi" name="email_institusi" placeholder="annisaartanti77@webmail.umm.ac.id" value="{{ old('email_institusi', $userData->email_institusi ?? '') }}" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Nomor Telepon -->
<div style="left: 507px; top: 814px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="no_telp">Nomor Telepon</label>
    <input type="text" id="no_telp" name="no_telp" placeholder="+62 812 1720 1130" value="{{ old('no_telp', $userData->no_telp ?? '') }}" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Alamat -->
<div style="left: 507px; top: 920px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="Perum GPA Blok HD No 77, Ngijo, Karangploso, malang, Jawa Timur" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>


    <!-- Your existing submit button -->
    <div style="width: 300px; height: 80px; left: 1202px; top: 1000px; position: absolute;">
    <button type="submit" style="background-color: #CB4649; color: white; padding: 15px 30px; font-size: 20px; border: none; border-radius: 20px; cursor: pointer; display: flex; align-items: center;">
        <i class="far fa-paper-plane" style="color: white; font-size: 30px; margin-right: 15px;"></i>
        <span>Perbarui</span>
    </button>
</div>

</div>

</div>
</div>

  </form>

@endsection