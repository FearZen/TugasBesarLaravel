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
    <div style="width: 276px; height: 85px; left: 0px; top: 0px; position: absolute; background: #CB4649; border-radius: 60px"></div>
    <div style="left: 75px; top: 35px; position: absolute; color: white; font-size: 32px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Data Saya</div>
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
    <div class="text-container" style="left: 100px; top: 872px; color: #FF5054; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word;">Data Saya</div>
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

<!-- Accordion Section -->
<div style="width: 60%; position: absolute; left: 540px; top: 172px; margin-top: 10px; margin-bottom: 20px;">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading2023">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023" style="background-color: #CB4649; color: white; font-size: 16px;">
                    2023
                </button>
            </h2>
            <div id="collapse2023" class="accordion-collapse collapse" aria-labelledby="heading2023" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJan2023" aria-expanded="false" aria-controls="collapseJan2023" style="background-color: #CB4649; color: white; font-size: 14px;">
                                Januari 2023
                            </button>
                            <div id="collapseJan2023" class="accordion-collapse collapse" aria-labelledby="headingJan2023">
                                <div class="accordion-body">
                                    <!-- Content for Januari 2023 -->
                                    <div class="accordion" id="accordionKeanggotaanJan2023">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingKeanggotaanJan2023">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKeanggotaanJan2023" aria-expanded="false" aria-controls="collapseKeanggotaanJan2023">
                                                    Keanggotaan
                                                </button>
                                            </h2>
                                            <div id="collapseKeanggotaanJan2023" class="accordion-collapse collapse" aria-labelledby="headingKeanggotaanJan2023">
                                                <div class="accordion-body">
                                                    <!-- Content for Keanggotaan Januari 2023 -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPerwakilanJan2023">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePerwakilanJan2023" aria-expanded="false" aria-controls="collapsePerwakilanJan2023">
                                                    Perwakilan
                                                </button>
                                            </h2>
                                            <div id="collapsePerwakilanJan2023" class="accordion-collapse collapse" aria-labelledby="headingPerwakilanJan2023">
                                                <div class="accordion-body">
                                                    <!-- Content for Perwakilan Januari 2023 -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Repeat the structure for other sections -->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFeb2023" aria-expanded="false" aria-controls="collapseFeb2023" style="background-color: #CB4649; color: white; font-size: 14px;">
                                Febuari 2023
                            </button>
                            <div id="collapseFeb2023" class="accordion-collapse collapse" aria-labelledby="headingFeb2023">
                                <div class="accordion-body">
                                    <!-- Content for Febuari 2023 -->
                                    <div class="accordion" id="accordionKeanggotaanFeb2023">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingKeanggotaanFeb2023">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKeanggotaanFeb2023" aria-expanded="false" aria-controls="collapseKeanggotaanFeb2023">
                                                    Keanggotaan
                                                </button>
                                            </h2>
                                            <div id="collapseKeanggotaanFeb2023" class="accordion-collapse collapse" aria-labelledby="headingKeanggotaanFeb2023">
                                                <div class="accordion-body">
                                                    <!-- Content for Keanggotaan Febuari 2023 -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingPerwakilanFeb2023">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePerwakilanFeb2023" aria-expanded="false" aria-controls="collapsePerwakilanFeb2023">
                                                    Perwakilan
                                                </button>
                                            </h2>
                                            <div id="collapsePerwakilanFeb2023" class="accordion-collapse collapse" aria-labelledby="headingPerwakilanFeb2023">
                                                <div class="accordion-body">
                                                    <!-- Content for Perwakilan Febuari 2023 -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Repeat the structure for other sections -->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Repeat the structure for other months -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection