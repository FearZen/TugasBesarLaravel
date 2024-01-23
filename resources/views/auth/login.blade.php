<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/clearInput.js') }}"></script>
</head>
<body>
    <div style="width: 1440px; height: 1024px; position: relative; background: white">
        <img style="width: 1039px; height: 799px; left: -250px; top: 288px; position: absolute" src="{{ asset('images/gambarlogin.png') }}" />
        <img style="width: 234px; height: 142px; left: 933px; top: 50px; position: absolute" src="{{ asset('images/logo umm.jpg') }}" />
        <img style="width: 180px; height: 92px; left: 1207px; top: 62px; position: absolute; box-shadow: 0px 4px 1px rgba(0, 0, 0, 0.05)" src="{{ asset('images/Logo prestasi.png') }}" />

        <div style="width: 576px; left: 67px; top: 58px; position: absolute; color: #1E1E1E; font-size: 64px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Berkilau dengan PrestasiPlus!</div>

        <div style="width: 152px; left: 808px; top: 288px; position: absolute; color: #1E1E1E; font-size: 40px; font-family: Fredoka One; font-weight: 400; word-wrap: break-word">Masuk</div>

        <!-- Formulir Email dan Password -->
        <form id="loginForm" method="POST" action="{{ route('login') }}" class="form-container">
            @csrf
            @if ($errors->any())
                <div style="color: red; margin-bottom: 10px;">
                    <strong>Oops! Terdapat kesalahan pada formulir:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>Email</div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div id="clearEmail" class="clear-button">
                <i class="fas fa-times" id="clearEmil"></i>
            </div>
            <!-- <div class="placeholder-text" id="emailPlaceholder">Ketikkan Alamat Email Anda</div> -->

            <div>Password</div>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <div id="clearPassword" class="clear-button">
                <i class="fas fa-eye" id="togglePassword"></i>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/clearInput.js') }}"></script>
</body>
</html>