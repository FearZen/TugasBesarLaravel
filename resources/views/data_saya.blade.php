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
});

</script>


</script>
<!-- <div style="width: 1440px; height: 1709px; position: relative; background: white"> -->
<div style="width: 386.50px; height: 194.50px; left: 1142px; top: 81px; position: absolute">
    <div
        style="width: 276px; height: 85px; left: 0px; top: 0px; position: absolute; background: #CB4649; border-radius: 60px">
    </div>
    <div
        style="left: 75px; top: 35px; position: absolute; color: white; font-size: 32px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">
        Data Saya</div>
    <div style="width: 100px; height: 100px; left: 286.50px; top: 94.50px; position: absolute"></div>
</div>
<div style="width: 1440px; height: 110px;right: 0px; left: 0px; top: 1599px; position: absolute">
    <div
        style="width: 1540px; height: 110px; left: 0px; top: 0px; position: absolute; background: white; box-shadow: 5px -4px 10px rgba(0, 0, 0, 0.15)">
    </div>
    <div
        style="left: 1116px; top: 43px; position: absolute; color: #323232; font-size: 17px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        © 2023 PrestasiPlus All Right Reserved</div>
</div>
<div
    style="width: 454px; height: 1728px; left: 0px; top: -19px; position: absolute; background: white; box-shadow: 5px 35px 10px rgba(112.62, 110.65, 110.65, 0.15)">
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
        <i class="fas fa-address-card" style="color: #FEB1B3;"></i>
    </div>
    <div class="text-container" style="left: 100px; top: 793px; color: #1E1E1E;">Biodata</div>
</a>

<!-- Data Saya -->
<a href="{{ route('data_saya') }}" style="text-decoration: none; color: inherit;">
    <div class="icon-container" style="left: 41px; top: 872px;">
        <i class="fas fa-solid fa-database" style="color: #FF5054;"></i>
    </div>
    <div class="text-container"
        style="left: 100px; top: 872px; color: #FF5054; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word;">
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

<!-- Display Buku table -->
<div class="table-container" style="position:absolute; left:500px; top:150px">
    <h2>Buku</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border-bottom: 1px solid #ddd; background-color: #f2f2f2;">
                <th style="padding: 10px; text-align: left;">Jenis Buku</th>
                <th style="padding: 10px; text-align: left;">Judul Buku</th>
                <th style="padding: 10px; text-align: left;">Jumlah Buku</th>
                <th style="padding: 10px; text-align: left;">Tanggal Terbit</th>
                <th style="padding: 10px; text-align: left;">Satuan Hasil Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Jumlah Volume Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Angka Kredit Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Nomor SK Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Lampiran SK Kegiatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $item)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;">{{ $item->jenis_buku }}</td>
                    <td style="padding: 10px;">{{ $item->judul_buku }}</td>
                    <td style="padding: 10px;">{{ $item->jumlah_buku }}</td>
                    <td style="padding: 10px;">{{ $item->tanggal_terbit }}</td>
                    <td style="padding: 10px;">{{ $item->satuan_hasil_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->jumlah_volume_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->angka_kredit_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->nomor_sk_kegiatan }}</td>
                    <td style="padding: 10px;">
                        <img style="width: 100px; height: 75px; object-fit: cover;"
                            src="{{ old('foto', asset('storage/uploads/' . ($item->lampiran_sk_kegiatan ?? 'placeholder.jpg'))) }}"
                            alt="Lampiran SK Kegiatan">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $buku->links() }}
</div>

<!-- Display perwakilan table -->
<div class="table-container" style="position:absolute; left:500px; top:450px">
    <h2>Perwakilan</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border-bottom: 1px solid #ddd; background-color: #f2f2f2;">
                <th style="padding: 10px; text-align: left;">Jenis Perwakilan</th>
                <th style="padding: 10px; text-align: left;">Peran</th>
                <th style="padding: 10px; text-align: left;">Tahun Perwakilan</th>
                <th style="padding: 10px; text-align: left;">Tanggal Perwakilan</th>
                <th style="padding: 10px; text-align: left;">Keterangan Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Satuan Hasil Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Jumlah Volume Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Angka Kredit Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Nomor SK Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Lampiran SK Kegiatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perwakilan as $item)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;">{{ $item->jenis_perwakilan }}</td>
                    <td style="padding: 10px;">{{ $item->peran }}</td>
                    <td style="padding: 10px;">{{ $item->tahun_kepanitiaan }}</td>
                    <td style="padding: 10px;">{{ $item->tanggal_kepanitiaan }}</td>
                    <td style="padding: 10px;">{{ $item->keterangan_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->satuan_hasil_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->jumlah_volume_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->angka_kredit_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->nomor_sk_kegiatan }}</td>
                    <td style="padding: 10px;">
                        <img style="width: 100px; height: 75px; object-fit: cover;"
                            src="{{ old('foto', asset('storage/uploads/' . ($item->lampiran_sk_kegiatan ?? 'placeholder.jpg'))) }}"
                            alt="Lampiran SK Kegiatan">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $perwakilan->links() }}
</div>

<!-- Display penghargaan table -->
<div class="table-container" style="position:absolute; left:500px; top:750px">
    <h2>Penghargaan</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border-bottom: 1px solid #ddd; background-color: #f2f2f2;">
                <th style="padding: 10px; text-align: left;">Jenis Penghargaan</th>
                <th style="padding: 10px; text-align: left;">Tingkat Penghargaan</th>
                <th style="padding: 10px; text-align: left;">Jumlah Penghargaan</th>
                <th style="padding: 10px; text-align: left;">Tanggal Penerimaan</th>
                <th style="padding: 10px; text-align: left;">Keterangan Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Satuan Hasil Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Jumlah Volume Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Angka Kredit Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Nomor SK Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Lampiran SK Kegiatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penghargaan as $item)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;">{{ $item->jenis_penghargaan }}</td>
                    <td style="padding: 10px;">{{ $item->tingkat_penghargaan }}</td>
                    <td style="padding: 10px;">{{ $item->jumlah_penghargaan }}</td>
                    <td style="padding: 10px;">{{ $item->tanggal_penerimaan }}</td>
                    <td style="padding: 10px;">{{ $item->keterangan_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->satuan_hasil_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->jumlah_volume_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->angka_kredit_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->nomor_sk_kegiatan }}</td>
                    <td style="padding: 10px;">
                        <img style="width: 100px; height: 75px; object-fit: cover;"
                            src="{{ old('foto', asset('storage/uploads/' . ($item->lampiran_sk_kegiatan ?? 'placeholder.jpg'))) }}"
                            alt="Lampiran SK Kegiatan">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $penghargaan->links() }}
</div>

<!-- Display pertemuan ilmiah table -->
<div class="table-container" style="position:absolute; left:500px; top:1050px">
    <h2>Pertemuan Ilmiah</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border-bottom: 1px solid #ddd; background-color: #f2f2f2;">
                <th style="padding: 10px; text-align: left;">Jenis Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Tingkat Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Nama Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Peran</th>
                <th style="padding: 10px; text-align: left;">Keterangan Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Tanggal Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Satuan Hasil Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Jumlah Volume Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Angka Kredit Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Nomor SK Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Lampiran SK Kegiatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pertemuanIlmiah as $item)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;">{{ $item->jenis_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->tingkat_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->nama_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->peran }}</td>
                    <td style="padding: 10px;">{{ $item->keterangan_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->tanggal_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->satuan_hasil_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->jumlah_volume_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->angka_kredit_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->nomor_sk_kegiatan }}</td>
                    <td style="padding: 10px;">
                        <img style="width: 100px; height: 75px; object-fit: cover;"
                            src="{{ old('foto', asset('storage/uploads/' . ($item->lampiran_sk_kegiatan ?? 'placeholder.jpg'))) }}"
                            alt="Lampiran SK Kegiatan">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pertemuanIlmiah->links() }}
</div>

<!-- Display olahraga table -->
<div class="table-container" style="position:absolute; left:500px; top:1350px">
    <h2>Olahraga</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr style="border-bottom: 1px solid #ddd; background-color: #f2f2f2;">
                <th style="padding: 10px; text-align: left;">Bidang Prestasi</th>
                <th style="padding: 10px; text-align: left;">Tingkat Prestasi</th>
                <th style="padding: 10px; text-align: left;">Prestasi yang Dicapai</th>
                <th style="padding: 10px; text-align: left;">Peran</th>
                <th style="padding: 10px; text-align: left;">Tanggal Pencapaian</th>
                <th style="padding: 10px; text-align: left;">Satuan Hasil Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Jumlah Volume Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Angka Kredit Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Nomor SK Kegiatan</th>
                <th style="padding: 10px; text-align: left;">Lampiran SK Kegiatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sport as $item)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 10px;">{{ $item->bidang_prestasi }}</td>
                    <td style="padding: 10px;">{{ $item->tingkat_prestasi }}</td>
                    <td style="padding: 10px;">{{ $item->prestasi_yang_dicapai }}</td>
                    <td style="padding: 10px;">{{ $item->peran }}</td>
                    <td style="padding: 10px;">{{ $item->tanggal_pencapaian }}</td>
                    <td style="padding: 10px;">{{ $item->satuan_hasil_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->jumlah_volume_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->angka_kredit_kegiatan }}</td>
                    <td style="padding: 10px;">{{ $item->nomor_sk_kegiatan }}</td>
                    <td style="padding: 10px;">
                        <img style="width: 100px; height: 75px; object-fit: cover;"
                            src="{{ old('foto', asset('storage/uploads/' . ($item->lampiran_sk_kegiatan ?? 'placeholder.jpg'))) }}"
                            alt="Lampiran SK Kegiatan">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $sport->links() }}
</div>

@endsection