@extends('layouts.app')

@section('content')
<style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda */

        /* .icon-container {
            width: 31px;
            height: 33px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            position: absolute;
        }

        .icon-container i {
            font-size: 24px; /* Sesuaikan ukuran ikon sesuai kebutuhan */
        /* } */

        /* Contoh gaya untuk teks di sebelah ikon */
        /* .text-container {
            left: 100px;
            top: 249px;
            position: absolute;
            color: #1E1E1E;
            font-size: 24px;
            font-family: Gowun Dodum;
            font-weight: 400;
            word-wrap: break-word;
        }
        .dropdown {
        position: absolute;
        background-color: white;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        display: none; Sembunyikan dropdown secara default */
    /* } */ 
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
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

    <div style="width: 100%; height: 115px; background: white; box-shadow: 5px 4px 10px rgba(0, 0, 0, 0.15); position: absolute; right: 0;"></div>

    <div style="width: 454px; height: 1728px; background: white; box-shadow: 5px 35px 10px rgba(112.62, 110.65, 110.65, 0.15)"></div>
  <img style="width: 166px; height: 101px; left: 17px; top: 13px; position: absolute" src="{{ asset('images/logo umm.jpg') }}" />
  
  <!-- Dashboard -->
  <div class="icon-container" style="left: 41px; top: 178px;">
        <i class="fas fa-tachometer-alt" style="color: #FF5054;"></i>
    </div>
    <a href="/dashboard" style="text-decoration: none; color: inherit;">
        <div class="text-container" style="left: 100px; top: 184px; color: #FF5054;">Dashboard</div>
    </a>

    <!-- Icon dan teks Keanggotaan -->
<!-- Icon dan teks Keanggotaan -->
<div id="keanggotaanIcon" class="icon-container" style="left: 41px; top: 249px;" >
    <i class="fas fa-user" style="color: #FEB1B3;"></i>
</div>
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
<a style="text-decoration: none; color: inherit;">
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

    <img style="width: 78px; height: 78px; position: absolute; border-radius: 50px; border: 4px #1E1E1E solid; top: 10px; right: 10px;" src="{{ old('foto', asset('storage/uploads/' . ($userData->foto ?? 'placeholder.jpg'))) }}" />

  <img style="width: 200px; height: 281px; left: 512px; top: 213px; position: absolute; border-radius: 10px" src="{{ old('foto', asset('storage/uploads/' . ($userData->foto ?? 'placeholder.jpg'))) }}" />
  
  <div style="width: 271px; height: 57px; left: -1272px; top: 774px; position: absolute; background: #CB4649; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 30px"></div>
  <div style="width: 152px; left: -1414px; top: 257px; position: absolute; color: #1E1E1E; font-size: 40px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Login</div>
  <div style="width: 218px; left: -1179px; top: 789px; position: absolute; color: white; font-size: 24px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Login</div>
  <div style="left: -1209px; top: 879px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">PrestasiPlus UMM</div>
  <div style="width: 492px; height: 57px; left: -1379px; top: 417px; position: absolute; background: #FFDADB; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 30px"></div>
  <div style="width: 218px; left: -1412px; top: 375px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">NIP</div>
  <div style="left: -1346px; top: 431px; position: absolute; color: rgba(63, 35, 5, 0.50); font-size: 20px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Ketikkan NIP Anda</div>
  <div style="width: 492px; height: 57px; left: -1379px; top: 564px; position: absolute; background: #FFDADB; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 30px"></div>
  <div style="width: 218px; left: -1412px; top: 522px; position: absolute; color: #1E1E1E; font-size: 24px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Password</div>
  <div style="left: -1346px; top: 578px; position: absolute; color: rgba(63, 35, 5, 0.50); font-size: 20px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Password mengandung Angka dan Karakter</div>
  <div style="width: 28px; height: 28px; left: -942px; top: 431px; position: absolute">
    <div style="width: 18.67px; height: 18.67px; left: 4.67px; top: 4.67px; position: absolute; background: #1E1E1E"></div>
  </div>
  <div style="width: 29px; height: 29px; left: -940px; top: 578px; position: absolute">
    <div style="width: 26.58px; height: 22.96px; left: 1.21px; top: 3.62px; position: absolute; background: #1E1E1E"></div>
  </div>
  <div style="width: 187.02px; height: 0px; left: -1412px; top: 896px; position: absolute; transform: rotate(-0.92deg); transform-origin: 0 0; border: 1px #E7CD9D solid"></div>
  <div style="width: 156px; height: 0px; left: -1043px; top: 896px; position: absolute; border: 1px #E7CD9D solid"></div>
  <img style="width: 222px; height: 68px; left: -1248px; top: 664px; position: absolute" src="https://via.placeholder.com/222x68" />
  </div>
  <img style="width: 131px; height: 67px; left: 209px; top: 22px; position: absolute; box-shadow: 0px 4px 1px rgba(0, 0, 0, 0.05)" src="{{ asset('images/Logo prestasi.png') }}" />
  <div style="width: 618px; left: 769px; top: 204px; position: absolute; color: #1E1E1E; font-size: 30px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">{{ $user->name }}</div>
  <div style="width: 28px; height: 29px; left: 774px; top: 260px; position: absolute">
    <div style="width: 28px; height: 21.27px; left: 0px; top: 3.87px; position: absolute; background: #FEB1B3"></div>
  </div>
  <div style="left: 828px; top: 255px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">
        {{$userData->nip}}
    </div>
  <div style="width: 28px; height: 28px; left: 775px; top: 331px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
  </div>
  <div style="left: 828px; top: 328px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">{{$userData->jabatan}}</div>
  <div style="left: 828px; top: 365px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">{{$userData->unit_kerja}}</div>
  <div style="left: 828px; top: 472px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">{{$userData->no_telp}}</div>
  <div style="left: 828px; top: 439px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">{{$userData->email_pribadi}}</div>
  <div style="left: 829px; top: 402px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">{{$userData->email_institusi}}</div>
  <div style="width: 30px; height: 30px; left: 773px; top: 368px; position: absolute">
    <div style="width: 16.88px; height: 22.50px; left: 7.50px; top: 3.75px; position: absolute; background: #FEB1B3"></div>
  </div>
  <!-- <div style="width: 935px; height: 334px; left: 481px; top: 184px; position: absolute; border-radius: 10px; border: 3px #EEEDED solid"></div>
  <div style="left: 829px; top: 291px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Pembina/IVa</div>
  <div style="height: 35px; left: 41px; top: 874px; position: absolute">
  <div style="width: 867px; height: 421px; left: 463px; top: 562px; position: absolute">
    <div style="width: 867px; height: 395px; left: 0px; top: 26px; position: absolute">
      <img style="width: 867px; height: 395px; left: 0px; top: 0px; position: absolute" src="https://via.placeholder.com/867x395" />
      <div style="width: 740.66px; height: 33.54px; left: 70.50px; top: 361.46px; position: absolute; background: white"></div>
    </div>
    <div style="width: 176px; height: 33px; left: 361px; top: 0px; position: absolute; background: white"></div>
    <div style="width: 311px; height: 371px; left: 537px; top: 16px; position: absolute; background: white"></div>
  </div>
  <div style="width: 49px; left: 555px; top: 952px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Kg</div>
  <div style="width: 49px; left: 617px; top: 952px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Pw</div>
  <div style="width: 49px; left: 697px; top: 952px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">PI</div>
  <div style="width: 65px; left: 757px; top: 952px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">PTJ</div>
  <div style="width: 65px; left: 832px; top: 952px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">BP</div>
  <div style="width: 65px; left: 900px; top: 952px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">OH</div>
  <div style="width: 65px; left: 972px; top: 952px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">TP</div>
  <div style="width: 297px; height: 281px; left: 1101px; top: 628px; position: absolute">
    <div style="width: 49px; left: 0px; top: 44px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Kg</div>
    <div style="width: 49px; left: 0px; top: 114px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">PI</div>
    <div style="width: 65px; left: 0px; top: 150px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">PTJ</div>
    <div style="width: 65px; left: 0px; top: 186px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">BP</div>
    <div style="width: 65px; left: 0px; top: 221px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">OH</div>
    <div style="width: 65px; left: 0px; top: 256px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">TP</div>
    <div style="left: 0px; top: 0px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Keterangan</div>
    <div style="left: 55px; top: 37px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Keanggotaan</div>
    <div style="left: 55px; top: 71px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Perwakilan</div>
    <div style="left: 55px; top: 106px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Pertemuan Ilmiah</div>
    <div style="left: 55px; top: 142px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Penghargaan/Tanda Jasa</div>
    <div style="left: 55px; top: 178px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Buku Pelajaran</div>
    <div style="left: 55px; top: 213px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Olahraga/Humainora</div>
    <div style="left: 55px; top: 248px; position: absolute; color: #323232; font-size: 23px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Tim Penilaian</div>
    <div style="width: 49px; left: 0px; top: 79px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Pw</div> -->
    
  </div>
</div>
@endsection