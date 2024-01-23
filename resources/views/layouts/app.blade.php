<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tugas Besar Web')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxuHwMP6oQEMMcA8/1AapKGTr83xBSO2+/Y1xYNVgsJr5XcV0vvNS1XuxgNOjXXKaCJb8a5jJu6JdOS6DNUDGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('js/clearInput.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="..." crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        .container {
            max-width: 1440px; /* Set your desired maximum width */
            margin: 0 auto; /* Center the container */
        }
        .dropdown {
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            display: none; /* Initially hide the dropdown */
        }
    </style>
    <!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('keanggotaanIcon').addEventListener('click', function () {
            var dropdown = document.getElementById('dropdownKeanggotaan');
            dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
        });
    });
</script> -->
</head>
<body>

        @yield('content')
   
    <!-- Example dropdown content -->
        <!-- <div id="keanggotaanIcon" class="icon-container" style="left: 41px; top: 249px;">
            <i class="fas fa-user" style="color: #FEB1B3;"></i>
        </div>
        <div class="text-container" style="left: 100px; top: 249px; color: #1E1E1E;">Keanggotaan</div> -->

        <!-- Dropdown Keanggotaan -->
        <!-- <div id="dropdownKeanggotaan" class="dropdown" style="position: absolute; left: 100px; top: 288px; display: none;"> -->
            <!-- Dropdown content -->
            <!-- <div style="color: #FF5054; font-size: 24px; font-family: Gowun Dodum; font-weight: 400; word-wrap: break-word">Perguruan Tinggi</div> -->
            <!-- Add more dropdown items as needed -->
        <!-- </div> -->
    </div>

    <!-- Add the following lines for your dropdown -->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('keanggotaanIcon').addEventListener('click', function () {
                var dropdown = document.getElementById('dropdownKeanggotaan');
                dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
            });
        });
    </script> -->
<<<<<<< HEAD
=======
    
>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f
</body>
</html>