@extends('layouts.app')

@section('content')
<script>

$(document).ready(function () {
    // Handling click on Dashboard icon
    $("#dashboardIcon").click(function () {
        console.log("Dashboard icon diklik");
        window.location.href = "{{ url('/dashboard') }}"; // Menggunakan url() untuk mendapatkan URL lengkap
    });

    // ... (Tambahkan penanganan klik lainnya jika diperlukan)
});
   $(document).ready(function () {
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


</script>
<!-- <div style="width: 1440px; height: 1709px; position: relative; background: white"> -->
  <div style="width: 386.50px; height: 194.50px; left: 1142px; top: 81px; position: absolute">
    <div style="width: 276px; height: 85px; left: 0px; top: 0px; position: absolute; background: #CB4649; border-radius: 60px"></div>
    <div style="left: 35px; top: 35px; position: absolute; color: white; font-size: 29px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Pertemuan Ilmiah</div>
    <div style="width: 100px; height: 100px; left: 286.50px; top: 94.50px; position: absolute"></div>
  </div>
  <div style="width: 1440px; height: 110px;right: 0px; left: 0px; top: 1599px; position: absolute">
    <div style="width: 1540px; height: 110px; left: 0px; top: 0px; position: absolute; background: white; box-shadow: 5px -4px 10px rgba(0, 0, 0, 0.15)"></div>
    <div style="left: 1116px; top: 43px; position: absolute; color: #323232; font-size: 17px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">© 2023 PrestasiPlus All Right Reserved</div>
  </div>
  <div style="width: 454px; height: 1728px; left: 0px; top: -19px; position: absolute; background: white; box-shadow: 5px 35px 10px rgba(112.62, 110.65, 110.65, 0.15)"></div>
  <div style="width: 100%; height: 115px; background: white; box-shadow: 5px 4px 10px rgba(0, 0, 0, 0.15); position: absolute; right: 0;"></div>
  <img style="width: 166px; height: 101px; left: 17px; top: 13px; position: absolute" src="{{ asset('images/logo umm.jpg') }}" />
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
        <i class="fas fa-book" style="color: #FF5054;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 402px; color: #FF5054;">Pertemuan Ilmiah</div>
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
        <i class="fas fa-address-card" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 793px; color: #1E1E1E;">Biodata</div>
</a>

<!-- Data Saya -->
<a href="{{ route('data_saya') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 872px;">
        <i class="fas fa-solid fa-database" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 872px; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word;">Data Saya</div>
</a>

  <img style="width: 78px; height: 78px; position: absolute; border-radius: 50px; border: 4px #1E1E1E solid; top: 10px; right: 10px; z-index: 100;" src="https://via.placeholder.com/78x78" />

  <img style="width: 131px; height: 67px; left: 209px; top: 22px; position: absolute; box-shadow: 0px 4px 1px rgba(0, 0, 0, 0.05)" src="{{ asset('images/Logo prestasi.png') }}" />
  <div id="keanggotaanIcon" class="icon-container" style="left: 41px; top: 249px;">
    <i class="fas fa-user" style="color: #FEB1B3;"></i>
</div>
<!-- <div id="keanggotaanIcon" class="icon-container" style="left: 61px; top: 249px;" >
    <i class="fas fa-user" style="color: #FEB1B3;"></i>
</div> -->
<div class="text-container" style="left: 100px; top: 249px; color: #1E1E1E;" >Keanggotaan</div>

<!-- Dropdown Keanggotaan -->
<div id="dropdownKeanggotaan" class="dropdown" style="position: absolute; left: 100px; top: 288px;">
<div class="dropdown-menu-item" id="perguruanTinggi" data-target="{{ route('perguruan-tinggi.index') }}" style="color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Perguruan Tinggi</div>
    <div style="width: 267px; height: 0px; border: 1px #CB4649 solid"></div>
    <div class="dropdown-menu-item" id="lembagaPemerintah"  style="color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Lembaga Pemerintah</div>
    <div style="width: 267px; height: 0px; border: 1px #CB4649 solid"></div>
    <div class="dropdown-menu-item" id="organisasiProfesi"  style="color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Organisasi Profesi</div>
    <div style="width: 267px; height: 0px; border: 1px #CB4649 solid"></div>
    <div class="dropdown-menu-item" id="delegasiNasional"  style="color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Delegasi Nasional</div>
    <div style="width: 267px; height: 0px; border: 1px #CB4649 solid"></div>
</div>
  
  <!-- Form Section -->
  <form action="{{ route('submit_form') }}" method="post">
    @csrf

    <!-- Jenis Kegiatan -->
<div style="left: 507px; top: 189px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="peran_panitia">Jenis Kegiatan</label>
    <input type="text" id="peran_panitia" name="peran_panitia" placeholder="Seminar, Workshop, Pelatihan, Guest Lecture, dll." style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Tingkat Kegiatan -->
<div style="left: 507px; top: 298px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="nama_panitia">Tingkat Kegiatan</label>
    <input type="text" id="nama_panitia" name="nama_panitia" placeholder="Internasional, Nasional, Regional, Perguruan Tinggi, dll." style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Nama Kegiatan -->
<div style="left: 507px; top: 400px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="rangkap_panitia">Nama Kegiatan</label>
    <input type="text" id="rangkap_panitia" name="rangkap_panitia" placeholder="Program Pascasarjana.." style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Peran -->
<div style="left: 507px; top: 500px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="tahun_kepanitiaan">Peran</label>
    <input type="text" id="tahun_kepanitiaan" name="tahun_kepanitiaan" placeholder="Ketua" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Keterangan Kegiatan -->
<div style="left: 507px; top: 600px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 20px;">
    <label for="keterangan_kegiatan">Keterangan Kegiatan:</label>
    <textarea id="keterangan_kegiatan" name="keterangan_kegiatan" rows="4" placeholder="Deskripsi kegiatan" style="width: 100%; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"></textarea>
</div>

<!-- Tanggal Kegiatan  -->
<div style="left: 507px; top: 837px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="tanggal_kegiatan">Tanggal Kegiatan:</label>
    <input type="text" id="tanggal_kegiatan" name="tanggal_kegiatan" placeholder="mm/dd/yyyy" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Satuan Hasil Kegiatan -->
<div style="left: 507px; top: 740px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="satuan_hasil_kegiatan">Satuan Hasil Kegiatan (SKS/tahun):</label>
    <input type="text" id="satuan_hasil_kegiatan" name="satuan_hasil_kegiatan" placeholder="SKS/tahun" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Jumlah Volume Kegiatan -->
<div style="left: 507px; top: 937px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="jumlah_volume_kegiatan">Jumlah Volume Kegiatan:</label>
    <input type="text" id="jumlah_volume_kegiatan" name="jumlah_volume_kegiatan" placeholder="Dalam angka" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Angka Kredit Kegiatan -->
<div style="left: 507px; top: 1054px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="angka_kredit_kegiatan">Angka Kredit Kegiatan:</label>
    <input type="text" id="angka_kredit_kegiatan" name="angka_kredit_kegiatan" placeholder="Dalam angka" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Nomor SK Kegiatan -->
<div style="left: 507px; top: 1171px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="nomor_sk_kegiatan">Nomor SK Kegiatan:</label>
    <input type="text" id="nomor_sk_kegiatan" name="nomor_sk_kegiatan" placeholder="Nomor SK Kegiatan" style="width: 100%; height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
</div>

<!-- Lampiran (SKTMT) -->
<div style="left: 507px; top: 1288px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word; margin-bottom: 30px;">
    <label for="lampiran_sktmt">Lampiran (SKTMT):</label>
    <div style="position: relative;">
        <input type="text" id="lampiran_sktmt" name="lampiran_sktmt" placeholder="Lampiran (SKTMT)" style="width: calc(100% - 40px); height: 40px; font-size: 18px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 10px;">

        <!-- Icon Font Awesome untuk unggah file -->
        <label for="file_upload" style="position: absolute; right: 35px; top: 50%; transform: translateY(-50%); cursor: pointer;">
            <i class="fa fa-upload" style="font-size: 24px; color: #1E1E1E;"></i>
        </label>

        <!-- Input untuk unggah file (hidden) -->
        <input type="file" id="file_upload" name="file_upload" accept="image/*" style="display: none;">
    </div>
</div>

    <!-- Your existing submit button -->
    <div style="width: 300px; height: 80px; left: 1202px; top: 1494px; position: absolute;">
    <button type="submit" style="background-color: #CB4649; color: white; padding: 15px 30px; font-size: 20px; border: none; border-radius: 20px; cursor: pointer; display: flex; align-items: center;">
        <i class="far fa-paper-plane" style="color: white; font-size: 30px; margin-right: 15px;"></i>
        <span>Submit</span>
    </button>
</div>

</div>

</div>
</div>

  </form>
</div>
@endsection