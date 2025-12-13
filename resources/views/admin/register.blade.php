<!DOCTYPE html>
<html lang="id">
<head>  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/loginRegister.css') }}" />
    
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>


</head>
<body>

@if(session('notification'))
<div class="notification">
    <strong>Notifikasi</strong><br>
    {{ session('notification')['message'] }}
</div>
@endif

<div class="auth-wrapper">
    <div class="auth-card">
        <h2>SIPENA</h2>

        <form action="/register" method="POST">
            @csrf

            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email">

            <label>Nama</label>
            <input type="text" name="name" placeholder="Masukkan nama Anda">

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password">

            <button class="auth-btn">Daftar</button>
        </form>

        <p class="auth-link">Sudah punya akun? <a href="/login">Masuk</a></p>
    </div>
</div>

</body>
</html>
