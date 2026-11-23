
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت شرکت جدید</title>
</head>
<body>

    <h1>ثبت شرکت جدید</h1>

    <form action="{{ route('companies.store') }}" method="POST">

        @csrf

        <label>نام شرکت:</label>
        <input type="text" name="name" required>

        <br><br>

        <label>ایمیل شرکت:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>شماره تماس:</label>
        <input type="text" name="phone" required>

        <br><br>

        <label>آدرس شرکت:</label>
        <input type="text" name="address" required>

        <br><br>

        <button type="submit">ثبت شرکت</button>

    </form>

    <br>

    <a href="{{ route('companies.index') }}">بازگشت به لیست شرکت‌ها</a>

</body>
</html>
