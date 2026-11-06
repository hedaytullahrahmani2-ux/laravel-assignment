<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات دانشجو</title>
</head>
<body>

    <h1>جزئیات دانشجو</h1>

    <p><strong>شماره ID:</strong> {{ $student['id'] }}</p>
    <p><strong>نام:</strong> {{ $student['name'] }}</p>
    <p><strong>ایمیل:</strong> {{ $student['email'] }}</p>
    <p><strong>شماره تماس:</strong> {{ $student['phone'] }}</p>

    <br>

    <a href="{{ route('students.index') }}">بازگشت به لیست دانشجویان</a>

</body>
</html>