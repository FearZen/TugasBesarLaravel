
<div style="width: 1440px; height: 1024px; position: relative; background: white">
  <img style="width: 234px; height: 142px; left: 51px; top: 20px; position: absolute" src="{{ asset('images/logo umm.jpg') }}" />
  <img style="width: 180px; height: 92px; left: 325px; top: 32px; position: absolute; box-shadow: 0px 4px 1px rgba(0, 0, 0, 0.05)" src="{{ asset('images/Logo prestasi.png') }}" />
  <div style="width: 232px; height: 232px; left: 616px; top: 162px; position: absolute">
  <div class="check-container">
    <img src="{{ asset('images/R.png') }}" alt="Checkmark" class="check-mark">
</div>

  </div>
  <div style="width: 1232px; left: 113px; top: 412px; position: absolute; text-align: center"><span style="color: #3F2305; font-size: 64px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Terima Kasih Annisa Artanti, </span><span style="color: #3F2305; font-size: 48px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Data perguruan tinggi telah berhasil di simpan!</span></div>
  <style>
    .check-container {
    width: 280px;
    height: 280px;
    position: relative;
}

.check-mark {
    width: 50%;
    height: 50%;
    position: absolute;
    top: 25%;
    left: 25%;
    animation: moveCheck 2s infinite;
}

@keyframes moveCheck {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(20px);
    }
    100% {
        transform: translateY(0);
    }
}

        .menu-button {
            width: 326px;
            height: 90px;
            position: absolute;
            left: 569px;
            top: 673px;
            cursor: pointer;
        }

        .button-background {
            width: 100%;
            height: 100%;
            background: #FF5054;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
        }

        .button-text {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            color: #FCFAF5;
            font-size: 26px;
            font-family: 'Fredoka One', sans-serif;
            font-weight: 400;
            word-wrap: break-word;
        }
    </style>
  <a class="menu-button" href="{{ route('dashboard') }}">
        <div class="button-background"></div>
        <div class="button-text">Menu Utama</div>
    </a>
</div>