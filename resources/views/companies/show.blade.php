
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات شرکت</title>
</head>
<body>

    <h1>جزئیات شرکت</h1>

    <p><strong>شماره ID:</strong> {{ $company['id'] }}</p>
    <p><strong>نام شرکت:</strong> {{ $company['name'] }}</p>
    <p><strong>ایمیل:</strong> {{ $company['email'] }}</p>
    <p><strong>شماره تماس:</strong> {{ $company['phone'] }}</p>
    <p><strong>آدرس:</strong> {{ $company['address'] }}</p>

    <br>

    <a href="{{ route('companies.index') }}">بازگشت به لیست شرکت‌ها</a>

</body>
</html>
