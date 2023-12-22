@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/clearInput.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var clearEmail = document.getElementById('clearEmail');
            var emailInput = document.getElementById('email');
            var placeholderText = document.getElementById('emailPlaceholder');

            if (clearEmail && emailInput && placeholderText) {
                clearEmail.addEventListener('click', function () {
                    emailInput.value = '';
                    placeholderText.style.display = 'block';
                });

                emailInput.addEventListener('input', function () {
                    if (emailInput.value !== '') {
                        placeholderText.style.display = 'none';
                    } else {
                        placeholderText.style.display = 'block';
                    }
                });
            }

            var loginForm = document.getElementById('loginForm');
            if (loginForm) {
                loginForm.addEventListener('submit', function (event) {
                    // // Pastikan reCAPTCHA terisi (dikomentari untuk menonaktifkan reCAPTCHA)
                    // var recaptchaResponse = grecaptcha.getResponse();
                    // if (!recaptchaResponse) {
                    //     alert('Mohon lengkapi reCAPTCHA.');
                    //     event.preventDefault(); // Hentikan pengiriman formulir jika reCAPTCHA kosong
                    // }
                });

                var clearPassword = document.getElementById('clearPassword');
                var passwordInput = document.getElementById('password');
                var passwordPlaceholder = document.getElementById('passwordPlaceholder');
                var togglePassword = document.getElementById('togglePassword');

                if (clearPassword && passwordInput && passwordPlaceholder && togglePassword) {
                    clearPassword.addEventListener('click', function () {
                        passwordInput.value = '';
                        passwordPlaceholder.style.display = 'block';
                    });

                    passwordInput.addEventListener('input', function () {
                        if (passwordInput.value !== '') {
                            passwordPlaceholder.style.display = 'none';
                        } else {
                            passwordPlaceholder.style.display = 'block';
                        }
                    });

                    togglePassword.addEventListener('click', function () {
                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                            togglePassword.className = 'fas fa-eye-slash';
                        } else {
                            passwordInput.type = 'password';
                            togglePassword.className = 'fas fa-eye';
                        }
                    });
                }
            }
        });
    </script>
   
   <style>
    /* Tambahkan gaya CSS di sini */
    .form-container {
        position: absolute;
        left: 810px;
        top: 448px;
        width: 492px;
    }

    .form-container div {
        margin-bottom: 20px; /* Tambahkan margin-bottom agar elemen-elemen tidak saling tumpang tindih */
        color: #1E1E1E;
        font-size: 24px;
        font-family: 'Fredoka One', sans-serif;
        font-weight: 400;
        word-wrap: break-word;
    }

    .form-container input {
        width: 100%;
        height: 100%;
        border: none;
        background: #FFDADB;
        border-radius: 30px;
        padding: 15px;
        margin-bottom: 20px; /* Tambahkan margin-bottom agar elemen-elemen tidak saling tumpang tindih */
    }

    .clear-button {
        cursor: pointer;
        width: 18.67px;
        height: 18.67px;
        position: absolute;
        right: -45px; /* Tambahkan right untuk menentukan posisi dari kanan */
        
    }
    #clearEmil{
        font-size: 18px;
        color: #1E1E1E;
        position: absolute;
        right: -10px; /* Tambahkan right untuk menentukan posisi dari kanan */
        top: -50px;
    }
    #togglePassword {
        font-size: 18px;
        color: #1E1E1E;
        position: absolute;
        right: -10px; /* Tambahkan right untuk menentukan posisi dari kanan */
        top: -50px;
    }

    .placeholder-text {
        position: absolute;
        color: rgba(63, 35, 5, 0.50);
        font-size: 20px;
        font-family: 'Gowun Dodum', sans-serif;
        font-weight: 400;
        word-wrap: break-word;
        display: block;
        margin-top: 100px; /* Tambahkan margin-top agar tidak tumpang tindih dengan input */
    }

    .submit-button {
        width: 311px;
        height: 57px;
        position: absolute;
        margin-top: 30px; /* Tambahkan margin-top agar tidak tumpang tindih dengan input */
    }
</style>

    <div style="width: 1440px; height: 1024px; position: relative; background: white">
        <img style="width: 1039px; height: 799px; left: -250px; top: 288px; position: absolute" src="{{ asset('images/gambarlogin.png') }}" />
        <img style="width: 234px; height: 142px; left: 933px; top: 50px; position: absolute" src="{{ asset('images/logo umm.jpg') }}" />
        <img style="width: 180px; height: 92px; left: 1207px; top: 62px; position: absolute; box-shadow: 0px 4px 1px rgba(0, 0, 0, 0.05)" src="{{ asset('images/Logo prestasi.png') }}" />

        <div style="width: 576px; left: 67px; top: 58px; position: absolute; color: #1E1E1E; font-size: 64px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Berkilau dengan PrestasiPlus!</div>

        <div style="width: 152px; left: 808px; top: 288px; position: absolute; color: #1E1E1E; font-size: 40px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Masuk</div>

        <!-- Formulir Email dan Password -->
        <form id="loginForm" method="POST" action="{{ route('login') }}" class="form-container">
            @csrf
            <div>Email</div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div id="clearEmail" class="clear-button">
                <i class="fas fa-times" id="clearEmil"style="font-size: 18px; color: #1E1E1E;"></i>
            </div>
            <!-- <div class="placeholder-text" id="emailPlaceholder">Ketikkan Alamat Email Anda</div> -->

            <div>Password</div>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <div id="clearPassword" class="clear-button">
                <i class="fas fa-eye" id="togglePassword" style="font-size: 18px; color: #1E1E1E;"></i>
            </div>
            <!-- <div class="placeholder-text" id="passwordPlaceholder">Ketikkan Password Anda</div> -->

            <!-- Tombol Masuk -->
            <div class="submit-button">
                <div style="width: 311px; height: 57px; position: absolute; background: #CB4649; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 30px"></div>
                <input type="submit" value="Masuk" style="width: 311px; height: 57px; left: 0; top: 0; position: absolute; background: #CB4649; border: none; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 30px; color: white; font-size: 24px; font-family: 'Fredoka One', sans-serif; font-weight: 400; word-wrap: break-word">
            </div>
        </form>
    

        <div style="left: 1009px; top: 910px; position: absolute; color: #1E1E1E; font-size: 20px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">PrestasiPlus UMM</div>
        <div style="width: 186px; height: 0px; left: 810px; top: 927px; position: absolute; border: 1px #CB4649 solid"></div>
        <div style="width: 162px; height: 0px; left: 1173px; top: 927px; position: absolute; border: 1px #CB4649 solid"></div>
    </div>
@endsection