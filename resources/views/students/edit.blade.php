<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش دانشجو</title>
</head>
<body>

    <h1>ویرایش اطلاعات دانشجو</h1>

    <form action="{{ route('students.update', $student['id']) }}" method="POST">

        @csrf
        @method('PUT')

        <label>نام:</label>
        <input type="text" name="name"
               value="{{ $student['name'] }}" required>

        <br><br>

        <label>ایمیل:</label>
        <input type="email" name="email"
               value="{{ $student['email'] }}" required>

        <br><br>

        <label>شماره تماس:</label>
        <input type="text" name="phone"
               value="{{ $student['phone'] }}" required>

        <br><br>

        <button type="submit">ذخیره تغییرات</button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">بازگشت به لیست</a>

</body>
</html>