<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ورود</title>

    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header class="header">

    <div class="logo">
        <img src="{{ asset('61-612746_students-internship-symbol.png') }}" alt="لوگو">
        <span>IMS</span>
    </div>

    <nav class="nav">
        <a href="{{ url('/') }}">خانه</a>
    </nav>

</header>

<section class="login-section">

    <h2>ورود</h2>

    <form class="form" id="loginForm">

        <input
            type="email"
            id="loginEmail"
            placeholder="ایمیل">

        <input
            type="password"
            id="loginPassword"
            placeholder="رمز عبور">

        <button type="submit">
            ورود
        </button>

    </form>

</section>

<script src="{{ asset('js/storage.js') }}"></script>
<script src="{{ asset('js/Validation.js') }}"></script>

</body>
</html>