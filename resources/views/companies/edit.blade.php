
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش شرکت</title>
</head>
<body>

    <h1>ویرایش اطلاعات شرکت</h1>

    <form action="{{ route('companies.update', $company['id']) }}" method="POST">

        @csrf
        @method('PUT')

        <label>نام شرکت:</label>
        <input type="text" name="name"
               value="{{ $company['name'] }}" required>

        <br><br>

        <label>ایمیل شرکت:</label>
        <input type="email" name="email"
               value="{{ $company['email'] }}" required>

        <br><br>

        <label>شماره تماس:</label>
        <input type="text" name="phone"
               value="{{ $company['phone'] }}" required>

        <br><br>

        <label>آدرس شرکت:</label>
        <input type="text" name="address"
               value="{{ $company['address'] }}" required>

        <br><br>

        <button type="submit">ذخیره تغییرات</button>

    </form>

    <br>

    <a href="{{ route('companies.index') }}">بازگشت به لیست</a>

</body>
</html>
