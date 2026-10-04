<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ثبت‌ نام</title>

 <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<header class="header">

    <div class="logo">
        <img src="61-612746_students-internship-symbol.png" alt="لوگو">
        <span>IMS</span>
    </div>

    <nav class="nav">
        <a href="index.html">خانه</a>
    </nav>

</header>

<section class="signup-section">

    <h2>ثبت‌ نام</h2>

    <form class="form" id="signupForm">

        <input 
        type="text" 
        id="username"
        placeholder="نام کاربر">

        <input 
        type="email" 
        id="email"
        placeholder="ایمیل">

        <input 
        type="password" 
        id="password"
        placeholder="رمز عبور">

        <input 
        type="password" 
        id="confirmPassword"
        placeholder="تکرار رمز عبور">

        <button type="submit">
            ثبت‌ نام
        </button>

    </form>

</section>
<script src="js/storage.js"></script>
<script src="js/Validation.js"></script>

</body>
</html>